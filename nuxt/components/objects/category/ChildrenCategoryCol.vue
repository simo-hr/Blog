<template>
  <div class="flex flex-col w-full">
    <div v-for="category in childrenCategories" :key="category.id">
      <nuxt-link
        class="
          font-sans
          inline-block
          text-base
          sm:text-lg
          md:text-xl
          lg:text-2xl
          xl:text-3xl
          align-middle
          w-full
          p-2
          bg-white
          hover:bg-gray-100
        "
        :to="{ path: '/category/' + category.id }"
      >
        &nbsp;&nbsp;&nbsp;・{{ category.name }}
      </nuxt-link>
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