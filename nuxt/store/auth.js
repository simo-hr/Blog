const state = {
  isAdmin: false,
}
const getters = {
  isAdmin(state) {
    return state.isAdmin
  },
}
const mutations = {
  SET_IS_ADMIN(state, value) {
    state.isAdmin = value
  },
}
const actions = {
  async login({ commit }, credentials) {
    await this.$axios.get('sanctum/csrf-cookie')
    await this.$axios
      .post('api/login', credentials)
      .then(() => {
        commit('SET_IS_ADMIN', true)
      })
      .catch((error) => {
        commit('SET_IS_AUTH', false)
        console.log(error)
      })
    this.$router.push({ name: 'admin' })
  },
  async logout({ commit }) {
    await this.$axios.get('sanctum/csrf-cookie')
    await this.$axios.post('admin/logout')
    commit('SET_IS_ADMIN', false)
    router.push({ name: 'index' })
  },
}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}
