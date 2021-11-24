const PER_PAGE = 8
const PAGE_NAV_LIST_MAX = 5
const pagination = {
  data() {
    return {
      renderPages: [],
      articlesPerPage: [],
      isSelected: 1,
    }
  },
  mounted() {
    this.articlesPerPage = this.articles.slice(0, PER_PAGE)
    this.initRenderPages()
  },
  methods: {
    initRenderPages() {
      if (this.lastPage >= PAGE_NAV_LIST_MAX) {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map((_, i) => i + 1)
      } else {
        this.renderPages = [...Array(this.lastPage)].map((_, i) => i + 1)
      }
    },
    clickPage(pageNumber) {
      this.isSelected = pageNumber
      this.changeRenderPages(pageNumber)
      window.scroll({
        top: 0,
      })
      this.articlesPerPage = this.articles.slice(
        0 + (pageNumber - 1) * PER_PAGE,
        7 + (pageNumber - 1) * PER_PAGE
      )
    },
    changeRenderPages(pageNumber) {
      if (PAGE_NAV_LIST_MAX >= this.lastPage) {
        this.renderPages = [...Array(this.lastPage)].map((_, i) => i + 1)
        return
      }

      const firstPages = [...Array(floor(PAGE_NAV_LIST_MAX / 2))].map(
        (_, i) => i + 1
      )
      if (firstPages.includes(pageNumber)) {
        this.initRenderPages()
      } else if (
        [this.lastPage - 2, this.lastPage - 1, this.lastPage].includes(
          pageNumber
        )
      ) {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map(
          (_, i) => i + this.lastPage - 4
        )
      } else {
        this.renderPages = [...Array(PAGE_NAV_LIST_MAX)].map(
          (_, i) => i + pageNumber - 2
        )
      }
    },
  },
}

export { PER_PAGE, PAGE_NAV_LIST_MAX, pagination }
