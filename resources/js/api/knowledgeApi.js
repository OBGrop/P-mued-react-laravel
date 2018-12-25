import Api from './Api'

const path = '/knowledge'

export const listKnowledge = () => {
  return Api.get(path)
}