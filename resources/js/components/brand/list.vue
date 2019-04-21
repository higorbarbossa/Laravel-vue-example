<template>
  <k-content>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="card col-md-3" v-for="marca in marcas" :key="marca.id">
          <div class="card-body">
            <h4 class="card-title">{{ marca.name }}</h4>
            <p class="card-text">{{ marca.description }}.</p>


            <router-link :to="pathEdit + marca.id" ><button class="btn btn-primary">Editar</button></router-link>
            <button class="btn btn-danger" @click="deleteBrand(marca.id)">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </k-content>
</template>

<script>
import Content from "../shared/Content.vue";

export default {
  components: {
    "k-content": Content
  },

  data() {
    return {
      marcas: [],
        pathEdit : '/vue/brand/edit/'
    };
  },
  methods: {
    getBrands() {
      this.axios
        .get("/brands")
        .then(result => {
          this.marcas = result.data.data;
          console.log(this.marcas);
        })
        .catch(e => {
          console.log(e);
        });
    },
    deleteBrand(id) {
      this.axios
        .delete("/brands/" + id)
        .then(result => {

          console.log(this.marcas.splice(this.marcas.indexOf(id)));
            this.getBrands();

        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  created() {
      this.axios
        .get("/brands")
        .then(result => {
          this.marcas = result.data.data;
          console.log(this.marcas);
        })
        .catch(e => {
          console.log(e);
        });
  }
};
</script>
