<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDS chat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Navigation -->
    <?php
    include 'navbar.php';?>

    <?php
    if (isset($_SESSION['user_email'])) {
        echo "Welkom " . $_SESSION['user_email'] . "!<br>";
        var_dump($_SESSION);
    } else {
        echo "U bent niet ingelogd!<br>";
        var_dump($_SESSION['user_email']);
    }
    ?>

</body>

</html>