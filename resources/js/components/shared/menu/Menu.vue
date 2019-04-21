<template>
  <div class="col-md-2">
    <div class="card">
      <div class="card-body">
        <nav class="navbar bg-light">
          <ul class="navbar-nav">
            <li class="nav-item" v-for="rota in routes" :key="rota.id">
              <router-link class="nav-link" :to="rota.path">{{ rota.name }}</router-link>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</template>

<script>
import { routes } from "../../../routes";
export default {
  data() {
    return {
      routes
    };
  }
};
</script>
