<template>
  <div class="container">
    <p>{{ $route.params.id }}</p>
  </div>
</template>

<script>
import categoryMixin from '@/mixins/categoryMixins.js'
export default {
  mixins: [categoryMixin],
}
</script>