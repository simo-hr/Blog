<template>
  <footer class="text-center align-middle p-1 bg-gray-600">
    <small class="block my-auto text-gray-200">&copy; {{ todayYear }} {{ siteName }}.</small>
  </footer>
</template>

<script>
export default {
  computed: {
    todayYear() {
      const today = new Date()
      return today.getFullYear()
    },
    siteName() {
      return process.env.SITE_NAME
    },
  },
}
</script>
