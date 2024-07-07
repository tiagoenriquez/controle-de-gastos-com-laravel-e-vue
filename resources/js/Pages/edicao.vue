<script>
import LancamentoController from './controllers/LancamentoController';

export default {
    components: { MenuComponent },
    methods: {
        atualizar() {
            const controller = new LancamentoController();
            controller.atualizar(this.lancamento.id);
        }
    }
}
</script>

<script setup>
import MenuComponent from './components/MenuComponent.vue';
const props = defineProps({ lancamento: Object });
</script>

<template>
    <MenuComponent />
    <main>
        <h1>Edição de Lançamento</h1>
        <div class="campo-de-digitacao">
            <label for="item">Item</label>
            <input type="text" name="item" id="item" :value="lancamento.item" autofocus required />
        </div>
        <div class="campo-de-digitacao">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" :value="lancamento.preco" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" :value="lancamento.data" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero" :value="lancamento.genero" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="e_provento">Gasto?</label>
            <select name="e_provento" id="e_provento" :value="lancamento.e_provento">
                <option value="0">Sim</option>
                <option value="1">Não, é provento</option>
            </select>
        </div>
        <button @click="atualizar">Atualizar</button>
    </main>
</template>