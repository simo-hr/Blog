<template>
  <div class="container mx-auto">
    <div class="flex mb-3">
      <div class="flex-auto">
        <nuxt-link :to="{ name: 'profile' }">
          <div
            class="text-center align-middle p-3 bg-blue-400 hover:bg-blue-100"
          >
            プロフィール
          </div>
        </nuxt-link>
      </div>
      <div
        v-for="(category, index) in categories"
        :key="category.id"
        class="flex-auto relative"
        @mouseover="showChildren(index)"
        @mouseleave="hideChildren(index)"
      >
        <nuxt-link :to="{ path: '/category/' + category.id }">
          <div
            class="text-center align-middle p-3 bg-blue-400 hover:bg-blue-100"
          >
            {{ category.name }}
          </div>
        </nuxt-link>
        <ChildrenCategory
          v-show="hoverFlag && index === hoverIndex"
          :children-categories="category.children"
          class="z-10 absolute w-full"
        />
      </div>
    </div>
  </div>
</template>

<script>
import ChildrenCategory from '@/components/objects/category/ChildrenCategory'
export default {
  components: {
    ChildrenCategory,
  },
  props: {
    categories: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      hoverFlag: false,
      hoverIndex: null,
    }
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