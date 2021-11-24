<template>
  <div>
    <p v-show="articles.length === 0" class="pl-5">記事がありません</p>
    <div class="flex flex-wrap">
      <div
        v-for="(article, index) in articles"
        :key="index"
        class="w-full sm:w-1/2 xl:w-1/3 p-2 mb-5"
      >
        <ArticleCaption :article="article">
           <slot>undefined</slot>
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
  props: {
    articles: {
      type: Array,
      default: () => [],
    },
  },
}
</script>