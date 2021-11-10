<template>
  <div class="w-full sm:max-w-sm px-1 pb-1 text-gray-700">
    <div id="list-name" class="relative w-full font-bold text-xl mb-2">
      最近の投稿
    </div>
    <li
      v-for="(article, index) in articles"
      :key="index"
      class="
        w-full
        inline-block
        list-none
        border-solid border-b border-gray-300
        hover:bg-gray-100
        transition-all
        hover:pl-3
      "
    >
      <nuxt-link
        class="font-sans inline-block w-full align-middle p-2"
        :to="{ path: '/article/' + article.id }"
      >
        {{ article.title }}
      </nuxt-link>
    </li>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articles: [],
    }
  },
  async fetch() {
    await this.$axios
      .get('articles')
      .then((response) => {
        this.$store.dispatch(
          'article/setArticles',
          response.data.reverse().slice(0, 4)
        )
      })
      .catch((error) => {
        // eslint-disable-next-line no-console
        console.log(error)
      })
  },
  mounted() {
    this.articles = this.$store.getters['article/articles']
  },
}
</script>

<style scoped>
#list-name {
  padding-bottom: 10px;
  padding-right: 10px;
  padding-left: 10px;
}

#list-name:before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  border-bottom: 2px solid #e2e8f0;
}

#list-name:after {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 40%;
  border-bottom: 2px solid #a0aec0;
}
</style>