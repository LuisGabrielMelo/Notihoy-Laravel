import React from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";

import Register from "./pages/Register";
import Login from "./pages/Login";
import News from "./pages/News";

const NotiHoy = () => {
    return (
        <BrowserRouter>
            <Switch>
                <Route exact path="/" component={Register} />
                <Route exact path="/login" component={Login} />
                <Route exact path="/news" component={News} />
            </Switch>
        </BrowserRouter>
    );
};

export default NotiHoy;
