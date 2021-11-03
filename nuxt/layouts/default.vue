<template>
  <div>
    <Header :categories="categories" />
    <Nuxt />
    <Footer />
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: [],
    }
  },
  created() {
    this.setListener()
  },
  methods: {
    setListener() {
      this.$nuxt.$on('getCategories', this.setCategories)
    },
    setCategories(categories) {
      this.categories = categories || []
    },
  },
}
</script>