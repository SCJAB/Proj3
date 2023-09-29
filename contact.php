<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Contact Us</title>
</head>
<body class="h-screen">
    <?php include './components/navbar.php'; ?>

    <div class="flex-grow h-52 p-10 text-Cafe">
        <?php echo '<h1 class="text-center text-7xl font-semibold">We\'re thrilled to hear from you.</h1>' ?>
        <?php echo '<h2 class="text-center text-xl mt-4">Whether you have questions, suggestions, or just want to chat about coffee, we\'re here to listen. Feel free to reach out through the contact form.</h2>' ?>
    </div>
    <div class="p-10 bg-Drab mx-44">
        <div class="">
            <h1 class="text-DesertSand pb-10 text-xl">Get in touch</h1>
        </div>
        <div class="text-gray-800 flex flex-row">
            <form action="" class="flex flex-col space-y-4 basis-2/4">
                <div>
                    <input type="text" placeholder="Your name" class="ring-name ring-gray-300 w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-Cafe">
                </div>
                <div>
                    <input type="email" placeholder="Email Address" class="ring-name ring-gray-300 w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-Cafe">
                </div>
                <div>
                    <input type="text" placeholder="Subject" class="ring-name ring-gray-300 w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-Cafe"> 
                </div>
                <div>
                    <textarea placeholder="Message" rows="8" class="ring-name ring-gray-300 w-[80%] rounded-md px-4 py-2 outline-none focus:ring-4 focus:ring-Cafe"></textarea>
                </div>
                <button class="inline-block self-start bg-Butterscotch text-Drab font-semibold rounded-lg px-6 py-3">
                    Send Message
                </button>
            </form>
            <div class="basis-2/4">
                <img src="./images/Contact-image.jpg" class="rounded-xl mt-5">
            </div>
        </div>
    </div>
</body>
</html>