import React, { Fragment } from "react";

const HeaderNews = () => {
    return (
        <Fragment>
            <header class="sticky top-0 sm:static fondoMenu menu-alineado  px-4">
                <div class="py-6 text-white">NOTYHOY</div>
                <div class="buscador menu-alineado">
                    <input
                        type="text"
                        class="w-48 sm:w-96 text-sm focus:outline-none p-1 text-white"
                        placeholder="Buscar noticias..."
                    />
                    <button
                        type="submit"
                        class="focus:outline-none p-1 text-white text-sm"
                    >
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </header>
        </Fragment>
    );
};

export default HeaderNews;
