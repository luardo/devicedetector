import axios from "axios";

class Service {
  constructor() {
    this.apiPort = "8080";
    this.baseUri = "http://test-app.loc:" + this.apiPort;
    this.endpoints = {
      detectDevice: "detect"
    };
  }

  getDevice() {
    return axios.get(this.baseUri + "/" + this.endpoints.detectDevice);
  }
}

export default Service;
