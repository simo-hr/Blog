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
      flex-none
      h-full
      text-center
      align-middle
      p-2
      ml-2
    "
  >
    {{ siteName }}
  </nuxt-link>
</template>

<script>
export default {
  computed: {
    siteName() {
      return process.env.SITE_NAME
    },
  },
}
</script>
