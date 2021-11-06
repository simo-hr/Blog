<template>
  <div class="container">
    <h2>{{ category.name }}</h2>
    <div v-for="(article, index) in articles" :key="index">
      {{ category.name }}
      <nuxt-link :to="{ path: '/article/' + article.id }">
        {{ article.title }}</nuxt-link
      >
    </div>
  </div>
</template>

<script>
export default {
  asyncData(app) {
    return app.$axios
      .get(`categories/${app.route.params.id}`)
      .then((response) => {
        return {
          articles: response.data.articles,
          category: response.data,
        }
      })
      .catch((error) => {
        console.log(error)
      })
  },
}
</script>