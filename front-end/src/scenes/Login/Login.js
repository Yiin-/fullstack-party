import React, { Component } from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { Auth } from '@/services/api'
import './Login.scss'

const mapStateToProps = (state) => ({
  isAuthenticated: state.isAuthenticated
})

const mapDispatchToProps = (dispatch) => ({
  onLoginClick() {
    dispatch(Auth.login())
  }
})

class Login extends Component {
  propTypes = {
    handleLogin: PropTypes.func.isRequired
  }

  render() {
    return (
      <div className="Login">
        <div className="Logo" />
        <button className="LoginBtn" onClick={this.props.handleLogin}>
          Login with GitHub
        </button>
      </div>
    )
  }
}

export default connect(
  mapStateToProps,
  mapDispatchToProps
)(Login)
