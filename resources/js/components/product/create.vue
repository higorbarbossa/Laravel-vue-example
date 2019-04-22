<template>
  <k-content titulo="Formulario">
    <div class="card-body">
      <form @submit.prevent="createProduct()" enctype="multipart/form-data">
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

        <div class="form-group">
          <label for="img">Imagem</label>
          <input required
            ref="img"
            name="img"
            v-on:change="handleFiles()"
            type="file"
            class="form-control-file"
            id="img"
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
      name: "",
      description: "",
      img: "",
      idBrand: null,
      formData: new FormData(),
      brands: []
    };
  },
  methods: {
    createProduct() {
      this.formData.append("name", this.name);
      this.formData.append("description", this.description);
      this.formData.append("img", this.img);
      this.formData.append("idBrand", this.idBrand);

      let config = {
        headers: { "content-type": "multipart/form-data" }
      };
      let uri = "/products";
      this.axios
        .post(uri, this.formData, config)
        .then(response => {
          console.log(response);
        })
        .catch(function(error) {
          console.log("xxx" + error);
        });
    },
    handleFiles() {
      let uploadedFiles = this.$refs.img.files[0];
      this.img = uploadedFiles;
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
  created(){
      this.getBrands();
  }
};
</script>
