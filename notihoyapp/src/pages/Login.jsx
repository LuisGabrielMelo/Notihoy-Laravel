import React, { Fragment } from "react";

const Login = () => {
    return (
        <Fragment>
            <div
                class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0"
                style={{ fontFamily: "Lato,sans-serif" }}
            >
                <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
                    <section>
                        <h3 class="font-bold text-2xl">Bienvenido a Notihoy</h3>
                        <p class="text-gray-600 pt-2">
                            Iniciar sesión en su cuenta.
                        </p>
                    </section>

                    <section class="mt-10">
                        <form class="flex flex-col" method="POST" action="#">
                            <div class="mb-6 pt-3 rounded bg-gray-200">
                                <label
                                    class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="email"
                                >
                                    Email
                                </label>
                                <input
                                    type="text"
                                    id="email"
                                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                />
                            </div>
                            <div class="mb-6 pt-3 rounded bg-gray-200">
                                <label
                                    class="block text-gray-700 text-sm font-bold mb-2 ml-3"
                                    for="password"
                                >
                                    Contraseña
                                </label>
                                <input
                                    type="password"
                                    id="password"
                                    class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-300 focus:border-purple-600 transition duration-500 px-3 pb-3"
                                />
                            </div>
                            <div class="flex justify-end">
                                <a
                                    href="#"
                                    class="text-sm text-purple-600 hover:text-purple-700 hover:underline mb-6"
                                >
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                            <button
                                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200"
                                type="submit"
                            >
                                Registrarse
                            </button>
                        </form>
                    </section>
                </main>

                <div class="max-w-lg mx-auto text-center mt-12 mb-6">
                    <p class="text-white">
                        ¿No tienes una cuenta?{" "}
                        <a href="#" class="font-bold hover:underline">
                            Regístrate
                        </a>
                        .
                    </p>
                </div>
            </div>
        </Fragment>
    );
};

export default Login;
