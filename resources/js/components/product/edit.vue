<template>
  <k-content titulo="Formulario">
    <div class="card-body">
      <form @submit.prevent="updateProduct()" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nameBrand">Nome do Produto</label>
          <input
            v-model="name"
            type="text"
            class="form-control"
            id="nameBrand"
            placeholder="Nome d Produto"
            required
          >
        </div>
        <div class="form-group">
          <label for="desc">Descrição</label>
          <input
            v-model="description"
            type="text"
            class="form-control"
            id="desc"
            placeholder="Descrição"
            required
          >
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Marca</label>
          <select v-model="idBrand" class="form-control" id="exampleFormControlSelect1" required>
            <option></option>
            <option v-for="brand in brands" v-bind:value="brand.id" :key="brand.id">{{brand.name}}</option>
          </select>
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
      name: "",
      description: "",

      idBrand: null,

      produto: {},
      brands: []
    };
  },
  methods: {
    updateProduct() {

      this.produto = {
          name : this.name,
          description : this.description,
          brand_id : this.idBrand,
      }

      let uri = "/products/ " + this.$route.params.id;

      this.axios
        .patch(uri, this.produto)
        .then(response => {
          console.log(response);
        })
        .catch(function(error) {
          console.log("xxx" + error);
        });
    },
    getProduct() {
      this.axios
        .get("/products/" + this.$route.params.id)
        .then(result => {
          this.name = result.data.data.name;
          this.description = result.data.data.description;
          this.idBrand = result.data.data.brand_id;
          alert(response.data);
        })
        .catch(e => {
          console.log(e);
        });
    },
    getBrands() {
      this.axios
        .get("/brands")
        .then(result => {
          this.brands = result.data.data;
          console.log(this.brands);
        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  created() {
    this.getProduct();
    this.getBrands();
  }
};
</script>
