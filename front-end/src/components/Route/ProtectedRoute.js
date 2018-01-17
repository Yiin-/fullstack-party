import React from 'react'
import { connect } from 'react-redux'
import PropTypes from 'prop-types'
import { Redirect, Route } from 'react-router-dom'

const mapStateToProps = (state) => ({
  isAuthenticated: state.isAuthenticated
})

const ProtectedRoute = ({ component: Component, ...rest }) => {
  return (
    <Route
      {...rest}
      render={(props) =>
        this.props.isAuthenticated ? (
          <Component {...props} />
        ) : (
          <Redirect to={{ pathname: '/login', state: { from: props.location } }} />
        )
      }
    />
  )
}

ProtectedRoute.propTypes = {
  component: PropTypes.any.isRequired,
  location: PropTypes.string.isRequired
}

export default connect({
  mapStateToProps
})(ProtectedRoute)
