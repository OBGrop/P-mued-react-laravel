import Api from './Api'

const path = '/role'

export const listRole = () => {
  return Api.get(path)
}