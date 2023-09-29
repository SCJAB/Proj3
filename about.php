<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>About Us</title>
</head>
<body class="h-screen">
    <?php include './components/navbar.php'; ?>

    <div>
        <div class="flex flex-col items-center gap-9 mt-10">
            <?php echo '<p class="text-center text-6xl text-Cafe">About <span class="font-semibold">SHeAN</span></p>'?>
            <img src="./images/about-image.png" class="h-52 w-64">
        </div>

        
        <div class="mt-5 mx-44 py-5 font-lg text-lg">
            <?php echo '<p class="text-justify text-center line-clamp-10">At SHeAN, we\'re all about one thing – great coffee. We believe in the power of a perfectly brewed cup to brighten your day, fuel your adventures, and bring people together. Step into our cozy corner of coffee heaven and discover the flavors, aromas, and moments that make life a little more delightful. Join us on a journey where every sip is a new experience, and every visit feels like home. </p>'?>
        </div>
        
        <div class="bg-Drab">
            <div class="mt-5 mx-44 flex flex-row relative text-DesertSand">
                <?php echo'<p class="text-2xl tracking-wide font-bold text-white absolute top-16">Who We Are</p>'?>
                <?php echo'<p class="text-justify line-clamp-10 mt-28 basis-1/2">Welcome to SHeAN Coffee, where passion meets excellence in every sip. We\'re a global community of coffee lovers, driven by direct farmer relationships, sustainable practices, and meticulous roasting. Our mission is to elevate your coffee experience, connecting, inspiring, and awakening your senses. Join us in celebrating the art and science of coffee!</p>'?>
                <img class="basis-96 flex-grow h-auto w-96 m-12 rounded-lg" src="./images/C1.jpg">
            </div>

        </div>

        <div class="bg-DesertSand">
            <div class="mx-44 flex flex-row relative">
                <img class="basis-5/12 flex-grow h-auto w-96 m-16 rounded-lg " src="./images/C2.jpg">
                <?php echo'<p class="text-justify line-clamp-10 mt-16 basis-1/2">At SHeAN, crafting the perfect cup of coffee is our passion, and that\'s why we take recipe development and testing to heart. Our team of skilled baristas and coffee enthusiasts work tirelessly to create unique and delectable coffee recipes that bring out the best flavors in every bean. We meticulously test each recipe to ensure it meets our high standards of taste and quality, striving to deliver a coffee experience like no other. From classic brews to innovative concoctions, every sip is a result of our dedication to perfection. Explore our menu and savor the results of our ongoing commitment to creating the finest coffee recipes for your enjoyment.</p>'?>
                <?php echo'<p class="text-2xl tracking-wide font-bold text-Cafe absolute top-5 right-0">Recipe Development & Testing</p>'?>
            </div>
        </div>
    </div>
</body>
</html>