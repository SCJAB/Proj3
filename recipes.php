<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Recipes</title>
</head>
<body>
    <?php include './components/navbar.php'; ?>

    <div class="grid grid-cols-1 mt-10 mx-10 gap-y-10 justify-items-center md:grid-cols-2 lg:grid-cols-3 lg:gap-x-12">
        <div class="rounded-2xl bg-red-950 h-[105%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute md:w-56 lg:w-96">
                <img src="./img/Adobong_Baboy.jpg" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Adobong Baboy</h2>
            </div>
            <div class="text-white mt-24 text-justify mx-5 text-xs space-y-5">
                <p>Adobong Baboy (Filipino Pork Adobo) is a delicious and savory Filipino dish that's easy to prepare. Here's a recipe for 2 servings:</p>
                <ul class="list-disc -tracking-tighter">
                    <li>1/2 pound (about 225g) pork belly, cut into bite-sized pieces</li>
                    <li>3 cloves garlic, minced</li>
                    <li>1 small onion, chopped</li>
                    <li>1/4 cup soy sauce</li>
                    <li>2 tablespoons vinegar (white or cane vinegar works well)</li>
                    <li>1 bay leaf</li>
                    <li>1/2 teaspoon whole black peppercorns</li>
                    <li>1/2 cup water</li>
                    <li>1 tablespoon cooking oil</li>
                    <li>Salt to taste</li>
                </ul>
            </div>
            <div>
                <a href="#" class="show-modal" data-modal="1">View Recipe</a>
            </div>
        </div>
            
        <div class="rounded-2xl bg-red-950 h-96 w-full relative shadow-xl md:h-96 md:w-80 lg:w-full hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute md:w-56 lg:w-96">
                <img src="./img/Beef_KareKare.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Beef Kare-Kare</h2>
            </div>
            <div class="text-white mt-24 text-justify mx-5 text-xs space-y-5">
                <p>Filipino Beef Kare-Kare is a rich and flavorful stew made with tender beef, vegetables, and a peanut sauce. Here's a recipe for 2 servings:</p>
                <ul class="list-disc -tracking-tighter">
                    <li>1/2 pound (about 225g) pork belly, cut into bite-sized pieces</li>
                    <li>3 cloves garlic, minced</li>
                    <li>1 small onion, chopped</li>
                    <li>1/4 cup soy sauce</li>
                    <li>2 tablespoons vinegar (white or cane vinegar works well)</li>
                    <li>1 bay leaf</li>
                    <li>1/2 teaspoon whole black peppercorns</li>
                    <li>1/2 cup water</li>
                    <li>1 tablespoon cooking oil</li>
                    <li>Salt to taste</li>
                </ul>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-96 w-full relative shadow-xl md:h-96 md:w-80 lg:w-full hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Dinuguan.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Dinuguan</h2>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-96 w-full relative shadow-xl md:h-96 md:w-80 lg:w-full hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sinigang_back1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Sinigang</h2>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-96 w-full relative shadow-xl md:h-96 md:w-80 lg:w-full hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sisig1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-">Sisig</h2>
            </div>
        </div>
    </div>

    <div class="modal h-screen w-full fixed left-0 top-0 justify-center items-center hidden" id="show-modal-1">
        <div class="bg-white rounded shadow-md w-1/2">
            <div class="border-2 border-red-800">
                <p>asdasdasdasd</p>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="1">Close</button>
            </div>
        </div>
    </div>

    

    <script>
        // JavaScript to toggle the visibility of the description
        const readMoreButtons = document.querySelectorAll(".read-more-button");
        const showModalButtons = document.querySelectorAll('.show-modal');
        const closeModalButtons = document.querySelectorAll('.close-modal');

        readMoreButtons.forEach((button, index) => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                const description = descriptions[index];
                if (description.style.maxHeight === "none" || !description.style.maxHeight) {
                    description.style.maxHeight = "20px"; // Adjust the height as needed
                    button.textContent = "Read More";
                } else {
                    description.style.maxHeight = "none"; // Reset the height
                    button.textContent = "Read Less";
                }
            });
        });

        showModalButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const modalNumber = button.getAttribute('data-modal');
                const modal = document.getElementById(`show-modal-${modalNumber}`);
                modal.classList.remove('hidden');
            });
        });

        closeModalButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                const modalNumber = button.getAttribute('data-modal');
                const modal = document.getElementById(`show-modal-${modalNumber}`);
                modal.classList.add('hidden');
            });
        });

    </script>
</body>
</html>