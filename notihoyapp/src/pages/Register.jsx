import React, { Fragment } from "react";

const Register = () => {
    return (
        <Fragment>
            <div class="container mx-auto mt-32">
                <div class="mx-auto flex flex-wrap max-width-form text-gray-800">
                    <div class="flex-100">
                        <h1 class="font-bold text-3xl flex-100 mb-8">
                            {" "}
                            Registrarse
                        </h1>
                    </div>
                    <div class="flex flex-100 mt-8">
                        <form class="flex-100">
                            <div class="flex flex-100">
                                <div class="flex-grow mr-2">
                                    <label class="block mb-1 font-bold" for="">
                                        Nombre completo
                                    </label>
                                    <input
                                        class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner"
                                        type="text"
                                    />
                                </div>
                                <div class="flex-grow ml-2">
                                    <label class="block mb-1 font-bold" for="">
                                        Usuario
                                    </label>
                                    <input
                                        class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner"
                                        type="text"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-100 mt-4">
                                <div class="flex-grow mr-2">
                                    <label class="block mb-1 font-bold" for="">
                                        Email{" "}
                                    </label>
                                    <input
                                        class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner"
                                        type="email"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-100 mt-4">
                                <div class="flex-grow mr-2">
                                    <label class="block mb-1 font-bold" for="">
                                        Contraseña
                                    </label>
                                    <input
                                        placeholder="6+ caracteres"
                                        class="bg-gray-200 w-full rounded-lg py-3 px-3 shadow-inner"
                                        type="password"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-100 mt-4 items-start">
                                <input
                                    class="h-6 w-6 mr-2 checkbox"
                                    type="checkbox"
                                />
                                <div class="leading-tight text-gray-600 font-light">
                                    Crear una cuenta significa que estás de
                                    acuerdo con nuestro
                                    <a class="text-blue-400" href="#">
                                        Términos de servicio
                                    </a>
                                    ,
                                    <a class="text-blue-400" href="#">
                                        Política de privacidad
                                    </a>
                                </div>
                            </div>
                            <div class="flex flex-100 mt-4">
                                <button class="bg-pink-dribbble flex-50 text-white relative py-4 rounded">
                                    <div>Crear una cuenta</div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </Fragment>
    );
};

export default Register;
