import React from "react";
import "./Button.css";

const Button = ({ text, handleRequest }) => (
  <button className="button" onClick={() => handleRequest()}>
    {text}
  </button>
);

export default Button;
