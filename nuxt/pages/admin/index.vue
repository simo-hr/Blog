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
    </div>
  </div>
</template>

<script>
import categoryMixin from '@/mixins/categoryMixins.js'
export default {
  mixins: [categoryMixin],
  methods: {
    logout() {
      this.$store.dispatch('auth/logout', this.form)
    },
  },
}
</script>