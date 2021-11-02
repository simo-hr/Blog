<template>
  <div class="container">
    <div>
      <h1 class="title">admin index</h1>
      <button
        class="
          bg-gray-900
          hover:bg-gray-700
          text-white
          font-bold
          py-2
          px-4
          h-full
        "
        @click="getArticles()"
      >
        get article
      </button>
      <button
        class="
          bg-gray-900
          hover:bg-gray-700
          text-white
          font-bold
          py-2
          px-4
          h-full
        "
        @click="logout()"
      >
        Logout
      </button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    async getArticles() {
      await this.$axios
        .get('articles')
        .then((response) => {
          console.log(response)
        })
        .catch((error) => {
          commit('SET_IS_ADMIN', false)
          console.log(error)
        })
    },
    logout() {
      this.$store.dispatch('auth/logout', this.form)
    },
  },
}
</script>