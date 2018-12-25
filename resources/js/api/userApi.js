import Api from './Api'

const path = '/user'

export const listUser = () => {
  return Api.get(path)
}