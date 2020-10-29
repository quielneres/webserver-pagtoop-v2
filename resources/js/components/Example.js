import React from 'react';
import ReactDOM from 'react-dom';
import {BrowserRouter as Router} from "react-router-dom";
import Nav from "./Main";
import List from "./employee/List";
import Form from "./employee/Form";
import Edit from "./employee/Edit";

function Example() {
    return (
        <Router>
            <main>
                <Nav/>
                <Switch>
                    <Route path="/employee/index" exact component={List} />
                    <Route path="/employee/form"  component={Form} />
                    <Route path="/employee/edit/:id" component={Edit} />
                </Switch>
            </main>
        </Router>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
