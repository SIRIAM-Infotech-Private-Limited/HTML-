import React from 'react'
import './App.css';
import ComponentC from './Components/ComponentC';

export const UserContext = React.createContext()
export const titleContext = React.createContext()
function App() {
  return (
    <div className="App">
      
      <UserContext.Provider value={'Mausomi'}>
        <titleContext.Provider value={'Paul'}>
          <ComponentC />

        </titleContext.Provider>
        
      </UserContext.Provider>
      
    </div>
  );
}

export default App;
