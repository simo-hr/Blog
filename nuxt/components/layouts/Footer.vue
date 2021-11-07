<template>
  <footer class="text-center align-middle p-3 bg-gray-600">
    <div
      class="
        flex flex-col
        sm:flex-row
        font-sans
        text-gray-200 text-base
        sm:text-md
        md:text-lg
        lg:text-xl
        xl:text-2xl
      "
    >
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
    <small class="text-gray-200">&copy; {{ todayYear }} {{ siteName }}.</small>
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
