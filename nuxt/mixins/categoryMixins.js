export default {
  asyncData(app) {
    return app.$axios
      .get('categories')
      .then((response) => {
        return {
          categories: response.data,
        }
      })
      .catch((error) => {
        console.log(error)
      })
  },
  mounted() {
    this.getCategories()
  },
  methods: {
    getCategories() {
      this.$nuxt.$emit('getCategories', this.categories)
    },
  },
}
