<template>
  <div class="col-md-2">
    <div class="card">
      <div class="card-body">
        <nav class="navbar bg-light">
          <ul class="navbar-nav">
            <li class="nav-item">
              <router-link class="nav-link" to="/vue/brand/create">Cadastrar Marca</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/vue/brand/list">Listar Marcas</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/vue/product/create">Cadastrar Produto</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" to="/vue/product/list">Listar Produtos</router-link>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
export default {};
</script>
