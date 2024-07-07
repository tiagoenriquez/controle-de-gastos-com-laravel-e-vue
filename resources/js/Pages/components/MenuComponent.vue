<script>
export default {
  methods: {
    cadastrar() {
      window.location.href = '/cadastro';
    },
    listar() {
      window.location.href = '/';
    }
  }
}
</script>

<template>
    <nav>
      <button @click="this.cadastrar">Cadastro de Gasto</button>
      <button @click="this.listar">Listas de Gastos</button>
    </nav>
  </template>