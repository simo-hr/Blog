<template>
  <nuxt-link
    to="/"
    class="
      font-sans
      text-base
      sm:text-lg
      md:text-xl
      lg:text-2xl
      xl:text-3xl
      text-center
      align-middle
      p-2
    "
  >
    {{ siteName }}
  </nuxt-link>
</template>

<script lang='ts'>
import Vue from 'vue'
export default Vue.extend({
  computed: {
    siteName(): string | undefined {
      return process.env.SITE_NAME
    },
  },
})
</script>
