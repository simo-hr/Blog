<template>
  <div class="container text-gray-700">
    <h1 class="text-xl font-bold mb-3">{{ article.title }}</h1>
    <div class="flex align-middle mb-10">
      <nuxt-link class="mr-2" :to="{ path: `/category/${article.category.id}` }">
        <CategoryTag>{{ article.category.name }}</CategoryTag>
      </nuxt-link>
      <font-awesome-icon class="block my-auto mr-1 text-gray-400" :icon="['far', 'clock']" />
      <span class="block my-auto">
        {{ article.created_at.substr(0, 10) }}
      </span>
    </div>
    <div v-if="isAdmin">
      <nuxt-link :to="{ path: `/article/edit/${article.id}` }">edit</nuxt-link>
    </div>
    <div class="mb-10">
      <!-- eslint-disable-next-line vue/no-v-html -->
      <div v-html="article.content"></div>
    </div>
  </div>
</template>

<script>
import CategoryTag from '@/components/parts/CategoryTag'
export default {
  components: {
    CategoryTag,
  },
  asyncData(context) {
    return context.$axios
      .get(`articles/${context.route.params.id}`)
      .then((response) => {
        return {
          article: response.data,
        }
      })
      .catch((error) => {
        // eslint-disable-next-line no-console
        console.log(error)
      })
  },
  data() {
    return {
      isAdmin: false,
    }
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
  },
}
</script>