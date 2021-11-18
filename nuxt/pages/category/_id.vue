<template>
  <div class="container mx-auto mb-10">
    <h1 class="h1">{{ category.name }}</h1>
    <p v-show="articles.length === 0" class="pl-5 h-">記事がありません</p>
    <div class="flex flex-wrap">
      <div
        v-for="(article, index) in articles"
        :key="index"
        class="w-full sm:w-1/2 xl:w-1/3 p-2 mb-5"
      >
        <ArticleCaption :article="article">
          {{ category.name }}
        </ArticleCaption>
      </div>
    </div>
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