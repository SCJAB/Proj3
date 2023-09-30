<!DOCTYPE html>
<html lang="en" class="scrollbar-hide">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body class="bg-red-100 mb-20">
    <?php include './components/navbar.php'; ?>

    <div class="flex-grow h-44 md:h-52 p-10">
        <?php echo '<h1 class="text-center text-2xl md:text-4xl lg:text-5xl font-semibold">We\'re thrilled to hear from you.</h1>' ?>
        <?php echo '<h2 class="text-center text-xs md:text-xl md:mt-4">If you have any inquiries, suggestions, or simply want to connect with us, don\'t hesitate to get in touch. You can reach out to us using our contact form, and we\'ll be delighted to hear from you.</h2>' ?>
    </div>
    <div class="p-10 md:mx-20">
        <div class="">
            <h1 class="font-bold pb-5 text-sm md:text-xl">Get in touch</h1>
        </div>
        <div class="text-gray-800 flex flex-row">
            <form action="" class="flex flex-col space-y-4 basis-full md:basis-2/4">
                <div>
                    <input type="text" placeholder="Your name" class="ring-name ring-gray-300 w-full md:w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-red-200">
                </div>
                <div>
                    <input type="email" placeholder="Email Address" class="ring-name ring-gray-300 w-full md:w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-red-200">
                </div>
                <div>
                    <input type="text" placeholder="Subject" class="ring-name ring-gray-300 w-full md:w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-red-200"> 
                </div>
                <div>
                    <textarea placeholder="Message" rows="5" class="ring-name ring-gray-300 w-full md:w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-red-200"></textarea>
                </div>
                <button class="inline-block self-start bg-red-950 text-white text-sm md:text-base font-semibold rounded-lg px-6 py-3">
                    Send Message
                </button>
            </form>
            <div class="hidden md:block md:basis-2/4">
                <img src="./img/Pinoy Food.png" class="rounded-xl md:mt-10 lg:mt-0">
            </div>
        </div>
    </div>
    <?php include './components/footer.php'; ?>
</body>
</html>