import logo from './logo.svg';
import './App.css';

// import React, {Component} from 'react'
// import User from './User'

// function App() {
//   //Component inside a component
//   function Apple(){
//     return(<div>Hello </div>)
//   }
//   return (
//     <div className="App">
//       <h1>Hello Universe</h1>
//       <User></User>
//       {Apple()} 
//       <Apple></Apple>
//       <Components></Components>
//     </div>
//   );
// }
// class Components extends Component
// {
//     render()
//     {
//         return(
//             <h1>Hello from user</h1>
//         )
//     }

// }

function App(){
  function Apple()
  {
   alert("Function called");
  }
  return(
    <div className='App'>
      <h1>Hello World !</h1>
      <button onclick={() => alert("hello")}>Click Me</button>
    </div>
  );
}
export default App;
