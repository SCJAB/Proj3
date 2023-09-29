<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Home</title>
</head>
<body class="">
    <?php include './components/navbar.php'; ?>

    <div>
        <h1 class="flex justify-center text-2xl font-bold mb-32 mt-16 md:text-5xl">Welcome to <br class="md:hidden"> TasteOfPHL</h1>
    </div>

    <div class="w-60 mx-auto flex justify-center items-center rounded-3xl md:w-full">
        <div class="w-96 flex flex-row overflow-x-scroll snap-x snap-mandatory rounded-3xl">
            <div class="w-full flex-shrink-0 snap-start mr-10">
                <img src="./img/Adobong_Baboy_back.jpg" class="rounded-3xl">
            </div>
            <div class="w-full flex-shrink-0 snap-start mr-10">
                <img src="./img/Beef_KareKare_back.png" class="rounded-3xl">
            </div>
            <div class="w-full flex-shrink-0 snap-start mr-10">
                <img src="./img/Dinuguan_back.png" class="rounded-3xl">
            </div>
            <div class="w-full flex-shrink-0 snap-start mr-10">
                <img src="./img/Sinigang_back.png" class="rounded-3xl">
            </div>
            <div class="w-full flex-shrink-0 snap-start">
                <img src="./img/Sisig_back.png" class="rounded-3xl">
            </div>
        </div>
    </div>
</body>

</html>
