<template>
  <div class="flex flex-col ml-3 text-gray-700">
    <RecentArticles class="mb-5" />
    <div class="aside-name">管理者</div>
    <nuxt-link
      v-show="!isAdmin"
      class="p-2 text-gray-700"
      :to="{ name: 'admin-login' }"
      >ログイン
    </nuxt-link>
    <button v-show="isAdmin" class="p-2 text-left text-gray-700" @click="logout()">
      ログアウト
    </button>
  </div>
</template>

<script>
import RecentArticles from '../parts/RecentArticles.vue'
export default {
  components: {
    RecentArticles,
  },
  data() {
    return {
      isAdmin: false,
    }
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
  },
  methods: {
    logout() {
      this.$store.dispatch('auth/logout')
    },
  },
}
</script>