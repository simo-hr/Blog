<template>
  <div class="flex flex-col ml-3">
    <RecentArticles />
    <nuxt-link class="p-2 text-gray-700" :to="{ name: 'admin-login' }">管理者ログイン</nuxt-link>
  </div>
</template>

<script>
import RecentArticles from '../parts/RecentArticles.vue'
export default {
  components: {
    RecentArticles,
  },
}
</script>