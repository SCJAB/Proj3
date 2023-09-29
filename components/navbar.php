<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Navbar</title>
</head>
<body>
    <nav class="p-2 bg-white shadow-slate-500 shadow-md m-4 rounded-3xl md:p-5 md:py-0 md:rounded-full md:flex md:items-center md:justify-between">
        <div class="flex justify-between items-center">
            <a href="index.php"><img src="./img/logo.png" alt="TasteOfPHL" class="h-10 md:h-14"></a>

            <span class="text-xl cursor-pointer mx-5 transition duration-100 hover:text-red-700 md:hidden block">
                <ion-icon name="grid-outline" onclick="Menu(this)"></ion-icon>
            </span>
        </div>
        <ul class="text-xs text-center mt-0 right-7 grid gap-y-4 z-[40] absolute bg-red-700 md:bg-white rounded-3xl p-5 opacity-0 top-[-400px] transition-all ease-in duration-500 md:text-lg md:flex md:mt-0 md:items-center md:flex-row md:gap-x-4 md:z-auto md:static md:w-auto md:opacity-100">
            <li><a href="index.php" class="hover:text-black text-white md:text-black duration-500 md:hover:text-red-700">Home</a></li>
            <li><a href="about.php" class="hover:text-black text-white md:text-black duration-500 md:hover:text-red-700">About us</a></li>
            <li><a href="recipes.php" class="hover:text-black text-white md:text-black duration-500 md:hover:text-red-700">Recipes</a></li> 
            <li><a href="contact.php" class="hover:text-black text-white md:text-black duration-500 md:hover:text-red-700">Contact us</a></li>
        </ul>
    </nav>

    <script>
        function Menu(e){
        let list = document.querySelector('ul');
        e.name === 'grid-outline' ? (e.name = "grid",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "grid-outline" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
        }
    </script>
</body>
</html>