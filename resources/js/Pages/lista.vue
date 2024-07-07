<script>
export default {
    methods: {
        editar(event) {
            const id = Number(event.target.id.split('-')[2]);
            window.location.href = `/${id}`;
        },
        excluir(event) {
            const id = Number(event.target.id.split('-')[2]);
            const controller = new LancamentoController();
            controller.excluir(id);
        }
    }
}
</script>

<script setup>
import MenuComponent from './components/MenuComponent.vue';
import LancamentoController from './controllers/LancamentoController';
const props = defineProps({ lancamentos: Object });
</script>

<template>
    <MenuComponent />
    <main>
        <h1>Lista de Gastos</h1>
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Preço</th>
                    <th>Data</th>
                    <th>Gênero</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
            <tbody v-for="lancamento in lancamentos.data" :key="lancamento.id">
                <tr>
                    <td>{{ lancamento.item }}</td>
                    <td>{{ lancamento.preco }}</td>
                    <td>{{ lancamento.data }}</td>
                    <td>{{ lancamento.genero }}</td>
                    <td>
                        <button title="Edição" :id="`botao-edicao-${lancamento.id}`" @click="editar">
                            <img src="./assets/images/caneta2.png" alt="Editar" :id="`imagem-edicao-${lancamento.id}`">
                        </button>
                    </td>
                    <td>
                        <button title="Excluir" :id="`botao-exclusao-${lancamento.id}`" @click="excluir">
                            <img src="./assets/images/lixeira-branca.png" alt="Excluir" :id="`imagem-exclusao-${lancamento.id}`">
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</template>