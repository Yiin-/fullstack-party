import React, { Component } from 'react'
import { Route } from 'react-router-dom'
import Login from './Login/Login'
import List from './List/List'
import './App.scss'

class App extends Component {
  render() {
    return (
      <div className="App">
        <Route path="/" component={Login} />
        <Route path="/list" component={List} />
      </div>
    )
  }
}

export default App
