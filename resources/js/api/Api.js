import { create } from 'apisauce'

const Api = create({
  baseURL: window.baseUrl,
  headers: {
    'Content-Type': 'application/json; charset=utf-8'
  }
})
export default Api

