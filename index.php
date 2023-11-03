<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikkelbare darmsyndroom</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- Navigation -->
    <?php include 'navbar.php'; ?>

    <header>
        <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
            <img src="images/home.jpg" alt="" class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight sm:text-6xl">Prikkelbare darm syndroom</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-800">
                        <span class="font-bold">Prikkelbare Darm Syndroom (PDS)</span>
                        is een chronische darmaandoening waarbij je vooral buikpijn en
                        ontlastingsproblemen (bijvoorbeeld verstopping of diarree) hebt.
                        Ook gasvorming, een opgezette buik en vermoeidheid komen veel voor.
                    </p>
                </div>
                <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-6 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                    <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-gray-800">
                        <a href="info.php" class="transition duration-300 hover:scale-95">
                            <div class="text-base leading-7">
                                <h3 class="font-semibold text-gray-800">Informatie</h3>
                                <p class="mt-2 text-gray-700">Informatie over PDS en symptomen</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-gray-800">
                        <a href="../chatapp/index.php" class="transition duration-300 hover:scale-95">
                            <div class="text-base leading-7">
                                <h3 class="font-semibold text-gray-800">Chat met anderen!</h3>
                                <p class="mt-2 text-gray-700">Chat met andere personen met PDS!</p>
                            </div>
                        </a>
                    </div>
                    <div class="flex gap-x-4 rounded-xl bg-white/5 p-6 ring-1 ring-inset ring-gray-800">
                        <a href="blog.php" class="transition duration-300 hover:scale-95">
                            <div class="text-base leading-7">
                                <h3 class="font-semibold text-gray-800">Blog</h3>
                                <p class="mt-2 text-gray-700">Verschillende blogs.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer class="mx-auto mt-40 max-w-7xl overflow-hidden px-6 pb-20 sm:mt-64 sm:pb-24 lg:px-8">
        <p class="mt-10 text-center text-xs leading-5 text-gray-500">In samenwerking met studenten van de Hanzehogeschool en Noorderpoort Groningen</p>
    </footer>
</body>

</html>