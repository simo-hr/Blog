<template>
  <div class="h-full">
    <div
      v-for="(category, index) in categories"
      :key="category.id"
      class="flex-auto relative h-full"
      @mouseover="showChildren(index)"
      @mouseleave="hideChildren(index)"
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
          text-center
          align-middle
          p-2
          hover:bg-gray-100
        "
        :to="{ path: '/category/' + category.id }"
      >
        {{ category.name }}
      </nuxt-link>
      <ChildrenCategoryRow
        v-show="hoverFlag && index === hoverIndex"
        :children-categories="category.children"
        class="absolute z-10 w-full"
      />
    </div>
  </div>
</template>

<script>
import ChildrenCategoryRow from '@/components/objects/category/ChildrenCategoryRow'
export default {
  components: {
    ChildrenCategoryRow,
  },
  data() {
    return {
      hoverFlag: false,
      hoverIndex: null,
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
  methods: {
    showChildren(index) {
      this.hoverFlag = true
      this.hoverIndex = index
    },
    hideChildren() {
      this.hoverFlag = false
    },
  },
}
</script>