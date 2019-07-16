// assets/js/app.js

import React from "react";
import ReactDOM from "react-dom";
import Test from "./test";

class Welcome extends React.Component {
  render() {
    return <h1>Welcome, {this.props.name}</h1>
  }
}

(() => {
  const welcome = <Welcome name="BuildA"></Welcome>
  ReactDOM.render(welcome, document.getElementById('root'));
  console.log(Test(`Test from app.js\nReact Object:`), React)
})()