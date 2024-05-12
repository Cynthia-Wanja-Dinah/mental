<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "mental"; // Change this to your database name

// Create database connection
$conn = new mysqli($servername, $username, $password, $database);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $frequency = $_POST["frequency"];
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $streetAddress = $_POST["street-address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postalCode = $_POST["postal-code"];
    $country = $_POST["country"];

    // Validate form data (you can add more validation as needed)
    if (empty($frequency) || empty($firstName) || empty($lastName) || empty($email) || empty($streetAddress) || empty($city) || empty($state) || empty($postalCode) || empty($country)) {
        echo "All fields are required.";
    } else {
        // Insert the form data into the database
        $sql = "INSERT INTO donations (frequency, firstname, lastname, email, streetaddress, city, state, postalcode, country)
                VALUES ('$frequency', '$firstName', '$lastName', '$email', '$streetAddress', '$city', '$state', '$postalCode', '$country')";

        if ($conn->query($sql) === TRUE) {
            echo "Thank you for your donation!<br>";
            echo "Donation Frequency: $frequency<br>";
            echo "Name: $firstName $lastName<br>";
            echo "Email: $email<br>";
            echo "Billing Address: $streetAddress, $city, $state, $postalCode, $country";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    // Redirect back to the donation page if accessed directly
    header("Location: donate.php");
    exit();
}

// Close database connection
$conn->close();
?>
