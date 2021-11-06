<template>
  <div class="container">
    <h2>{{ article.title }}</h2>
    <div v-if="isAdmin">
      <nuxt-link :to="{ path: `/article/edit/${article.id}` }">edit</nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  asyncData(context) {
    return context.$axios
      .get(`articles/${context.route.params.id}`)
      .then((response) => {
        return {
          article: response.data,
        }
      })
      .catch((error) => {
        // eslint-disable-next-line no-console
        console.log(error)
      })
  },
  data() {
    return {
      isAdmin: false,
    }
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
  },
}
</script>