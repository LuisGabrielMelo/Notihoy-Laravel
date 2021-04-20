import React from "react";
import { BrowserRouter, Switch, Route } from "react-router-dom";

const NotiHoy = () => {
    return (
        <BrowserRouter>
            <Switch>
                <Route exact path="/" component={Home} />
                <Route exact path="/home" component={Home} />
                <Route exact path="/home/tasks" component={Tasks} />
                <Route exact path="/home/add" component={AddTask} />
                <Route exact path="/home/dev" component={DevInfo} />
                <Route component={NotFound} />
            </Switch>
        </BrowserRouter>
    );
};

export default NotiHoy;
