<template>
  <div class="container mx-auto">
    <h1 class="h1">{{ category.name }}</h1>
    <ArticleList :articles="articlesPerPage">{{ category.name }}</ArticleList>

    <!-- ページネーションの関数部分はmixinsで切り分けてるが、病後部分はコンポーネント化はしていない -->
    <div v-show="articles.length !== 0">
      <ul id="page-nav" class="flex justify-center mx-auto w-1/2">
        <li v-if="!renderPages.includes(1)" @click="clickPage(1, $event)">1</li>
        <div v-if="!renderPages.includes(1)" class="flex items-center">...</div>
        <div v-for="n in renderPages" :key="n" @click="clickPage(n, $event)">
          <li :class="{ selected: isSelected === n }">{{ n }}</li>
        </div>
        <div v-if="!renderPages.includes(lastPage)" class="flex items-center">
          ...
        </div>
        <li
          v-if="!renderPages.includes(lastPage)"
          @click="clickPage(lastPage, $event)"
        >
          {{ lastPage }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import { PER_PAGE, pagination } from '@/mixins/pagination.js'
import ArticleList from '@/components/objects/article/ArticleList'
export default {
  components: {
    ArticleList,
  },
  mixins: [pagination],
  async asyncData(context) {
    const response = await context.$axios
      .get(`categories/${context.route.params.id}`)
      .catch((error) => {
        // eslint-disable-next-line no-console
        console.log(error)
      })
    const articles = response.data.articles
    const category = response.data
    const lastPage = await Math.ceil(articles.length / PER_PAGE)
    return { category, articles, lastPage }
  },
}
</script>