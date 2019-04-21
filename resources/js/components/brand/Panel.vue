<template>

    <k-form/>

</template>

<script>
import Menu from "../shared/menu/Menu.vue";
import Content from "../shared/Content.vue";
import form from "./form.vue";

export default {
  components: {
    "k-menu": Menu,
    "k-form": form,
    "k-content": Content
  }
};
</script>
