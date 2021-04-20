import React, { Fragment } from "react";

import HeaderNews from "../components/HeaderNews";
import AsideSection from "../components/AsideSection";
import MainContent from "../components/MainContent";

const News = () => {
    return (
        <Fragment>
            <div class="container mx-auto">
                <HeaderNews />
                <AsideSection />
                <MainContent />
            </div>
        </Fragment>
    );
};

export default News;
