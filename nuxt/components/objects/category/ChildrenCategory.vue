<template>
  <div class="container mx-auto">
    <div class="flex flex-col">
      <div
        v-for="(category, index) in childrenCategories"
        :key="category.id"
        class="box-border"
      >
        <nuxt-link :to="{ path: '/category/' + category.id }">
          <div
            class="text-center align-middle p-3 bg-blue-400 hover:bg-blue-100"
          >
            {{ category.name }}
          </div>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    childrenCategories: {
      type: Array,
      default: () => [],
    },
  },
}
</script>