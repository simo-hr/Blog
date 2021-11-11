<template>
  <div class="flex flex-col w-full shadow-md">
    <div v-for="category in childrenCategories" :key="category.id">
      <nuxt-link
        class="
          font-sans
          inline-block
          text-base
          sm:text-md
          md:text-lg
          lg:text-xl
          text-center
          align-middle
          w-full
          p-2
          bg-white
          hover:bg-gray-100
        "
        :to="{ path: '/category/' + category.id }"
      >
        {{ category.name }}
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