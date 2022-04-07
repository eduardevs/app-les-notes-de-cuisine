import { useEffect } from 'react'
import { InscriptionForm } from './components/InscriptionForm'


function App() {

    useEffect(() => {
        const body = new URLSearchParams({
            name: 'Eduardo',
            lastname: 'Pina'
        })

        const header = new Headers({
            'Content-type': 'application/x-www-form-urlencoded'
        })
        fetch('http://localhost:3456', {
            method: 'POST',
            body: body,
            headers: header,
            mode: 'cors'
        })
            .then(res => res.json())
            .then(data => console.log(data))

    }, [])

    return (
        <>
            <InscriptionForm />
        </>
    )
}

export default App
