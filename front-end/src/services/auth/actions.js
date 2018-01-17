/*
 * action types
 */

export const LOGIN = 'LOGIN'
export const AUTHENTICATE = 'AUTHENTICATE'

/*
 * action creators
 */

export const login = () => ({
  type: LOGIN
})

export const authenticate = (isAuthenticated) => ({
  type: AUTHENTICATE,
  isAuthenticated
})
