// assets/js/app.js
"use strict"

import React from "react"
import ReactDOM from "react-dom"
import Test from "./test" // semi colons causing an error, but why?

class Welcome extends React.Component {
  render() {
    return <h1>Hi, {this.props.name}{this.message}</h1>
  }
}

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
    );
  }
}

(() => {
  ReactDOM.render(<App />, document.getElementById("root"))
  console.log(Test(`Test from app.js\n\nReact Object:`), React)
})()
