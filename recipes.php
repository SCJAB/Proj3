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

    <div class="grid grid-cols-1 mt-10 mx-10 gap-y-10 justify-items-center md:grid-cols-2 lg:grid-cols-5 lg:gap-x-5">
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute md:w-56 lg:w-96">
                <img src="./img/Adobong_Baboy.jpg" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-sm">Adobong <br>Baboy</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Adobong Baboy (Filipino Pork Adobo) is a delicious and savory Filipino dish that's easy to prepare. Here's a recipe for 2 servings:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="1">View Recipe</a>
            </div>
        </div>
            
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute md:w-56 lg:w-96">
                <img src="./img/Beef_KareKare.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-sm">Beef <br>Kare-Kare</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Filipino Beef Kare-Kare is a rich and flavorful stew made with tender beef, vegetables, and a peanut sauce. Here's a recipe for 2 servings:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="2">View Recipe</a>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Dinuguan.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-sm">Dinuguan</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Dinuguan is a Filipino dish known for its savory and rich pork blood stew. Here's a recipe for 2 servings:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="3">View Recipe</a>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sinigang_back1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-base">Sinigang</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Filipino Beef Kare-Kare is a rich and flavorful stew made with tender beef, vegetables, and a peanut sauce. Here's a recipe for 2 servings:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="4">View Recipe</a>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-80 lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-56 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sisig1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Sisig</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Filipino Beef Kare-Kare is a rich and flavorful stew made with tender beef, vegetables, and a peanut sauce. Here's a recipe for 2 servings:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="5">View Recipe</a>
            </div>
        </div>
    </div>

    <!-- View Adobong Baboy Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-1">
        <div class="bg-slate-200 rounded-2xl text-xs">
            <div class="m-5">
                <p>Ingredients:</p>
                    <ul class="ml-10 list-disc -tracking-tighter">
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
                <p>Instructions:</p>
                <ol>
                    <li>Marinate the Pork:</li>
                    <li>Cook the Adobong Baboy:</li>
                    <li>Simmer:</li>
                    <li>Season and Serve:</li>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="1">Close</button>
            </div>
        </div>
    </div>

    <!-- View Beef Kare-Kare Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-2">
        <div class="bg-slate-200 rounded-2xl text-xs">
            <div class="m-5">
                <p>Ingredients:</p>
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
                <p>Instructions:</p>
                <ol>
                    <li>Marinate the Pork:</li>
                    <li>Cook the Adobong Baboy:</li>
                    <li>Simmer:</li>
                    <li>Season and Serve:</li>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="2">Close</button>
            </div>
        </div>
    </div>

    <!-- View Dinuguan Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-3">
        <div class="bg-slate-200 rounded-2xl text-xs">
            <div class="m-5">
                <p>Ingredients:</p>
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
                <p>Instructions:</p>
                <ol>
                    <li>Marinate the Pork:</li>
                    <li>Cook the Adobong Baboy:</li>
                    <li>Simmer:</li>
                    <li>Season and Serve:</li>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="3">Close</button>
            </div>
        </div>
    </div>

    <!-- View Sinigang Recipe -->
    
    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-4">
        <div class="bg-slate-200 rounded-2xl text-xs">
            <div class="m-5">
                <p>Ingredients:</p>
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
                <p>Instructions:</p>
                <ol>
                    <li>Marinate the Pork:</li>
                    <li>Cook the Adobong Baboy:</li>
                    <li>Simmer:</li>
                    <li>Season and Serve:</li>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="4">Close</button>
            </div>
        </div>
    </div>

    <!-- View Sisig Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-5">
        <div class="bg-slate-200 rounded-2xl text-xs">
            <div class="m-5">
                <p>Ingredients:</p>
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
                <p>Instructions:</p>
                <ol>
                    <li>Marinate the Pork:</li>
                    <li>Cook the Adobong Baboy:</li>
                    <li>Simmer:</li>
                    <li>Season and Serve:</li>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="5">Close</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript to toggle the visibility of the description
        const showModalButtons = document.querySelectorAll('.show-modal');
        const closeModalButtons = document.querySelectorAll('.close-modal');

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