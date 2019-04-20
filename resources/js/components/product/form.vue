<template>
  <div>
    <div class="form-group">
      <label for="nameBrand">Nome do Produto</label>
      <input
        type="text"
        class="form-control"
        id="nameBrand"
        placeholder="Nome d Produto"
      >

    </div>
    <div class="form-group">
      <label for="desc">Descrição</label>
      <input type="text" class="form-control" id="desc" placeholder="Descrição">
    </div>

    <div class="form-group">
      <label for="image">Imagem</label>
      <input type="file" class="form-control-file" id="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</template>

<script>
export default {};
</script>
