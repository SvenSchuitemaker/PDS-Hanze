<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fodmap-dieet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include '../navbar.php'; ?>

    <div class="container flex place-content-center">
        <div class="mt-10 w-1/2">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">FODMAP-dieet</h1>
            <p class="mt-2">Wanneer u gediagnosticeerd bent hebt u vast weleens van de term FODMAP-dieet gehoord.
                Maar wat is het nu eigenlijk?</p>
            <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Betekenis FODMAP</h2>
            <p class="mt-2">FODMAP is een bewezen effectieve behandeling voor patiënten met het prikkelbare
                darm syndroom (PDS). Dit is een tijdelijk dieet met als doel om in een paar maanden te ontdekken
                welke voedingsmiddelen jou PDS-klachten geven.
            </p>
            <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">FODMAP staat voor:</h2>
            <p class="mt-2">Fermenteerbare Oligosachariden, Disachariden, Monosachariden en Polyolen. Dit zijn
                groepen voedingsmiddelen die darmklachten kunnen veroorzaken bij mensen met PDS. De dunne darm
                neemt deze voedingsmiddelen slecht op, dit veroorzaakt u PDS-klachten. Deze voedingsmiddelen
                zitten in bepaalde groenten, fruitsoorten, tarwe en dierlijke melkproducten.
            </p>
            <p class="mt-1">Van welke voedingsmiddelen u klachten krijgt is per persoon verschillend!
                Hoeveel u van het voedingsmiddel eet is bepalend voor of u het kan verdragen of niet.</p>

            <img src="../images/fodmap.png" alt="fodmap" class="mt-10 mb-8 border rounded-2xl">

            <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Opbouw van FODMAP-dieet</h2>
            <p class="mt-2">Het FODMAP-dieet bestaat uit 3 fases:</p>
            <ol class="ml-3">
                <li>1. Eliminatiefase, je eet een paar weken (4 tot maximaal 6 weken) FODMAP-arm.
                    Je vermijdt zoveel mogelijk voeding met veel FODMAP’s.</li>
                <li>2. Herintroductiefase, je herintroduceerd verschillende FODMAP-groepen in je dagelijkse voeding</li>
                <li>3. Aangepast en persoonlijk FODMAP-dieet, de FODMAP’s waar je heftig op reageert laat je uit je
                    voedingspatroon en verder eet je alles weer. Hierbij houd je rekening met welke hoeveelheid van
                    een voedingsmiddel klachten veroorzaakt.</li>
            </ol>
            <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">FODMAP-dieet, doe het niet alleen!</h2>
            <p class="mt-2">Het FODMAP-dieet is een ingrijpend dieet wat vraagt om veel verandering. Dit maakt het
                belangrijk om goede begeleiding te hebben als je start met dit dieet. Op
                <a class="text-indigo-600" href="http://www.fodmapdietist.nl/">www.fodmapdietist.nl</a> staat
                een overzicht van diëtisten in Nederland die werken met het FODMAP-dieet. Op <a class="text-indigo-600" href="https://www.monashfodmap.com/online-training/fodmap-dietitians-directory/">FODMAP Dietitians
                    Directory</a> vind je welke diëtisten in Nederland erkent zijn als experts in het FODMAP-dieet, zij
                hebben een cursus gevolgd waardoor zij deze aantekening hebben gekregen.
            </p>
            <p class="mt-2">Via de link FODMAP-arme en FODMAP-rijke producten is een overzichtelijke lijst te vinden met
                voedingsmiddelen die FODMAP-arm en FODMAP-rijk zijn.</p>
            <p class="mt-2">Er zijn veel voedingsmiddelen die u in de eliminatiefase tijdelijk niet eet.
                Maar wat mag u dan wel eten? Het is goed om te weten dat er veel recepten op het internet
                staan die beweren dat zij Low-FODMAP zijn, maar die dit niet zijn! Check dus altijd de
                ingrediënten van een recept. Een AVG’tje is een goede optie, indien je het juiste vlees
                en groente kiest. Daarnaast zijn onderstaande recepten Low-FODMAP en dus geschikt voor de eliminatiefase.</p>

            <!-- Recepten -->
            <div class="mt-10">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Select a tab</label>
                    <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option value="tab1">Lactosevrije kwark</option>
                        <option value="tab2">Gezonde koekjes</option>
                        <option value="tab3">Pompoensoep</option>
                        <option value="tab4">Romige spaghetti</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <div class="border-b border-gray-200">
                        <nav class="-mb-px flex" aria-label="Tabs">
                            <a href="#tab1" class="tablink border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium" aria-current="page">Lactosevrije kwark</a>
                            <a href="#tab2" class="tablink border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium">Gezonde koekjes</a>
                            <a href="#tab3" class="tablink border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium">Pompoensoep</a>
                            <a href="#tab4" class="tablink border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 w-1/4 border-b-2 py-4 px-1 text-center text-sm font-medium">Romige spaghetti</a>
                        </nav>
                    </div>
                </div>
            </div>

            <div id="tab1" class="tabcontent relative mb-10">
                <!-- Inhoud voor Lactosevrije kwark -->
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">Lactosevrije kwark met banaan en rood fruit</h2>
                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Ingrediënten:</h2>
                <p class="mt-2"> - 150 gram lactosevrije kwark</p>
                <p class="mt-2"> - 1 banaan</p>
                <p class="mt-2"> - Handje aardbeien</p>
                <p class="mt-2"> - Handje frambozen</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Benodigdheden:</h2>
                <p class="mt-2"> - Mengkom</p>
                <p class="mt-2"> - Staafmixer</p>
                <p class="mt-2"> - Snijplank</p>
                <p class="mt-2"> - Snijmes</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Receptinstructies:</h2>
                <p class="mt-2"> 1. Was de aardbeien en frambozen. Zet het apart in 2 kommen.</p>
                <p class="mt-2"> 2. Voeg aan beide kommen 50 gram kwark toe en pureer. </p>
                <p class="mt-2"> 3. Neem een glas en schenk hier het kwark-framboos mengsel in.</p>
                <p class="mt-2"> 4. Voeg 50 gram kwark toe aan het glas.</p>
                <p class="mt-2"> 5. Schenk het kwark-framboos mengsel in het glas.</p>
                <p class="mt-2"> 6. Snijd de banaan in plakjes en leg boven op de kwark.</p>
                <p class="mt-2"> 7. Smullen maar!</p>

                <img src="../images/kwark.png" alt="Lactosevrije kwark" class="absolute top-0 right-0 m-2 border rounded-2xl">
            </div>

            <div id="tab2" class="tabcontent relative mb-10">
                <!-- Inhoud voor Lactosevrije kwark -->
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">Gezonde koekjes met havermout (8 stuks)</h2>
                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Ingrediënten:</h2>
                <p class="mt-2"> - 50 gram havermout</p>
                <p class="mt-2"> - 1 grote rijpe banaan</p>
                <p class="mt-2"> - 25 gram pure chocolade</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Benodigdheden:</h2>
                <p class="mt-2"> - Bakpapier</p>
                <p class="mt-2"> - Mengkom</p>
                <p class="mt-2"> - Snijplank</p>
                <p class="mt-2"> - Snijmes</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Receptinstructies:</h2>
                <p class="mt-2"> 1. Verwarm de oven voor op 180 graden. Bekleed de bakplaat met papier.</p>
                <p class="mt-2"> 2. Hak de chocolade in kleine stukjes. Prak de banaan fijn met een vork. </p>
                <p class="mt-2"> 3. Roer de havermout, banaan en chocolade door elkaar heen in een kom.</p>
                <p class="mt-2"> 4. Maak 8 balletjes en druk ze plat op de bakplaat. Bak het 20 minuten in de oven.</p>
                <p class="mt-2"> 5. Smullen maar!</p>

                <p class="mt-4"> Tip: bewaar de koekjes in een afgesloten trommel. Zo blijven ze lekker vers.</p>

                <img src="../images/koekje.png" alt="Havermout koekjes" class="absolute top-0 right-0 m-2 mt-10 border rounded-2xl">
            </div>

            <div id="tab3" class="tabcontent relative">
                <!-- Inhoud voor Pompoensoep -->
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">Pompoensoep (recept voor 4 personen)</h2>
                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Ingrediënten:</h2>
                <p class="mt-2"> - 1 (kabocha) pompoen</p>
                <p class="mt-2"> - 2 bouillon blokjes (maggi tuinkruiden bouillon uit pot)</p>
                <p class="mt-2"> - 1 liter water</p>
                <p class="mt-2"> - 1 tl paprikapoeder</p>
                <p class="mt-2"> - 1/2 tl cayenne peper</p>
                <p class="mt-2"> - Peper en zout</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Benodigdheden:</h2>
                <p class="mt-2"> - Snijplank</p>
                <p class="mt-2"> - Snijmes</p>
                <p class="mt-2"> - Bakplaat</p>
                <p class="mt-2"> - Bakpapier</p>
                <p class="mt-2"> - Grote pan</p>
                <p class="mt-2"> - Staafmixer</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Receptinstructies:</h2>
                <p class="mt-2"> 1. Verwarm de over voor op 200 graden.</p>
                <p class="mt-2"> 2. Was de pompoen en snijd hem in stukken. Haal de pitten eruit en laat de schil erom.</p>
                <p class="mt-2"> 3. Leg de stukken pompoen op de bakplaat en bak voor 30 minuten in de oven.</p>
                <p class="mt-2"> 4. Doe het water en de bouillonblokjes in een grote pan. Voeg de stukken pompoen toe en laat pruttelen. Laat dit 5 minuten staan.</p>
                <p class="mt-2"> 5. Pureer het geheel met de staafmixer tot een gladde soep.</p>
                <p class="mt-2"> 6. Breng de soep op smaak met paprikapoeder, cayenne peper, zout en peper.</p>
                <p class="mt-2"> 7. Smullen maar!</p>

                <img src="../images/pompoensoep.png" alt="Pompoen soep" class="absolute top-0 right-0 m-2 mt-10 border rounded-2xl w-1/3">
            </div>


            <div id="tab4" class="tabcontent relative">
                <!-- Inhoud voor Pompoensoep -->
                <h2 class="mt-2 text-2xl font-bold tracking-tight text-gray-900 sm:text-2xl">Romige Spaghetti met spinazie en spekjes (2 á 3 personen)</h2>
                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Ingrediënten:</h2>
                <p class="mt-2"> - 300 gram glutenvrije spaghetti</p>
                <p class="mt-2"> - 200 gram spinazie</p>
                <p class="mt-2"> - 120 gram spekjes</p>
                <p class="mt-2"> - 250 ml room op basis van soja</p>
                <p class="mt-2"> - Peper</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Benodigdheden:</h2>
                <p class="mt-2"> - Kookpan</p>
                <p class="mt-2"> - Vergiet</p>

                <h2 class="mt-2 text-2xl font-blod tracking-tight text-gray-900 sm:text-2xl">Receptinstructies:</h2>
                <p class="mt-2"> 1. Kook de pasta volgens de instructies op de verpakking.</p>
                <p class="mt-2"> 2. Was de spinazie in een vergiet en laat in de gootsteen staan.</p>
                <p class="mt-2"> 3. Bewaar een half kopje kookwater van de pasta en zet opzij. Giet de rest van het water,
                    samen met de pasta, over de spinazie in het vergiet. Door de warmte wordt de spinazie beetgaar.</p>
                <p class="mt-2"> 4. Bak de spekjes in de geleegde pasta kookpan.</p>
                <p class="mt-2"> 5. Zet het vuur lager en voeg de room toe. Voeg daarna de spaghetti en de spinaze toe, en voeg wat peper toe.</p>
                <p class="mt-2"> 6. Voeg een scheutje kookwater aan de pasta toe, hier wordt hij lekker smeuïg van.</p>
                <p class="mt-2"> 7. Smullen maar!</p>

                <img src="../images/pasta.png" alt="romige spaghetti" class="absolute top-0 right-0 m-2 mt-10 border rounded-2xl w-1/2">
            </div>
        </div>
    </div>

    <script>
        // JavaScript om de tabbladen te activeren
        const tablinks = document.querySelectorAll('.tablink');
        const tabcontents = document.querySelectorAll('.tabcontent');

        // Verberg alle tabcontent, behalve het eerste tabblad
        tabcontents.forEach((content, index) => {
            if (index === 0) {
                content.style.display = 'block';
            } else {
                content.style.display = 'none';
            }
        });

        tablinks.forEach((link) => {
            link.addEventListener('click', (e) => {
                e.preventDefault();

                // Verberg alle tabcontent
                tabcontents.forEach((content) => {
                    content.style.display = 'none';
                });

                // Activeer de gekozen tabcontent
                const tabId = link.getAttribute('href').substring(1);
                document.getElementById(tabId).style.display = 'block';
            });
        });
    </script>
</body>

</html>