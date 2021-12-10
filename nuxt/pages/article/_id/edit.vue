<template>
  <div class="box-border w-full relative text-gray-700">
    <input
      v-model="article.title"
      type="text"
      class="article-title-input"
      aria-label="タイトル"
      placeholder="記事タイトル"
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
      <img class="img" :src="imgSource(article.image)" />
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
    </div>

    <Editor
      :article="article"
      @article-update="article.content = $event"
    ></Editor>
  </div>
</template>

<script>
import Editor from '@/components/objects/Editor'
export default {
  components: {
    Editor,
  },
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
    }
  },
  computed: {
    imgSource: () => {
      return (imgName) => {
        return `${process.env.API_HOST}/storage/articles/${imgName}`
      }
    },
  },
  mounted() {
    this.isAdmin = this.$store.getters['auth/isAdmin']
  },
  methods: {
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
  @apply text-white bg-gray-600 p-2 cursor-pointer;
}
</style>