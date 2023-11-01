<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <!-- Blog content -->
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <?php
                // Controleer of de 'title'-parameter is ingesteld
                if (isset($_GET['title'])) {
                    // Haal de waarde van de 'title'-parameter op en decodeer deze
                    $title = urldecode($_GET['title']);

                    // Hier kun je de databasequery uitvoeren om de bloggegevens te halen
                    // Gebruik $title in je query om de juiste blogpost op te halen
                    include 'db-connection.php';

                    $sql = "SELECT titel, admin, datum, foto, tekst FROM blogs WHERE titel = '$title'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $title = $row["titel"];
                        $author = $row["admin"];
                        $date = $row["datum"];
                        $image_url = $row["foto"];
                        $tekst = $row["tekst"];
                        $content = $row["tekst"];

                        // Toon de bloggegevens op de pagina
                        echo '<h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">' . $title . '</h2>';
                        echo '<p class="mt-2 text-lg leading-8 text-gray-600">Door ' . $author . ' op ' . $date . '</p>';
                        echo '<img src="' . $image_url . '" alt="' . $title . '" class="mt-4">';
                        echo '<div class="mt-4">' . $content . '</div>';
                    } else {
                        echo "Blogpost niet gevonden.";
                    }

                    // Sluit de databaseverbinding
                    $conn->close();
                } else {
                    echo "Ongeldige URL. Titelparameter ontbreekt.";
                }

                ?>
            </div>
        </div>
    </div>
</body>

</html>