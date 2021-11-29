<template>
  <div class="w-full">
    <div class="flex flex-wrap">
      <div
        v-for="(article, index) in articlesPerPage"
        :key="index"
        class="w-full sm:w-1/2 xl:w-1/3 p-2 mb-5"
      >
        <ArticleCaption :article="article" />
      </div>
    </div>

    <!-- ページネーションの関数部分はmixinsで切り分けてるが、病後部分はコンポーネント化はしていない -->
    <div v-show="articles.length !== 0">
      <ul id="page-nav" class="flex justify-center mx-auto w-1/2">
        <li v-if="!renderPages.includes(1)" @click="clickPage(1)">1</li>
        <div v-if="!renderPages.includes(1)" class="flex items-center">...</div>
        <div v-for="n in renderPages" :key="n" @click="clickPage(n)">
          <li :class="{ selected: isSelected === n }">{{ n }}</li>
        </div>
        <div v-if="!renderPages.includes(lastPage)" class="flex items-center">
          ...
        </div>
        <li v-if="!renderPages.includes(lastPage)" @click="clickPage(lastPage)">
          {{ lastPage }}
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import { PER_PAGE, pagination } from '@/mixins/pagination.js'
import ArticleCaption from '@/components/objects/article/ArticleCaption'
export default {
  components: {
    ArticleCaption,
  },
  mixins: [pagination],
  async asyncData(context) {
    const response = await context.$axios.get(`articles`).catch((error) => {
      // eslint-disable-next-line no-console
      console.log(error)
    })
    const articles = response.data
    const lastPage = await Math.ceil(articles.length / PER_PAGE)
    return { articles, lastPage }
  },
}
</script>