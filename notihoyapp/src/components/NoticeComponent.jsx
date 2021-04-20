import React, { Fragment } from "react";

const NoticeComponent = ({ imgURL, title, writerName, publicationDate }) => {
    return (
        <Fragment>
            <div class="bg-gray-100 border border-solid border-gray-300 w-full">
                <img src={imgURL} alt="titulo-de-la-noticia" class="w-full" />
                <div class="px-4 py-2">
                    <h2 class="font-medium text-base text-gray-700 sm:font-medium sm:text-base">
                        {title}
                    </h2>
                    <div class="grid grid-cols-3 sm:grid-cols-1">
                        <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block">
                            <span class="font-bold text-red-400">
                                <i class="far fa-user"></i>
                            </span>{" "}
                            {writerName}
                        </div>
                        <div class="text-xs text-gray-400 font-light my-4 sm:my-1 inline-block sm:block col-span-2 sm:col-span-1 text-right sm:text-left">
                            <span class="font-bold text-gray-600">
                                <i class="far fa-calendar"></i> Publicada:
                            </span>{" "}
                            {publicationDate}
                        </div>
                    </div>
                </div>
            </div>
        </Fragment>
    );
};

export default NoticeComponent;
