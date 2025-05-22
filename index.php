<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="../image/logoc.ico">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <title>Accueil | COG'AIR SHOW</title>
    <style>
        :focus {
            outline: 3px solid #FFD700; /* Contraste visible */
            outline-offset: 2px;
            border-radius: 2px;
        }
    </style>
</head>

<body class="bg-black">
    <header role="banner" class="bg-black">
        <div class=" pl-5 sm:pl-10 md:pl-15 lg:pl-20 xl:pl-25 py-1 sm:py-1 md:py-2 lg:py-3 xl:py-4">
            <a aria-label="Retour à l'acceuil" class="flex items-center w-fit" href="../index.php">
                <img src="../image/logon.png" class="h-7 sm:h-8 md:h-10 lg:h-14 xl:h-18"
                    alt="Logo du projet COG'AIR SHOW">
                <img src="../image/titre.png" class="pl-2 h-4 sm:h-5 md:h-6 lg:h-7 xl:h-8"
                    alt="Titre du projet COG'AIR SHOW">
            </a>
        </div>
    </header>
    <nav aria-label="Menu principal"
        class="font-mono bg-zinc-900 text-[10px] sm:text-base md:text-lg lg:text-xl xl:lg:text-2xl flex justify-evenly py-1 sm:py-1 md:py-2 lg:py-3 xl:py-4">
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'présentation'" href="../page/presentation.html"><b>PRÉSENTATION</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'équipe'" href="../page/equipe.html"><b>ÉQUIPE</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'déroulement'" href="../page/deroulement.html"><b>DÉROULEMENT</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" href="../fichier/manuel/Manuel MIRAGE 2000 C.pdf" type="application/pdf" target="_blank" aria-label="Manuel au format PDF, s’ouvre dans un nouvel onglet"><b>MANUEL</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'vidéos'" href="../page/video.html"><b>VIDEOS</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'bilan'" href="../page/bilan.html"><b>BILAN</b></a>
        <a class="hover:text-[#A4A4AD] tracking-wide text-white" aria-label="Aller à la page 'plan vert'" href="../page/planVert.html"><b>PLAN VERT</b></a>
    </nav>
    <main role="main">
        <div class="relative w-full">
            <img class="w-full h-auto" alt="l'avion Mirage 2000 C en vol" src="../image/avion.png">
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center">
                    <h1 class="font-mono uppercase text-2xl sm:text-5xl md:text-6xl lg:text-7xl xl:lg:text-8xl text-nowrap text-white"><b>Piloter le Mirage 2000 C</b></h1>
                    <p class="font-mono uppercase text-[9px] sm:text-sm md:text-lg lg:text-xl xl:lg:text-3xl text-nowrap text-white">Un projet transdisciplinaire pour apprendre à piloter le Mirage 2000 C</p>
                </div>
            </div>
        </div>
    </main>
    <footer role="contentinfo">
        <div class="xl:flex justify-between items-center bg-black text-white py-2 px-5">
            <aside class="font-mono text-xs sm:text-xs md:text-base lg:text-lg xl:text-xl">
                Crédits média : 
                <br/>
                Dassault Mirage 2000-5F (47/102-EP) - Armée de l'Air<br>
                © Stéphane Pichard utilisée sous licence 
                <a href="https://creativecommons.org/licenses/by/4.0/" class="underline">CC BY 4.0</a><br>
                Des modifications ont été apportées.
            </aside>
            <div class="items-center">
                <div class="text-white bg-black py-1 sm:py-1 md:py-2 lg:py-3 xl:py-4">
                    <div class="flex items-center justify-end pr-5 sm:pr-10 md:pr-15 lg:pr-20 xl:pr-25  pb-1 sm:pb-1 md:py-2 lg:pb-3 xl:pb-4">
                    <img src="../image/logon.png" class="h-7 sm:h-8 md:h-10 lg:h-14 xl:h-18"
                alt="Logo du projet COG'AIR SHOW">
            <img src="../image/titre.png" class="pl-2 h-4 sm:h-5 md:h-6 lg:h-7 xl:h-8"
                alt="Titre du projet COG'AIR SHOW">
                    </div>
                    <p class="font-mono text-xs sm:text-xs md:text-bse lg:text-lg xl:lg:text-xl text-white text-right pr-5 sm:pr-10 md:pr-15 lg:pr-20 xl:pr-25  pb-1 sm:pb-1 md:py-2 lg:pb-3 xl:pb-4">© 2025 COG'AIR SHOW – Tous droits réservés</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
