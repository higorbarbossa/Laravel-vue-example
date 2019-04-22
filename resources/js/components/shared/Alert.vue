<template>
  <div class="alert" :class="classAlert" role="alert">
      {{ message }}
  </div>
</template>

<script>
export default {

  props: ["classAlert","message"],

  }
</script>
