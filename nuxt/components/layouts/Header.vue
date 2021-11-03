<template>
  <div classs="container">
    <header>
      <nuxt-link to="/">
        <div class="text-center align-middle p-5 mb-3 bg-red-800">
          {{ siteName }}
        </div>
      </nuxt-link>
      <Category :categories="categories" />
    </header>
  </div>
</template>

<script>
import Category from '@/components/objects/category/Category'
export default {
  components: {
    Category,
  },
  layout: 'Header',
  props: {
    categories: {
      type: Array,
      default: () => [],
    },
  },
  computed: {
    siteName() {
      return process.env.SITE_NAME
    },
  },
}
</script>