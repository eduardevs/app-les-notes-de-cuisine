import React, { useEffect, useState } from 'react'

interface LoginFormInterface {
  setUser: string,
  setPassword: string, 
  setLogin: boolean
}

export function LoginForm({ setUser, setPassword, setLogin}: LoginFormInterface ) {

  const [state, setState] = useState<object>({
    username: '',
    password: ''
  });

  const handleChange = (e:any) => {
    const {value} = e.target
    // console.log(value)
    setState({...state,
    [e.target.name]: value}
    )};

  const handleSubmit = (e) => {   
    e.preventDefault();
    
    setUser(state.username);
    setPassword(state.password);
    setLogin(true)
  }


  return (
    <form onSubmit={handleSubmit}>
      <div className="mb-3">
        <label htmlFor="user" className="form-label">Username :</label>
        <input type="text" className="form-control" name='username' id="user" defaultValue={state.username} onChange={handleChange} />
      </div>
      <div className="mb-3">
        <label htmlFor="pwd" className="form-label">Password:</label>
        <input type="password" className="form-control" name='password' id="pwd" defaultValue={state.password} onChange={handleChange} />
      </div>
  
      <button type="submit" className="btn btn-primary">Submit</button>
  </form>
  )
}
