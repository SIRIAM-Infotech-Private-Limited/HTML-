import logo from './logo.svg';
import './App.css';
import React, {Component} from 'react'

function App() {
  //Component inside a component
  function Apple(){
    return(<div>Hello </div>)
  }
  return (
    <div className="App">
      <h1>Hello Universe</h1>
      <User></User>
      {Apple()} 
      <Apple></Apple>
      <Components></Components>
    </div>
  );
}
class Components extends Component
{
    render()
    {
        return(
            <h1>Hello from user</h1>
        )
    }

}


export default App;
