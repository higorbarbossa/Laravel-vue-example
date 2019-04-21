<template>
  <div class="container">
    <div class="row justify-content-center">
      <k-menu/>

      <transition name="pagina">
        <router-view></router-view>
      </transition>
    </div>
  </div>
</template>

<script>
import Menu from "./shared/menu/Menu.vue";

export default {
  components: {
    "k-menu": Menu,
  }
};
</script>

<style>


  .pagina-enter, .pagina-leave-active {
    opacity: 0;
  }

  .pagina-enter-active, .pagina-leave-active {
    transition:  opacity .5s;
  }

</style>
