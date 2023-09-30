<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Home</title>
</head>
<body class="bg-red-100">
    <?php include './components/navbar.php'; ?>

    <div>
        <h1 class="flex justify-center text-2xl font-bold mb-32 mt-16 md:text-5xl">Welcome to <br class="md:hidden"> TasteOfPHL</h1>
    </div>

    <div class="bg-slate-400 text-slate-400 mb-5">.</div>
    <div class="bg-red-800 text-red-800">.</div>

    <div>
        <h1 class="flex justify-center text-lg font-bold mb-4 mt-5 md:mt-10 md:text-2xl">Featured Recipes</h1>
    </div>

    <div class="w-60 mx-auto flex justify-center items-center rounded-3xl md:w-full">
            <div class="md:max-w-md flex flex-row overflow-x-scroll snap-x snap-mandatory rounded-3xl">
                <div class="w-full flex-shrink-0 snap-start mr-10">
                    <div class="flex justify-center font-bold text-red-800 hover:text-slate-700">
                        <a href="recipes.php"><ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>Adobong Baboy</a>
                    </div>
                    <img src="./img/Adobong_Baboy_back.jpg" class="rounded-3xl">
                </div>
                <div class="w-full flex-shrink-0 snap-start mr-10">
                    <div class="flex justify-center font-bold text-red-800 hover:text-slate-700">
                        <a href="recipes.php"><ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>Beef Kare-Kare</a>
                    </div>
                    <img src="./img/Beef_KareKare_back.png" class="rounded-3xl">
                </div>
                <div class="w-full flex-shrink-0 snap-start mr-10">
                    <div class="flex justify-center font-bold text-red-800 hover:text-slate-700">
                        <a href="recipes.php"><ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>Dinuguan</a>
                    </div>
                    <img src="./img/Dinuguan_back.png" class="rounded-3xl">
                </div>
                <div class="w-full flex-shrink-0 snap-start mr-10">
                    <div class="flex justify-center font-bold text-red-800 hover:text-slate-700">
                        <a href="recipes.php"><ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>Sinigang</a>
                    </div>
                    <img src="./img/Sinigang_back.png" class="rounded-3xl">
                </div>
                <div class="w-full flex-shrink-0 snap-start">
                    <div class="flex justify-center font-bold text-red-800 hover:text-slate-700">
                        <a href="recipes.php"><ion-icon name="arrow-forward-outline" class="text-lg"></ion-icon>Sisig</a>
                    </div>
                    <img src="./img/Sisig_back.png" class="rounded-3xl">
                </div>
            </div>
        </div>
</body>

</html>
