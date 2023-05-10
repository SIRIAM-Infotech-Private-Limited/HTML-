import React from 'react'
import { UserContext, titleContext } from '../App'

function ComponentF() {
  return (
    <div>
       <UserContext.Consumer>
        {
          user => {
            return (
                <titleContext.Consumer>
                    {channel => {
                        return(
                            <div>
                                user context value {user}, channel context value {channel}
                            </div>
                        )
                    }}
               

             </titleContext.Consumer>
            )
          } }
        </UserContext.Consumer> 
    </div>
  )
}

export default ComponentF