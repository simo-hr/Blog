<template>
  <div class="container mx-auto mb-10">
    <h1
      class="pl-3 mb-10 font-sans text-base sm:text-lg md:text-3xl lg:text-3xl xl:text-3xl"
    >
      {{ category.name }}
    </h1>
    <p v-show="articles.length === 0" class="pl-5 h-">記事がありません</p>
    <ArticleCaption :articles="articles" :category="category" />
  </div>
</template>

<script>
import ArticleCaption from '@/components/objects/article/ArticleCaption'
export default {
  components: {
    ArticleCaption,
  },
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