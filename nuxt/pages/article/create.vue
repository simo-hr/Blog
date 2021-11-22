<template>
  <div class="box-border w-full relative text-gray-700">
    <div class="mb-10">
      <input
        v-model="article.title"
        type="text"
        class="article-title-input"
        aria-label="タイトル"
        placeholder="記事タイトル"
      />
      <br />
      <select v-model="article.category_id" class="article-category-select">
        <option
          v-for="(category, index) in categories"
          :key="index"
          :value="category.id"
        >
          {{ category.name }}
        </option>
      </select>
    </div>

    <Editor :article="article"></Editor>
  </div>
</template>

<script>
import Editor from '@/components/objects/Editor'
export default {
  components: {
    Editor,
  },
  async asyncData(context) {
    const response = await context.$axios.get(`categories`).catch((error) => {
      // eslint-disable-next-line no-console
      console.log(error)
    })
    return { categories: response.data }
  },
  data() {
    return {
      isAdmin: false,
      editor: null,
      contentData: {},
      article: {
        category_id: Number,
        title: '',
        content: {},
      },
    }
  },
  computed: {
    apiHost() {
      return process.env.API_HOST
    },
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
  },
}
</script>