<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officina Moto</title>
    <link href="./src/input.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="./assets/logo_Off.webp" type="image/x-icon">
</head>

<body>
    <?php
    include("backend/check_session.php");
    ?>
    <div class="flex justify-center items-center">
        <div id="header">
            <nav class="bg-white dark:bg-gray-900 fixed w-full top-0 start-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="../index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="./assets/logo_Off.webp" class="h-8 rounded-2xl" alt="Off Logo">
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Officina Moto</span>
                    </a>
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <button id="RegLog" type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800"><a href="./pages/loginMain.php">Login</a></button>
                        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="../index.php" class="block py-2 px-3 text-white bg-red-700 rounded md:bg-transparent md:text-red-700 md:p-0 md:dark:text-red-500" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="../../Progetto/pages/about.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                            </li>
                            <li>
                                <a href="../../Progetto/pages/service.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                            </li>
                            <li>
                                <a href="../../Progetto/pages/contact.php" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-red-700 md:p-0 md:dark:hover:text-red-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- <div>
            <img src="./assets/slide1.webp" alt="foto sfondo" class="h-fit">
        </div> -->
        <div id="footer">
            <footer class="bg-white dark:bg-gray-900 fixed w-full bottom-0 end-0 border-b border-gray-200 dark:border-gray-600">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <a href="" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                            <img src="./assets/logo_Off.webp" class="h-8 rounded-2xl" alt="officina Logo" />
                            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                        </a>
                        <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                            <li>
                                <a href='./pages/about.php' class="hover:underline me-4 md:me-6">About</a>
                            </li>
                            <li>
                                <a href='./pages/service.php' class="hover:underline me-4 md:me-6">Services</a>
                            </li>
                            <li>
                                <a href='./pages/contact.php' class="hover:underline">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="https://github.com/ciuffo141/" target="_blank" class="hover:underline">Ciuffo_141™</a>. All Rights Reserved.</span>
                </div>
            </footer>
        </div>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>