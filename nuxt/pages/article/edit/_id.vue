<template>
  <div class="box-border relative mx-auto text-gray-700">
    <input
      v-model="article.title"
      type="text"
      class="
        shadow
        appearance-none
        border border-blue-500
        rounded
        w-1/2
        py-2
        px-3
        mb-3
        leading-tight
        focus:outline-none focus:shadow-outline
      "
      aria-label="タイトル"
    />

    <div
      class="relative w-1/6 hover:cursor-pointer"
      @mouseover="
        {
          imgChangeFlag = true
        }
      "
      @mouseleave="
        {
          imgChangeFlag = false
        }
      "
    >
      <img class="img" :src="`${apiHost}/storage/articles/${article.image}`" />
      <label
        v-show="imgChangeFlag"
        class="
          block
          absolute
          bg-gray-200 bg-opacity-50
          w-full
          h-full
          z-10
          top-0
        "
      >
        <input
          ref="imageUploader"
          class="hidden block w-full h-full"
          type="file"
          @change="confirmImage"
        />
      </label>
    </div>

    <div
      v-if="confirmedImage"
      class="
        absolute
        box-border
        top-0
        p-1
        z-10
        w-full
        md:w-1/2
        lg:w-1/3
        bg-gray-900 bg-opacity-75
        border-4 border-gray-600
        rounded
      "
    >
      <div class="flex ml-auto">
        <button v-if="file !== ''" class="block btn" @click="uploadImage">
          適用
        </button>
        <button v-if="file !== ''" class="block btn" @click="uploadCancel">
          キャンセル
        </button>
      </div>
      <img class="w-full mx-auto" :src="confirmedImage" />
      <div></div>
    </div>

    <div id="editorjs" class=""></div>
    <button class="inline-block btn w-full" @click="save()">更新</button>
  </div>
</template>

<script>
export default {
  // middleware: ['checkIsAdmin'],
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
      message: '',
      file: '',
      view: true,
      imgChangeFlag: false,
      confirmedImage: '',
      editor: null,
      contentData: {},
    }
  },
  computed: {
    apiHost() {
      return process.env.API_HOST
    },
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
    this.editor = this.$editor.EditorJS({
      holder: 'editorjs',
      placeholder: 'No content',
      data: JSON.parse(this.article.content),
    })
  },
  methods: {
    async save() {
      await this.editor.save().then((savedData) => {
        this.article.content = JSON.stringify(savedData)
      })

      this.$axios
        .put(`/articles/${this.$route.params.id}`, {
          category_id: this.article.category_id,
          title: this.article.title,
          content: this.article.content,
        })
        .catch((err) => {
          // eslint-disable-next-line no-console
          console.log(err)
        })
    },
    confirmImage(e) {
      this.message = ''
      this.file = e.target.files[0]
      if (!this.file.type.match('image.*')) {
        this.message = '画像ファイルを選択して下さい'
        this.confirmedImage = ''
        return
      }
      this.createImage(this.file)
    },
    createImage(file) {
      const reader = new FileReader()
      reader.readAsDataURL(file)
      reader.onload = (e) => {
        this.confirmedImage = e.target.result
      }
    },
    uploadImage() {
      const articleImage = new FormData()
      articleImage.append('file', this.file)
      this.$axios
        .post(`/articles/${this.$route.params.id}/image`, articleImage)
        .then((response) => {
          this.article = response.data
          this.confirmedImage = ''
          this.file = ''
          this.view = false
          this.$nextTick(function () {
            this.view = true
          })
        })
        .catch((err) => {
          // eslint-disable-next-line no-console
          console.log(err)
        })
    },
    uploadCancel() {
      this.$refs.imageUploader.value = ''
      this.message = ''
      this.file = ''
      this.view = true
      this.confirmedImage = ''
    },
  },
}
</script>

<style scoped>
.img {
  @apply w-16 md:w-32 lg:w-48 h-auto flex-none border border-gray-300;
}

.btn {
  @apply text-white bg-gray-600 p-2 m-2 cursor-pointer;
}
</style>