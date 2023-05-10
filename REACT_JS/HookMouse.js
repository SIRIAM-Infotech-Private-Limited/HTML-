import React, { useEffect, useState } from 'react'

function HookMouse() {
    //State variables initialized with 0
    const [x, setX] = useState(0)
    const [y, setY] = useState(0)
 
    const logMousePosition= e => {
        console.log('Mouse event')
        setX(e.clientX)
        setY(e.clientY)
    }

   //Adding Event Listener that listens to mouse move event and Event handler is the Mouse Position
    useEffect(() => {
        console.log('useEffect called')
        window.addEventListener('mousemove', logMousePosition)
    }, []) //To call this effect on initial renders


  return (
    <div>
        {/* Rendering the State variables */}
        Hooks X -{x} Y - {y}

    </div>
  )
}

export default HookMouse