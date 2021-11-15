<template>
  <div class="container text-gray-700">
    <h1 class="text-xl font-bold mb-3">{{ article.title }}</h1>
    <div class="flex align-middle mb-10">
      <nuxt-link
        class="mr-2"
        :to="{ path: `/category/${article.category.id}` }"
      >
        <CategoryTag>{{ article.category.name }}</CategoryTag>
      </nuxt-link>
      <font-awesome-icon
        class="block my-auto mr-1 text-gray-400"
        :icon="['far', 'clock']"
      />
      <span class="block my-auto">
        {{ article.created_at.substr(0, 10) }}
      </span>
    </div>
    <div v-if="isAdmin">
      <nuxt-link :to="{ path: `/article/edit/${article.id}` }">edit</nuxt-link>
    </div>
    <div v-if="!isAdmin">
      <nuxt-link :to="{ path: `/article/edit/${article.id}` }">edit</nuxt-link>
    </div>
    <div class="p-2 mb-10">
      <!-- eslint-disable-next-line vue/no-v-html -->
      <div id="editorjs" v-html="article.content"></div>
    </div>
  </div>
</template>

<script>
import EditorJSHtml from 'editorjs-html'
import CategoryTag from '@/components/parts/CategoryTag'
export default {
  components: {
    CategoryTag,
  },
  async asyncData(context) {
    const response = await context.$axios
      .get(`articles/${context.route.params.id}`)
      .catch((error) => {
        // eslint-disable-next-line no-console
        console.log(error)
      })
    const article = response.data
    const codeParser = (block) => {
      return `<pre class="p-2 my-2 bg-gray-800 text-gray-200 rounded"><code>${block.data.code
        .replace(/</g, '&lt;')
        .replace(/>/, '&gt;')}</code></pre>`
    }
    const parser = await EditorJSHtml({ code: codeParser })
    article.content = await parser
      .parse(JSON.parse(article.content))
      .reduce((x, y) => `${x}${y}`)
    return { article }
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

<style scoped>
#editorjs >>> h2 {
  @apply text-xl font-bold p-3 mb-7 w-full bg-gray-100
}
</style>