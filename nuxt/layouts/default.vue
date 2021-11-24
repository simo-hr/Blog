<template>
  <div class="relative min-h-screen">
    <Header class="mb-10 sticky top-0 z-30" />
    <div class="container mx-auto flex flex-col sm:flex-row">
      <Nuxt class="box-border pb-10" />
      <Aside class="box-border" />
    </div>
    <Footer class="absolute w-full bottom-0" />
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