import React from "react";
import ReactDOM from "react-dom";
import App from "./App";

import Service from "./service/Service.js";

it("renders without crashing", () => {
  const div = document.createElement("div");
  ReactDOM.render(<App />, div);
  ReactDOM.unmountComponentAtNode(div);
});

it("connects to the backend", () => {
  const mockup = {
    device: "phone",
    os: "Mac OS X"
  };
  const service = new Service();
  service.getDevice().resolves.toBe({ mockup });
});
