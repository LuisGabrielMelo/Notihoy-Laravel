import React, { Fragment } from "react";

const AsideSection = () => {
    return (
        <Fragment>
            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                <aside class="mt-4 col-span-1 sm:col-span-4 lg:col-span-1 w-full static lg:sticky top-0 h-auto lg:h-screen bg-gray-100 lg:bg-gray-200 lg:shadow">
                    <div class=" menu-alineado">
                        <h2 class="text-base text-current font-medium p-2 lg:p-4 lg:col-span-3">
                            <i class="far fa-circle"></i> Categorias
                        </h2>
                        <button
                            class="border border-gray-400 border-solid rounded text-sm sm:text-base font-light bg-gray-100 text-center py-2 px-6 transition duration-1000 ease hover:bg-gray-400 outline-none focus:outline-none lg:hidden"
                            id="btnCategorias"
                        >
                            Ver mas
                        </button>

                        <nav class="lg:block hidden" id="categorias">
                            <ul class="divide-y divide-gray-300">
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-funnel-dollar"></i>{" "}
                                            Economia
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-graduation-cap"></i>{" "}
                                            Educacion
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-flask"></i> Ciencia
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-laptop-code"></i>{" "}
                                            Programacion
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-landmark"></i>{" "}
                                            Politica
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#"
                                        class="menu-alineado text-base text-gray-700 p-4 transition duration-1000 ease hover:bg-gray-300 block"
                                    >
                                        <span>
                                            <i class="fas fa-music"></i> Musica
                                        </span>{" "}
                                        <span class="rounded-full w-5 h-5 text-sm bg-gray-300 text-current text-center">
                                            3
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
            </div>
        </Fragment>
    );
};

export default AsideSection;
