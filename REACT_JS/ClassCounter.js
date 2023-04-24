import React, { Component } from 'react'

class ClassCounter extends Component {
    constructor(props) {
        super(props)

        this.state= {
            count: 0
        }
    }

    //Implement a method that will increment the count value by 1
    IncrementCount = () => {
        this.setState({
            count: this.state.count + 1
        })
    }

    render() {
        return (
            <div>
                <button onClick={this.IncrementCount}>count {this.state.count}</button>

            </div>
        )
    }
}
export default ClassCounter;