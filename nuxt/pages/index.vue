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
    <div>
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
import ArticleCaption from '@/components/objects/article/ArticleCaption'
const PER_PAGE = 8
const PAGE_NAV_LIST_MAX = 5
export default {
  components: {
    ArticleCaption,
  },
  async asyncData(context) {
    const response = await context.$axios.get(`articles`).catch((error) => {
      // eslint-disable-next-line no-console
      console.log(error)
    })
    const articles = response.data
    const lastPage = await Math.ceil(articles.length / PER_PAGE)
    return { articles, lastPage }
  },
  data() {
    return {
      renderPages: [],
      articlesPerPage: [],
      isSelected: 1,
    }
  },
  mounted() {
    this.articlesPerPage = this.articles.slice(0, PER_PAGE)
    this.initRenderPages()
  },
  methods: {
    initRenderPages() {
      if (this.lastPage >= PAGE_NAV_LIST_MAX) {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map((_, i) => i + 1)
      } else {
        this.renderPages = [...Array(this.lastPage)].map((_, i) => i + 1)
      }
    },
    clickPage(pageNumber) {
      this.isSelected = pageNumber
      this.changeRenderPages(pageNumber)
      window.scroll({
        top: 0,
      })
      this.articlesPerPage = this.articles.slice(
        0 + (pageNumber - 1) * PER_PAGE,
        7 + (pageNumber - 1) * PER_PAGE
      )
    },
    changeRenderPages(pageNumber) {
      if ([1, 2, 3].includes(pageNumber)) {
        this.initRenderPages()
      } else if (
        [this.lastPage - 2, this.lastPage - 1, this.lastPage].includes(
          pageNumber
        )
      ) {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map(
          (_, i) => i + this.lastPage - 4
        )
      } else {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map(
          (_, i) => i + pageNumber - 2
        )
      }
    },
  },
}
</script>

<style scoped>
.selected {
  @apply text-gray-200 bg-gray-600;
}
#page-nav li {
  @apply flex-none block py-2 px-4 m-2 border border-gray-400 transition-colors transform duration-300 hover:bg-gray-600 hover:text-gray-200;
}
</style>