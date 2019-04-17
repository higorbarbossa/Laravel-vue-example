<template>
  <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="navbarDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >Brands</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Create</a>
        <a class="dropdown-item" href="#">Read</a>
        <a class="dropdown-item" href="#">Update</a>
        <a class="dropdown-item" href="#">Delete</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">List</a>
      </div>
    </li>
    <!--  -->
    <li class="nav-item dropdown">
      <a
        class="nav-link dropdown-toggle"
        href="#"
        id="navbarDropdown"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >Products</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Create</a>
        <a class="dropdown-item" href="#">Read</a>
        <a class="dropdown-item" href="#">Update</a>
        <a class="dropdown-item" href="#">Delete</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">List</a>
      </div>
    </li>
  </ul>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
