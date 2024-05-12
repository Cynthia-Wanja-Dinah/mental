<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Page</title>
    <link rel="stylesheet" href="styles.css">
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(images/mental.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #ccc;
}

h2 {
    text-align: center;
}

fieldset {
    margin-bottom: 20px;
}

legend {
    font-weight: bold;
}

label {
    display: inline-block;
    width: 150px;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
input[type="submit"] {
    width: 50%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    border-left: 500px;
}

input[type="submit"] {
    background-color: purple;
    color: white;
    border: none;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: purple;
}
</style>



</head>
<body>
    <div class="container">
        <h2>Create Your Donation Here</h2>
        <form id="donation-form" action="donation1.php" method="post">
            <fieldset>
                <legend>Donation Frequency:</legend>
                <label><input type="radio" name="frequency" value="monthly"> Monthly</label><br>
                <label><input type="radio" name="frequency" value="weekly"> Weekly</label><br>
                <label><input type="radio" name="frequency" value="annual"> Annual</label>
            </fieldset>
            <fieldset>
                <legend>Donation Details:</legend>
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" required><br>
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
            </fieldset>
            <fieldset>
                <legend>Billing Address:</legend>
                <label for="street-address">Street Address:</label>
                <input type="text" id="street-address" name="street-address" required><br>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required><br>
                <label for="state">State/Province:</label>
                <input type="text" id="state" name="state" required><br>
                <label for="postal-code">Postal Code:</label>
                <input type="text" id="postal-code" name="postal-code" required><br>
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required><br>
            </fieldset>
            <input type="submit" value="send">
        </form>
    </div>
</body>
</html>
