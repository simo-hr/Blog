<template>
  <div class="w-full">
    <nuxt-link :to="{ path: '/article/create' }">新規投稿</nuxt-link>
  </div>
</template>

<script>
export default {
  middleware: ['checkIsAdmin'],
}
</script>