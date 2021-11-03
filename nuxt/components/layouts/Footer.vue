<template>
  <div classs="container">
    <footer class="text-center align-middle p-3 bg-red-800">
      <div class="flex">
        <div class="flex-1">
          <nuxt-link to="/"> ホーム </nuxt-link>
        </div>
        <div class="flex-shrink-0">
          <nuxt-link :to="{ name: 'privacy-policy' }">
            プライバシーポリシー
          </nuxt-link>
        </div>
        <div class="flex-1">
          <nuxt-link :to="{ name: 'contact' }"> お問い合わせ </nuxt-link>
        </div>
      </div>
      <small>&copy; {{ todayYear }} {{ siteName }}.</small>
    </footer>
  </div>
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
