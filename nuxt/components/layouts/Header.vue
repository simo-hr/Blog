<template>
  <header>
    <div class="flex w-screen shadow-md relative">
      <HeaderLogo />
      <CategoryRow class="ml-auto mr-3 h-full hidden sm:flex" />
      <HumbergerBotton
        class="ml-auto mr-3 sm:hidden"
        @mouseover.native="menuFlag = !menuFlag"
      />
      <div v-show="menuFlag" class="absolute shadow-md bg-white right-2 top-2" @mouseleave="menuFlag = !menuFlag">
        <CategoryCol />
      </div>
    </div>
  </header>
</template>

<script>
import CategoryRow from '@/components/objects/category/CategoryRow'
import CategoryCol from '@/components/objects/category/CategoryCol'
import HumbergerBotton from '@/components/parts/HumbergerBotton'
import HeaderLogo from '@/components/parts/HeaderLogo'
export default {
  components: {
    CategoryRow,
    CategoryCol,
    HumbergerBotton,
    HeaderLogo,
  },
  layout: 'Header',
  data() {
    return {
      menuFlag: false,
    }
  },
}
</script>