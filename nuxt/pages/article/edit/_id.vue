<template>
  <div class="container mx-auto">
    <h2>{{ article.title }}</h2>
    <div>
      <div class="flex">
        <img
          class="img w-16 md:w-32 lg:w-48 h-auto mx-2 flex-none"
          :src="`${apiHost}/storage/articles/${article.image}`"
        />
        <div v-if="confirmedImage">
          <img
            class="img w-32 md:w-40 lg:w-48 h-auto mx-2 flex-none"
            :src="confirmedImage"
          />
        </div>
        <div>
          <label class="text-white bg-blue-800 p-2 m-2 cursor-pointer">
            <input
              v-if="view"
              class="hidden"
              type="file"
              name="file"
              @change="confirmImage"
            />ファイルを選択
          </label>
          <br>
          <button v-if="file !== ''" class="text-white bg-blue-800 p-2 m-2 cursor-pointer" @click="uploadImage">アップロード</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  middleware: ['checkIsAdmin'],
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
      confirmedImage: '',
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
  },
}
</script>