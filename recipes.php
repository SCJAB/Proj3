<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <title>Recipes</title>
</head>
<body class="bg-red-100">
    <?php include './components/navbar.php'; ?>

    <div class="grid grid-cols-1 mt-10 mx-10 gap-y-10 justify-items-center md:grid-cols-2 lg:grid-cols-5 lg:gap-x-5">
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-auto lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute md:w-56 lg:w-96">
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
            
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-auto lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
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
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-auto lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute">
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
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-auto lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sinigang_back1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-base">Sinigang</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Sinigang is a popular Filipino sour soup known for its tangy and savory flavors. Here's a recipe for 2 servings of Pork Sinigang:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="4">View Recipe</a>
            </div>
        </div>
        <div class="rounded-2xl bg-red-950 h-[100%] w-full relative shadow-xl md:h-96 md:w-auto lg:w-full lg:h-60 hover:ring-4 hover:ring-red-400 hover:bg-red-400">
            <div class="h-auto w-44 top-4 left-4 flex items-stretch absolute">
                <img src="./img/Sisig1.png" class="rounded-full h-20 w-20"/>
                <h2 class="text-white text-sm flex mt-5 ml-4 md:text-lg lg:text-xl">Sisig</h2>
            </div>
            <div class="text-white mt-28 text-justify mx-5 text-xs">
                <p>Sisig is a flavorful Filipino dish made from chopped and seasoned pork, typically served on a sizzling plate. Here's a recipe for 2 servings of Pork Sisig:</p>
            </div>
            <div>
                <a href="#" class="show-modal py-2 text-white text-xs flex justify-center hover:bg-red-950 rounded-3xl md:mx-10" data-modal="5">View Recipe</a>
            </div>
        </div>
    </div>

    <!-- View Adobong Baboy Recipe -->

    <div class="modal h-auto w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full md:h-screen" id="show-modal-1">
        <div class="bg-slate-200 rounded-2xl text-xs max-h-48 overflow-y-auto mt-44 md:mt-5 md:max-h-none">
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
            <div class="m-5">
                <p>Instructions:</p>
                <ol class="ml-10 list-decimal">
                    <li>Marinate the Pork:</li>
                        <ul class="ml-5 list-disc">
                            <li>In a bowl, mix pork, garlic, soy sauce, vinegar, bay leaf, and peppercorns.</li>
                            <li>Let it marinate for at least 30 minutes.</li>
                        </ul>
                    <li>Cook the Adobong Baboy:</li>
                        <ul class="ml-5 list-disc">
                            <li>Heat a pan over medium-high heat and add oil.</li>
                            <li>Sauté onions until translucent.</li>
                            <li>Add the marinated pork (including marinade) and cook until browned (about 5-7 minutes).</li>
                        </ul>
                    <li>Simmer:</li>
                        <ul class="ml-5 list-disc">
                            <li>Pour in water and bring it to a boil.</li>
                            <li>Reduce heat to low, cover, and simmer for 30-40 minutes until pork is tender, stirring occasionally.</li>
                        </ul>
                    <li>Season and Serve:</li>
                        <ul class="ml-5 list-disc">
                            <li>Taste the sauce and adjust with a pinch of salt or more vinegar if needed.</li>
                            <li>Let it marinate for at least 30 minutes.</li>
                            <li>Serve your Adobong Baboy with steamed rice.</li>
                        </ul>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="1">Close</button>
            </div>
        </div>
    </div>

    <!-- View Beef Kare-Kare Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-2">
        <div class="bg-slate-200 rounded-2xl text-xs max-h-48 overflow-y-auto md:max-h-none">
            <div class="m-5">
                <p>Ingredients:</p>
                    <ul class="ml-10 list-disc -tracking-tighter">
                        <p class="-ml-10">For the Stew:</p>
                        <li>1/2 pound (about 225g) beef stew meat, cut into bite-sized pieces</li>
                        <li>1 small eggplant, sliced into rounds</li>
                        <li>1 bundle string beans (about 8-10 pieces), cut into 2-inch lengths</li>
                        <li>4 cups water</li>
                        <li>2 tablespoons cooking oil</li>
                        <li>Salt and pepper to taste</li>
                        <p class="-ml-10">For the Kare-Kare Sauce:</p>
                        <li>1/4 cup peanut butter</li>
                        <li>1 small onion, chopped</li>
                        <li>3 cloves garlic, minced</li>
                        <li>2 cups beef broth (from the stew)</li>
                        <li>Fish sauce (patis) or salt, to taste</li>
                        <li>2 tablespoons shrimp paste (bagoong alamang)</li>
                    </ul>
            </div>
            <div class="m-5">
                <p>Instructions:</p>
                <ol class="ml-10 list-decimal">
                    <li>Boil the Beef:</li>
                        <ul class="ml-5 list-disc">
                            <li>In a large pot, boil the beef stew meat in 4 cups of water until tender, about 1 to 1.5 hours. Alternatively, use a pressure cooker for faster cooking. Once done, set aside the cooked beef and reserve the broth.</li>
                        </ul>
                    <li>Prepare Vegetables:</li>
                        <ul class="ml-5 list-disc">
                            <li>In a separate pan, sauté the eggplant, string beans, and banana blossom (if using) in 2 tablespoons of oil until slightly tender. Remove from the pan and set aside.</li>
                        </ul>
                    <li>Make the Kare-Kare Sauce:</li>
                        <ul class="ml-5 list-disc">
                            <li>In the same pan, sauté the onions and garlic until fragrant.</li>
                            <li>Add the peanut butter and cook briefly, stirring.</li>
                            <li>Gradually add the beef broth while stirring to avoid lumps. Simmer until the sauce thickens. Season with fish sauce (patis) or salt to taste.</li>
                        </ul>
                    <li>Combine and Serve:</li>
                        <ul class="ml-5 list-disc">
                            <li>Return the cooked beef to the sauce and simmer briefly to heat through.</li>
                            <li>Add the sautéed vegetables to the pot and simmer for 5-7 minutes or until the vegetables are tender.</li>
                        </ul>
                    <li>Serving:</li>
                        <ul class="ml-5 list-disc">
                            <li>Serve Beef Kare-Kare hot with steamed rice. You can also offer bagoong alamang (shrimp paste) on the side for those who want to add it.</li>
                        </ul>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="2">Close</button>
            </div>
        </div>
    </div>

    <!-- View Dinuguan Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-3">
        <div class="bg-slate-200 rounded-2xl text-xs max-h-48 overflow-y-auto md:max-h-none">
            <div class="m-5">
                <p>Ingredients:</p>
                    <ul class="ml-10 list-disc -tracking-tighter">
                        <li>1/2 pound (about 225g) pork belly, diced into small pieces</li>
                        <li>1/2 cup pork blood (available in some Asian grocery stores)</li>
                        <li>1 small onion, finely chopped</li>
                        <li>3 cloves garlic, minced</li>
                        <li>2-3 pieces green chili peppers (siling haba), sliced (adjust to your spice preference)</li>
                        <li>1/2 cup vinegar (white or cane vinegar)</li>
                        <li>1 cup water</li>
                        <li>2 tablespoons cooking oil</li>
                        <li>Salt and pepper to taste</li>
                        <li>Fish sauce (patis) for seasoning (optional)</li>
                    </ul>
            </div>
            <div class="m-5">
                <p>Instructions:</p>
                <ol class="ml-10 list-decimal">
                    <li>Cooking the Dinuguan:</li>
                        <ul class="ml-5 list-disc">
                            <li>Heat a pan over medium-high heat and add the cooking oil.</li>
                            <li>Sauté the chopped onions and minced garlic until they become translucent.</li>
                            <li>Add the diced pork belly and cook until it's browned.</li>
                            <li>Pour in the vinegar and let it simmer for about 5 minutes to reduce the acidity.</li>
                            <li>Add the sliced green chili peppers and sauté for another 2 minutes.</li>
                            <li>Stir in the pork blood, continuously stirring to prevent coagulation. Simmer for 10-15 minutes until the mixture thickens.</li>
                            <li>Gradually add water to achieve your preferred sauce consistency. You can add more water if you want it thinner or less if you prefer a thicker sauce.</li>
                            <li>Gradually add water to achieve your preferred sauce consistency. You can add more water if you want it thinner or less if you prefer a thicker sauce.</li>
                            <li>Simmer for an additional 5-10 minutes until the Dinuguan reaches your desired thickness and the pork is tender.</li>
                        </ul>
                    <li>Serving:</li>
                        <ul class="ml-5 list-disc">
                            <li>Serve your Dinuguan hot with steamed rice. It's commonly enjoyed with puto (rice cakes) or steamed rice cakes.</li>
                        </ul>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="3">Close</button>
            </div>
        </div>
    </div>

    <!-- View Sinigang Recipe -->
    
    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-4">
        <div class="bg-slate-200 rounded-2xl text-xs max-h-48 overflow-y-auto md:max-h-none">
            <div class="m-5">
                <p>Ingredients:</p>
                    <ul class="ml-10 list-disc -tracking-tighter">
                        <li>1/2 pound (about 225g) pork belly or pork ribs, cut into pieces</li>
                        <li>1 small onion, quartered</li>
                        <li>1 small tomato, quartered</li>
                        <li>1 small eggplant, sliced</li>
                        <li>6-8 pieces string beans, cut into 2-inch lengths/li>
                        <li>1 small radish, sliced</li>
                        <li>2 pieces green chili peppers (optional, adjust to your preference)</li>
                        <li>1 packet sinigang mix (tamarind soup base)</li>
                        <li>Salt and fish sauce (patis) to taste</li>
                        <li>4-6 cups water</li>
                    </ul>
            </div>
            <div class="m-5">
                <p>Instructions:</p>
                <ol class="ml-10 list-decimal">
                    <li>Preparing the Sinigang:</li>
                    <ul class="ml-5 list-disc">
                            <li>In a pot, combine pork, onion, tomato, and water (about 4-6 cups) to cover the pork. Bring to a boil and then simmer until the pork is tender, usually 30-45 minutes.</li>
                            <li>Remove any scum from the surface of the broth.</li>
                            <li>Add eggplant, string beans, radish, and green chili peppers (if using). Simmer for 5-7 minutes until the vegetables start to soften.</li>
                            <li>Stir in the sinigang mix for that tangy flavor. Adjust the amount to your preferred sourness.</li>
                            <li>Continue simmering for another 5-10 minutes until the vegetables are tender.</li>
                            <li>Season with salt and fish sauce (patis) to taste.</li>
                        </ul>
                    <li>Serving:</li>
                        <ul class="ml-5 list-disc">
                            <li>Serve your Pork Sinigang hot with steamed rice. Optionally, offer fish sauce (patis) as a condiment.</li>
                        </ul>
                </ol>
            </div>
            <div class="flex justify-end items-center w-100 border-t p-3">
                <button class="bg-black hover:bg-white hover:text-black text-white rounded-md mr-1 px-3 py-1 close-modal" data-modal="4">Close</button>
            </div>
        </div>
    </div>

    <!-- View Sisig Recipe -->

    <div class="modal h-screen w-auto m-5 fixed flex top-0 md:right-0 justify-center items-center hidden md:w-full" id="show-modal-5">
        <div class="bg-slate-200 rounded-2xl text-xs max-h-48 overflow-y-auto md:max-h-none">
            <div class="m-5">
                <p>Ingredients:</p>
                    <ul class="ml-10 list-disc -tracking-tighter">
                        <li>1/2 pound (about 225g) pork belly, finely chopped</li>
                        <li>1 small onion, finely chopped</li>
                        <li>2 cloves garlic, minced</li>
                        <li>2-3 pieces green chili peppers (siling haba), chopped (adjust to your spice preference)</li>
                        <li>1 small red and green bell pepper, finely chopped</li>
                        <li>2 tablespoons calamansi or lime juice (or lemon juice as a substitute)</li>
                        <li>1 tablespoon soy sauce</li>
                        <li>1 tablespoon mayonnaise</li>
                        <li>1 tablespoon cooking oil</li>
                        <li>Salt and pepper to taste</li>
                    </ul>
            </div>
            <div class="5">
                <p>Instructions:</p>
                <ol class="ml-10 list-decimal">
                    <li>Cooking the Pork Sisig:</li>
                        <ul class="ml-5 list-disc">
                            <li>Heat a pan or skillet over medium-high heat and add the cooking oil.</li>
                            <li>Add minced garlic and sauté until fragrant.</li>
                            <li>Add chopped pork belly and cook until crispy and browned, about 8-10 minutes. Stir occasionally for even cooking.</li>
                            <li>Once the pork is crispy, add chopped onions and cook until translucent.</li>
                            <li>Stir in chopped red and green bell peppers and green chili peppers (adjust the quantity to your desired spiciness). Sauté for 2-3 minutes to soften the peppers.</li>
                            <li>Add soy sauce and mix well.</li>
                            <li>Pour in calamansi or lime juice and stir thoroughly for tangy flavor.</li>
                            <li>Add mayonnaise and mix until creamy.</li>
                            <li>Season with salt and pepper to taste. Adjust seasoning to preference.</li>
                        </ul>
                    <li>Serving:</li>
                        <ul class="ml-5 list-disc">
                            <li>Serve Pork Sisig hot with steamed rice.</li>
                        </ul>
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

<style>
/* Add a class to style the modal content for small screens */
@media (max-width: 768px) {
    .modal-scroll {
        max-height: 80vh; /* You can adjust the maximum height as needed */
        overflow-y: auto;
    }
}
</style>
</body>
</html>