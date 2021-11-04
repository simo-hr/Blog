const state = () => ({
  categories: [],
})

const getters = {
  categories(state) {
    return state.categories
  },
}

const mutations = {
  SET_CATEGORIES(state, value) {
    state.categories = value
  },
}

const actions = {
  setCategories({ commit }, categories) {
    commit('SET_CATEGORIES', categories)
  },
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}
