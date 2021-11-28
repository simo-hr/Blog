<template>
  <nuxt-link :to="{ path: `/article/${article.id}` }">
    <div class="relative">
      <CategoryTag class="absolute z-10">
        <slot>{{ article.category.name }}</slot>
      </CategoryTag>
      <div class="relative overflow-hidden">
        <img
          class="w-full shadow-md transform duration-200 hover:scale-110"
          :src="imgSource(article.image)"
        />
      </div>
    </div>
    <p
      :to="{ path: '/article/' + article.id }"
      class="w-full mt-2 font-sans text-base sm:text-lg md:text-lg"
    >
      {{ article.title }}
    </p>
    <div class="align-middle">
      <font-awesome-icon
        class="inline-block my-auto text-gray-400 h-full"
        :icon="['far', 'clock']"
      />
      <span class="inlne-block my-auto">
        {{ article.created_at.substr(0, 10) }}
      </span>
    </div>
  </nuxt-link>
</template>

<script>
import CategoryTag from '@/components/parts/CategoryTag'
export default {
  components: {
    CategoryTag,
  },
  props: {
    article: {
      type: Object,
      default: () => {},
    },
  },
  computed: {
    imgSource: () => {
      return (imgName) => {
        return `${process.env.API_HOST}/storage/articles/${imgName}`
      }
    },
  },
}
</script>