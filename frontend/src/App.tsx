import { useEffect, useState } from 'react'

import { LoginForm } from './components/LoginForm'


  

function App() {
    const [name, setName] = useState<string>()
    const [lastName, setLastName] = useState<string>()
    const [user, setUser] = useState<string>()
    const [password, setPassword] = useState<string>()
    const [dataOk, setDataOk] = useState(false)

    const [login, setLogin] = useState(false)


    // WIP hereee
    // const [token, setToken]= useState()

    

//   useEffect(() => {

//     const credentials = btoa(`${user}:${password}`)

//     const header = new Headers({
//         'Authorization': `Bearer ${credentials}`,
//         'Content-Type': 'application/x-www-form-urlencoded'
//         // 'Authorization': `Bearer ${btoa('Eduardo:password')}`
//     })
    
//    const body = new URLSearchParams({
//         username: user,
//         name: name,
//         lastname: lastName,
//         password: password  
//       })
// // ${btoa('Eduardo:password')}
//     if(dataOk) {
//     fetch('http://localhost:3456/inscription.php', {
//         method: 'POST',
//         body: body,
//         headers: header,
//         mode: 'cors',
//         credentials:'include'
//     })
//         .then(res => res.json())
//         .then(res => console.log(res))

//   }

//        setDataOk(false)
// },
//  [dataOk]);

useEffect(() => {

    const credentials = btoa(`${user}:${password}`)

    const header = new Headers({
        'Authorization': `Bearer ${credentials}`,
        'Content-Type': 'application/x-www-form-urlencoded'
        // 'Authorization': `Bearer ${btoa('Eduardo:password')}`
    })

   const body = new URLSearchParams({
        username: user,
        password: password  
      })
      
    fetch('http://localhost:3456/login.php', {
        method: 'GET',
        // body: body,
        headers: header,
        mode: 'cors',
        credentials:'include'
    })
        .then(res => res.json())
        .then(res => console.log(res))

},
 [login]);

    return (
        <div className='container'>
            <div className='m-5'>
                {/* <p>{`Your name is ${name} ${lastName}, your username is ${user} and your password ${password}`}</p> */}
            </div>
            {/* <InscriptionForm setName={setName} setLastName={setLastName} setPassword={setPassword} setDataOk={setDataOk} setUser={setUser} /> */}
            <LoginForm setPassword={setPassword} setLogin={setLogin} setUser={setUser} />
        </div>
    )
}

export default App
