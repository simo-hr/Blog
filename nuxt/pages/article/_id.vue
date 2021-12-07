<template>
  <div class="container text-gray-700">
    <h1 class="text-xl font-bold mb-3">
      {{ article.title }}
    </h1>
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
      <nuxt-link
        class="inline-block ml-3"
        :to="{ path: `/article/edit/${article.id}` }"
      >
        <font-awesome-icon
          class="block text-base text-lg h-full my-auto"
          :icon="['far', 'edit']"
      /></nuxt-link>
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
import { customParser } from '@/plugins/editors/custom_parser.js'
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
    if (article.content !== null) {
      const parser = await EditorJSHtml(customParser)
      article.content = await parser
        .parse(article.content)
        .reduce((x, y) => `${x}${y}`)
    }
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
#editorjs >>> h3 {
  @apply text-3xl font-bold mb-7 pb-2 w-full border-b border-gray-600;
}

#editorjs >>> p {
  @apply leading-10 text-lg;
}

#editorjs >>> a {
  @apply text-purple-600 hover:border-b hover:border-purple-600;
}

#editorjs >>> #code-block {
  @apply p-2 my-5 text-gray-200 rounded;
  background-color: #364549;
}

#editorjs >>> .list {
  @apply py-4 pl-10 my-5 text-gray-700 rounded bg-gray-100;
}

#editorjs >>> #order-list ol {
  @apply list-decimal list-inside;
}

#editorjs >>> #unordered-list ul {
  @apply list-disc list-inside;
}

#editorjs >>> #order-list li {
  @apply my-2;
}

#editorjs >>> #quote-block {
  @apply py-4 pl-4 pr-2 my-5 text-gray-700 rounded bg-gray-100;
}

#editorjs >>> #quote-block > div {
  @apply pl-4 border-l-2 border-gray-300;
}

#editorjs >>> #quote-block blockquote {
  @apply text-gray-700 mb-3;
}

#editorjs >>> #quote-block span {
  @apply break-all text-gray-400 text-sm;
}
</style>