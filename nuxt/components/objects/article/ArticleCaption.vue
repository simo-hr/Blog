<template>
  <div class="flex flex-wrap">
    <div
      v-for="(article, index) in articles"
      :key="index"
      class="w-full sm:w-1/2 p-2"
    >
      <nuxt-link :to="{ path: `/article/${article.id}` }">
        <div class="relative">
          <CategoryTag class="absolute">{{ category.name }}</CategoryTag>
          <img
            class="w-full shadow-md"
            :src="`${apiHost}/storage/articles/${article.image}`"
          />
        </div>
        <p
          :to="{ path: '/article/' + article.id }"
          class="w-full mt-1 font-sans text-base sm:text-lg md:text-xl"
        >
          {{ article.title }}
        </p>
        <div class="align-middle">
          <font-awesome-icon
            class="inlne-block my-auto text-gray-400 h-full my-auto"
            :icon="['far', 'clock']"
          />
          <span class="inlne-block my-auto">
            {{ article.created_at.substr(0, 10) }}
          </span>
        </div>
      </nuxt-link>
    </div>
  </div>
</template>

<script>
import CategoryTag from '@/components/parts/CategoryTag'
export default {
  components: {
    CategoryTag,
  },
  props: {
    articles: {
      type: Array,
      default: () => [],
    },
    category: {
      type: Object,
      default: () => {},
    },
  },
  computed: {
    apiHost() {
      return process.env.API_HOST
    },
  },
}
</script>