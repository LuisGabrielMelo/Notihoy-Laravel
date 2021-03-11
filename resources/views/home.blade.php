<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#1c1c1c">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Noti Hoy</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <div class="container mx-auto">
        <header class="sticky top-0 sm:static fondoMenu menu-alineado  px-4">
            <div class="py-6 text-white">NOTYHOY</div>
            <div class="buscador menu-alineado">
                <input type="text" class="w-48 sm:w-96 text-sm focus:outline-none p-1 text-white"
                    placeholder="Buscar noticias...">
                <button type="submit" class="focus:outline-none p-1 text-white text-sm"><i
                        class="fas fa-search"></i></button>
            </div>
        </header>
        <div class="px-4 bg-gray-100">

            <!-- Grilla para acomodar todos los elementos de este contenedor-->
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                <!-- aside de categorias -->
                <aside
                    class="mt-4 col-span-1 sm:col-span-4 lg:col-span-1 w-full static lg:sticky top-0 h-auto lg:h-screen bg-gray-100 lg:bg-gray-200 lg:shadow"">
                    <div class=" menu-alineado">
                    <h2 class="text-base text-current font-medium p-2 lg:p-4 lg:col-span-3"><i
                            class="far fa-circle"></i> Categorias</h2>
                    <button
                        class="border border-gray-400 border-solid rounded text-sm sm:text-base font-light bg-gray-100 text-center py-2 px-6 transition duration-1000 ease hover:bg-gray-400 outline-none focus:outline-none lg:hidden"
                        id="btnCategorias">Ver mas</button>
            </div>
            <nav class="lg:block hidden" id="categorias">
                <ul class="divide-y divide-gray-300">
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-funnel-dollar"></i> Economia</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-graduation-cap"></i> Educacion</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-flask"></i> Ciencia</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-laptop-code"></i> Programacion</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-landmark"></i> Politica</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                    <li><a href="#"
                            class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"><span><i
                                    class="fas fa-music"></i> Musica</span> <span
                                class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">3</span></a>
                    </li>
                </ul>
            </nav>
            </aside>

            <div class="grid grid-cols-1 sm:grid-cols-3 col-span-1 sm:col-span-4 lg:col-span-3 gap-3">

                <h1 class="p-2 lg:p-4 font-medium text-current text-base w-full lg:col-span-3"><i
                        class="fas fa-fire"></i>
                    Noticias mas vistas</h1>
                <!--- Diseño de la tarjeta -->
                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                    <img src="https://source.unsplash.com/collection/190727/300x150" alt="titulo-de-la-noticia"
                        class="w-full">
                    <div class="px-4 py-2">
                        <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">Lorem, ipsum dolor
                            sit amet consectetur.</h2>
                        <div class="grid grid-cols-3 sm:grid-cols-1">
                            <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block"><span
                                    class="font-bold text-red-400"><i class="far fa-user"></i></span> Gerson Borja</div>
                            <div
                                class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                                <span class="font-bold text-gray-600"><i class="far fa-calendar"></i> Publicada:</span>
                                5 de marzo 2021
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="fondoMenu text-white py-6 px-4 text-xs sm:text-base mt-4">
        Noti Hoy All rights reserved (Todos los derechos reservados) 2020
    </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>