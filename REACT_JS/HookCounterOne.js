//

import React, { useEffect, useState } from 'react'

function HookCounterOne() {
    const [count, setCount] = useState(0)
    const [name, setName] = useState('')

    useEffect(() => {
        console.log('useEffect -Updating document title')
        document.title =`You clicked ${count} times`
    }, [count]) //specify the props or state which we need to look for and those props/state are changed the effect will be executed.
  
  
    return (
    
    <div>
        <input type='text' value={name} onChange={e => setName(e.target.value)} />
        <button onClick={() => setCount(count 
        + 1)}> Click {count} times </button>
        
       
        </div>
  )
}

export default HookCounterOne