// UseState Hook in Functional Component
import React, { useState } from "react";

function HookCounter() {

    const [count, setCount] = useState(0)
    //Accepts initial value of the state variable and a method that will update the state variable called as setCount
     return (
        <div>
            <button onClick={() => setCount(count + 1)} >Count {count} </button>

        </div>
    )
}

export default HookCounter;