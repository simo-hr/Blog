const state = () => ({
  isAdmin: false,
})

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
      .post('login', credentials)
      .then(() => {
        commit('SET_IS_ADMIN', true)
        this.$router.push({ name: 'admin' })
      })
      .catch((error) => {
        commit('SET_IS_ADMIN', false)
        console.log(error)
      })
  },
  async logout({ commit }) {
    await this.$axios.get('sanctum/csrf-cookie')
    await this.$axios
      .post('logout')
      .then(() => {
        commit('SET_IS_ADMIN', false)
        this.$router.push({ name: 'index' })
      })
      .catch((error) => {
        console.log(error)
      })
  },
}
export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}
