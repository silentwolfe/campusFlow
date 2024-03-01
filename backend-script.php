<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if ($email) {
            // Store the email in a file, database, or send it to your email
            file_put_contents("subscribers.txt", $email . "\n", FILE_APPEND);
        } else {
            // Handle the error for invalid email
            echo "Please enter a valid email address.";
        }
    }
    ?>
<section>
    <h1>Great you've just <br>subscribed 🎉</h1>
</section>
</body>
</html>