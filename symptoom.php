<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptoom dagboek</title>
</head>

<body>

    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <h1>Symptoom dagboek</h1>
    <form action="download.php" method="post">
        <input type="hidden" name="file1" value="images/Symptoomdagboek1.png">
        <input type="hidden" name="file2" value="images/Symptoomdagboek2.png">
        <input type="submit" value="Download Bestanden">
    </form>
</body>

</html>