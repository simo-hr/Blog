const state = () => ({
  articles: [],
})

const getters = {
  articles(state) {
    return state.articles
  },
}

const mutations = {
  SET_ARTICLES(state, value) {
    state.articles = value
  },
}

const actions = {
  setArticles({ commit }, articles) {
    commit('SET_ARTICLES', articles)
  },
}

export default {
  namespaced: true,
  state,
  getters,
  mutations,
  actions,
}
