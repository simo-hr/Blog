<template>
  <div>
    <Header class="mb-10 mr-4 sticky top-0 z-10 bg-white" />
    <div
      class="flex flex-col pb-5 sm:flex-row mx-1 sm:mx-2 md:mx-5 lg:mx-7 xl:mx-10"
    >
      <Nuxt class="box-border" />
      <Aside class="box-border" />
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from '@/components/layouts/Header'
import Aside from '@/components/layouts/Aside'
import Footer from '@/components/layouts/Footer'
export default {
  components: {
    Header,
    Aside,
    Footer,
  },
}
</script>