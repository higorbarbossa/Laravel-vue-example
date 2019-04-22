<template>
  <k-content titulo="Formulario">
    <div class="card-body">
      <form @submit.prevent="updateBrand()">
        <div class="form-group">
          <label for="nameBrand">Nome da Marca</label>
          <input
            v-model="brand.name"
            type="text"
            class="form-control"
            id="nameBrand"
            placeholder="Nome da Marca"
          >
        </div>

        <div class="form-group">
          <label for="desc">Descrição</label>
          <input
            v-model="brand.description"
            type="text"
            class="form-control"
            id="desc"
            placeholder="Descrição"
          >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </k-content>
</template>

<script>
import Content from "../shared/Content.vue";

export default {
  props: ["titulo"],
  components: {
    "k-content": Content
  },

  data() {
    return {
      brand: {}
    };
  },
  methods: {
    updateBrand() {
      let uri = "/brands/ " + this.$route.params.id;
      this.axios
        .patch(uri, this.brand)
        .then(response => {
          alert(response.data);
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  },
  created() {
    this.axios
      .get("/brands/" + this.$route.params.id)
      .then(result => {
          this.brand = {
              name : result.data.data.name,
              description : result.data.data.description
          }
        console.log(this.brand);
      })
      .catch(e => {
        console.log(e);
      });
  }
};
</script>
