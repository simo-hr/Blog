<template>
  <div class="container">
    <div>
      <h1 class="title">
        {{ greet }}
      </h1>
    </div>
  </div>
</template>

<script lang="ts">
import Vue from 'vue'

export default Vue.extend({
  async asyncData({ app }): Promise<object> {
    const greet: string = await app.$axios.$get('/').catch((err) => err)
    return { greet }
  },
})
</script>