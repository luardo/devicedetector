import React from "react";
import ReactDOM from "react-dom";
import App from "./App";
import { mount } from "enzyme";

import Service from "./service/Service.js";

it("renders without crashing", () => {
  const div = document.createElement("div");
  ReactDOM.render(<App />, div);
  ReactDOM.unmountComponentAtNode(div);
});

it("device and os should be computer and n/a", () => {
  const mockup = {
    device: "computer",
    os: "n/a"
  };
  const service = new Service();
  console.log(service);

  return service.getDevice().then(Response => {
    expect(Response.data).toEqual(mockup);
  });
});

it("clicks on the button", () => {
  const wrapper = mount(<App />);
  const button = wrapper.find(".button");
  button.simulate("click");
});
