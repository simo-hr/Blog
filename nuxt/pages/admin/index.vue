<template>
  <div class="container">
    <div>
      <h1 class="title">admin index</h1>
      <button
        class="
          bg-gray-900
          hover:bg-gray-700
          text-white
          font-bold
          py-2
          px-4
          h-full
        "
        @click="logout()"
      >
        Logout
      </button>
      <nuxt-link :to="{ path: '/article/create' }">新規投稿</nuxt-link>
    </div>
  </div>
</template>

<script>
export default {
  middleware: ['checkIsAdmin'],
  methods: {
    logout() {
      this.$store.dispatch('auth/logout')
    },
  },
}
</script>