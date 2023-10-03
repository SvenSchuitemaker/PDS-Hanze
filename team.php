<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
            <div class="flex h-16 justify-between">
                <div class="flex px-2 lg:px-0">
                    <div class="hidden lg:ml-6 lg:flex lg:space-x-8">
                        <a href="index.php" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Home</a>
                        <a href="team.php" class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Team</a>
                        <a href="info.php" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Informatie</a>
                        <a href="chat.php" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Chat met anderen</a>
                        <a href="blog.php" class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Blog</a>
                    </div>
                </div>

                <!-- Zoekbalk -->

                <div class="flex flex-1 items-center justify-center px-2 lg:ml-6 lg:justify-end">
                    <div class="w-full max-w-lg lg:max-w-xs">
                        <label for="search" class="sr-only">Zoeken</label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="search" name="search" class="block w-full rounded-md border-0 bg-white py-1.5 pl-10 pr-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Search" type="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="lg:hidden" id="mobile-menu">
            <div class="space-y-1 pb-3 pt-2">
                <a href="index.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Home</a>
                <a href="team.php" class="block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700">Team</a>
                <a href="info.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Informatie</a>
                <a href="chat.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Chat met anderen</a>
                <a href="blog.php" class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Blog</a>
            </div>
        </div>
    </nav>

    <!-- Team section -->
    <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-48 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ons team</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Ons team is samen gekomen na een hockey training.
                Vera vertelde dat ze een opdracht voor school moest maken waarbij ze mensen met
                <span class="font-bold">Prikkelbare Darm Syndroom (PDS)</span> moest helpen informatie te krijgen over het syndroom.
                Hierop sprong Sven in dat hij er een website voor kon maken. En zo doende.
            </p>
        </div>
        <div>
            <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-2 gap-x-8 gap-y-16 text-center sm:grid-cols-3 md:grid-cols-4 lg:mx-0 lg:max-w-none lg:grid-cols-5 xl:grid-cols-6">
                <li>
                    <img class="mx-auto h-24 w-24 rounded-full" src="images/Sven.jpg" alt="Sven Schuitemaker">
                    <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Sven Schuitemaker</h3>
                    <p class="text-sm leading-6 text-gray-600">Software Developer BIT</p>
                    <p class="text-sm leading-6 text-gray-600">Noorderpoort</p>
                </li>
                <li>
                    <img class="mx-auto h-24 w-24 rounded-full bg-slate-100" src="" alt="">
                    <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Vera Regtien</h3>
                    <p class="text-sm leading-6 text-gray-600">Voeding en diëtetiek</p>
                    <p class="text-sm leading-6 text-gray-600">Hanzehogeschool</p>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>