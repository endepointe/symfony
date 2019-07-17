// assets/js/app.js
//"use strict"

import React from "react";
import ReactDOM from "react-dom";
import Test from "./test";

class App extends React.Component {
  render() {
    return (
      <div>
        <Clock></Clock>
      </div>
    )
  }
};

class Clock extends React.Component {
  constructor(props) {
    // used to access and call functions on an object's parent
    super(props);
    this.state = {
      date: new Date()
    };
  }

  // Lifecycle Methods
  componentDidMount() {
    this.timerID = setInterval(
      () => this.tick(),
      1000
    );
  }

  componentWillUnmount() {
    clearInterval(this.timerID);
  } // End lcm

  tick() {
    this.setState({
      date: new Date()
    });
  }

  render() {
    return (
      <div>
        <h1>Hello, world!</h1>
        <h2>It is {this.state.date.toLocaleTimeString()}.</h2>
      </div>
    )
  }
}

class Toggle extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isToggleOn: true };
    this.handleClick = this.handleClick.bind(this);
  }
  handleClick() {
    this.setState(state => ({
      isToggleOn: !state.isToggleOn
    }));
  }
  render() {
    return(
      <button onClick={this.handleClick}>
        {this.state.isToggleOn ? 'ON' : 'OFF' }
      </button>
    );
  }
}

(() => {
  ReactDOM.render(<Toggle />, document.getElementById("root"))
  console.log(Test(`Test from app.js\n\nReact Object:`), React)
})()
