import React, { Fragment, useEffect, useState } from "react";
import NoticeComponent from "./NoticeComponent";

const noticesListMocked = [
    {
        id: "01",
        imgURL: "https://source.unsplash.com/collection/190727/300x150",
        title: "Título de la noticia",
        writerName: "Julian Camilo Cruz",
        publicationDate: "5 de marzo del 2021",
    },
    {
        id: "02",
        imgURL: "https://source.unsplash.com/collection/190727/300x150",
        title: "Título de la noticia",
        writerName: "Julian Camilo Cruz",
        publicationDate: "5 de marzo del 2021",
    },
    {
        id: "03",
        imgURL: "https://source.unsplash.com/collection/190727/300x150",
        title: "Título de la noticia",
        writerName: "Julian Camilo Cruz",
        publicationDate: "5 de marzo del 2021",
    },
    {
        id: "04",
        imgURL: "https://source.unsplash.com/collection/190727/300x150",
        title: "Título de la noticia",
        writerName: "Julian Camilo Cruz",
        publicationDate: "5 de marzo del 2021",
    },
    {
        id: "05",
        imgURL: "https://source.unsplash.com/collection/190727/300x150",
        title: "Título de la noticia",
        writerName: "Julian Camilo Cruz",
        publicationDate: "5 de marzo del 2021",
    },
];

const MainContent = () => {
    const [newsList, setNewsList] = useState([]);

    useEffect(() => {
        setNewsList(noticesListMocked);
    }, []);

    return (
        <Fragment>
            <div class="grid grid-cols-1 sm:grid-cols-3 col-span-1 sm:col-span-4 lg:col-span-3 gap-3">
                <h1 class="p-2 lg:p-4 font-medium text-current text-base w-full sm:col-span-3 lg:col-span-3">
                    <i class="fas fa-fire"></i>
                    Noticias mas vistas
                </h1>
                {newsList && newsList.length !== 0 ? (
                    newsList.map((notice) => (
                        <NoticeComponent
                            imgURL={notice.imgURL}
                            title={notice.title}
                            writerName={notice.writerName}
                            publicationDate={notice.publicationDate}
                        />
                    ))
                ) : (
                    <div>No hay noticias en esta sección</div>
                )}
            </div>
        </Fragment>
    );
};

export default MainContent;
