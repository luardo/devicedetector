import React from "react";
import Service from "./service/Service.js";
import Button from "./components/Button.js";
import "./App.css";

class App extends React.Component {
  constructor(props) {
    super(props);
    this.service = new Service();
    this.getDevice = this.getDevice.bind(this);
    this.handleRequest = this.handleRequest.bind(this);

    this.state = {
      device: null,
      os: null
    };
  }

  componentWillMount() {}

  getDevice() {
    return this.service.getDevice();
  }

  handleRequest() {
    this.getDevice().then(({ data }) => {
      this.setState({
        device: data.device,
        os: data.os
      });
    });
  }
  render() {
    const { device, os } = this.state;
    return (
      <div className="App">
        <header className="App-header">
          <h1>Which device am I using?</h1>
          <Button
            handleRequest={this.handleRequest}
            text="Detect my device now!"
          />
          {device && os ? (
            <div className="App-result">
              <span>Device: </span>
              {device}
              <span> OS: </span> {os}
            </div>
          ) : (
            ""
          )}
        </header>
      </div>
    );
  }
}

export default App;
