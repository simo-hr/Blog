<template>
  <header>
    <div class="w-full pr-6 shadow-md relative bg-white">
      <div class="container mx-auto flex">
        <HeaderLogo class="ml-2" />
        <CategoryRow class="ml-auto hidden sm:flex" />
        <HumbergerBotton
          class="ml-auto sm:hidden"
          @mouseover.native="menuFlag = !menuFlag"
        />
        <div
          v-show="menuFlag"
          class="absolute shadow-md bg-white right-2 top-2"
          @mouseleave="menuFlag = !menuFlag"
        >
          <CategoryCol />
        </div>
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
  data() {
    return {
      menuFlag: false,
    }
  },
}
</script>