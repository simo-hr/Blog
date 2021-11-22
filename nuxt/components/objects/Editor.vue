<template>
  <div class="min">
    <div id="editorjs"></div>
    <button class="article-save-btn" @click="save()">{{ btnValue }}</button>
  </div>
</template>

<script>
export default {
  props: {
    article: {
      type: Object,
      default: () => {},
    },
  },
  data() {
    return {
      editor: null,
    }
  },
  computed: {
    btnValue() {
      return this.$route.name === 'article-create' ? '投稿' : '更新'
    },
  },
  mounted() {
    this.editor = this.$editor.EditorJS({
      holder: 'editorjs',
      placeholder: 'No content',
      data: this.article.content,
    })
  },
  methods: {
    async save() {
      if (this.$route.name === 'article-create') {
        await this.editor.save().then((savedData) => {
          this.$emit('article-create', savedData)
        })
        this.$axios.post(`/articles`, this.article).catch((err) => {
          // eslint-disable-next-line no-console
          console.log(err)
        })
      } else {
        await this.editor.save().then((savedData) => {
          this.$emit('article-update', savedData)
        })
        await this.$axios
          .put(`/articles/${this.article.id}`, this.article)
          .catch((err) => {
            // eslint-disable-next-line no-console
            console.log(err)
          })
        this.$router.push(`/article/${this.article.id}`)
      }
    },
  },
}
</script>

<style scoped>
.img {
  @apply w-16 md:w-32 lg:w-48 h-auto flex-none border border-gray-300;
}

.code-block {
  @apply text-white bg-gray-600 p-2 m-2 cursor-pointer;
}

#editorjs >>> .code-block textarea {
  @apply text-gray-300 w-full bg-gray-900 my-2 p-2 rounded;
}

#editorjs >>> .ce-block__content {
  @apply m-0 max-w-full;
}

#editorjs >>> .ce-block {
  @apply m-0 max-w-full;
}
</style>