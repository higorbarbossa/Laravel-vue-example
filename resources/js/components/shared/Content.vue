<template>
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">{{ titulo }}</div>

      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: ["titulo"],
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
