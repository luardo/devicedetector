import axios from "axios";

class Service {
  constructor() {
    this.baseUri = "http://192.168.99.100:8080/";
    this.endpoints = {
      detectDevice: "detect"
    };
  }

  getDevice() {
    return axios.get(this.baseUri + "/" + this.endpoints.detectDevice);
  }
}

export default Service;
