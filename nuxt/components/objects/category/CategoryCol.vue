<template>
  <div>
    <div
      v-for="category in categories"
      :key="category.id"
      class="flex-auto relative"
    >
      <nuxt-link
        class="
          font-sans
          text-base
          sm:text-md
          md:text-lg
          lg:text-xl
          xl:text-2xl
          inline-block
          w-full
          h-full
          align-middle
          p-2
          hover:bg-gray-100
        "
        :to="{ path: '/category/' + category.id }"
      >
        {{ category.name }}
      </nuxt-link>
      <ChildrenCategoryCol
        :children-categories="category.children"
        class="left-10 w-full"
      />
    </div>
  </div>
</template>

<script>
import ChildrenCategoryCol from '@/components/objects/category/ChildrenCategoryCol'
export default {
  components: {
    ChildrenCategoryCol,
  },
  data() {
    return {
      categories: [],
    }
  },
  async fetch() {
    const response = await this.$axios.get('categories').catch((error) => {
      // eslint-disable-next-line no-console
      console.log(error)
    })
    this.$store.dispatch('category/setCategories', response.data)
  },
  mounted() {
    this.categories = this.$store.getters['category/categories']
  },
}
</script>