import { requests } from './agent'

const limit = (count, p) => `limit=${count}&offset=${(p || 0) * count}`

const Auth = {
  login: () =>
    requests.get('/login'),
  logout: () =>
    requests.get('/logout')
}

const Entries = {
  open: (page, count = 10) =>
    requests.get(`/entries/open?${limit(count, page)}`),
  closed: (page, count = 10) =>
    requests.get(`/entries/closed?${limit(count, page)}`),
  get: (id) =>
    requests.get(`/entry/${id}`)
}

export default {
  Auth,
  Entries
}
