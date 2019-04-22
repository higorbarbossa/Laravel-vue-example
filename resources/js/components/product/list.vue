<template>
  <k-content>
    <div class="card-body">
      <div class="row justify-content-center">
        <div class="card" style="width: 18rem;" v-for="produto in produtos" :key="produto.id">
          <img src="" class="card-img-top" alt="...">

          <div class="card-body">
            <h5 class="card-title">{{produto.name}}</h5>

            <p class="card-text">{{ produto.description }}</p>


            <router-link :to="pathEdit + produto.id" ><button class="btn btn-primary">Editar</button></router-link>
            <button class="btn btn-danger" @click="deleteProduct(produto.id)">Delete</button>
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
    "k-content": Content,

  },

  data() {
    return {
      produtos: [],
      pathEdit: "/vue/product/edit/"
    };
  },
  methods: {
    getProducts() {
      this.axios
        .get("/products")
        .then(result => {
          this.produtos = result.data.data;
          console.log(this.produtos);
        })
        .catch(e => {
          console.log(e);
        });
    },
    deleteProduct(id) {
      this.axios
        .delete("/products/" + id)
        .then(result => {
          console.log(this.produtos.splice(this.produtos.indexOf(id)));
          this.getBrands();
        })
        .catch(e => {
          console.log(e);
        });
    }
  },
  created() {
    this.getProducts();
  }
};
</script>
