//Class Component

import React, { Component } from "react"
class Car extends Component {
    constructor() {
        super();
        this.state = // {data: "Mausomi"};
        {data:1}
    }
    UPDATE()
    {
        //this.setState({data:"Paul"})
        this.setState({data:this.state.data+1})
    }
    render()
    {
        return (
        <div className="Car">
        <h2>I am a {this.state.data} </h2> 
        <button onClick={() => this.UPDATE()}>Update Data</button>
        </div>
        );
        }    
}
export default Car;