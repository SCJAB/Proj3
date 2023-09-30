<!DOCTYPE html>
<html lang="en" class="scrollbar-hide">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>About Us</title>
</head>
<body class="bg-red-100 mb-12 md:mb-12">
    <?php include './components/navbar.php'; ?>

    <div>
        <div class="flex flex-col items-center mt-10">
            <?php echo '<p class="text-center text-2xl md:text-6xl">About <span class="font-semibold">TasteOfPHL</span></p>'?>
        </div>

        <div class="mt-5 mx-5 md:mx-38 py-5 text-base md:text-2xl flex justify-center text-center">
            <?php echo '<p>Welcome to TasteOfPHL, where simplicity meets flavor!</p>'?>
        </div>
        
        <div class="bg-red-950 text-white py-4">
            <div class="mt-5 mx-4 md:mx-10 lg:mx-32 md:flex md:flex-row relative">
                <?php echo'<p class="md:text-2xl lg:text-4xl tracking-wide font-bold md:absolute top-16">Who We Are</p>'?>
                <?php echo'<p class="text-justify line-clamp-10 md:mt-28 lg:mt-32 basis-1/2 text-xs md:text-xl">Welcome to TasteOfPHL, your source for authentic Filipino recipes. We\'re all about sharing the delicious flavors of the Philippines with you. Explore our simple yet flavorful recipes and savor the taste of Filipino cuisine at home.</p>'?>
                <img class="hidden md:block basis-80 flex-grow h-auto w-60 m-12 rounded-2xl" src="./img/Pinoy Food1.png">
            </div>
        </div>

        <div class="bg-slate-300 text-red-800 py-4">
            <div class="mx-4 md:mx-10 lg:mx-32 md:flex md:flex-row relative">
                <?php echo'<p class="md:text-2xl lg:text-4xl tracking-wide font-bold md:absolute top-5 right-0 text-end">Recipe Development & Testing</p>'?>
                <img class="hidden md:block basis-40 flex-grow md:h-44 lg:h-auto w-60 m-16 rounded-2xl" src="./img/Pinoy Food2.png">
                <?php echo'<p class="text-justify md:line-clamp-10 mt-0 md:mt-20 font-semibold md:basis-5/6 lg:basis-1/2 text-xs md:text-xl">At TasteOfPHL, we\'re passionate about Filipino cuisine, and that\'s why we put heart and soul into developing and testing our recipes. Our team of dedicated cooks and Filipino food enthusiasts work tirelessly to create and perfect authentic Filipino dishes that capture the essence of the Philippines in every bite. We meticulously test each recipe to ensure it meets our high standards of taste and authenticity, striving to deliver a taste of home that\'s truly satisfying. From traditional favorites to modern twists, every recipe reflects our unwavering commitment to bringing the best of Filipino cooking to your kitchen. Explore our recipes and savor the results of our ongoing dedication to creating the finest Filipino dishes for your enjoyment.</p>'?>
                <?php echo'<p class="hidden md:block md:text-2xl lg:text-4xl tracking-wide font-bold md:absolute top-5 right-0 text-end">Recipe Development & Testing</p>'?>
            </div>
        </div>
    </div>
    <?php include './components/footer.php'; ?>
</body>
</html>