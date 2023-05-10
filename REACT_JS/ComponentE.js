import React, {useContext} from 'react'
import ComponentF from './ComponentF'
import { UserContext, titleContext } from '../App'

function ComponentE() {

  const user =  useContext(UserContext)
  const title = useContext(titleContext)
  return (
    <div>
        {user} - {title}
    </div>
  )
}

export default ComponentE