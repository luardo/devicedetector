import React from "react";
import "./Button.css";

class Button extends React.Component {
  constructor() {
    super();
  }
  render() {
    const { text, handleRequest } = this.props;
    return (
      <button className="button" onClick={() => handleRequest()}>
        {text}
      </button>
    );
  }
}

export default Button;
