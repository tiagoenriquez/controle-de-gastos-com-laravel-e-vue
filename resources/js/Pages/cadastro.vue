<script>
import MenuComponent from './components/MenuComponent.vue';
import LancamentoController from './controllers/LancamentoController';

export default {
    components: { MenuComponent },
    methods: {
        inserir() {
            const controller = new LancamentoController();
            controller.inserir();
        }
    }
}
</script>

<template>
    <MenuComponent />
    <main>
        <h1>Cadastro de Lançamento</h1>
        <div class="campo-de-digitacao">
            <label for="item">Item</label>
            <input type="text" name="item" id="item" autofocus required />
        </div>
        <div class="campo-de-digitacao">
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="data">Data</label>
            <input type="date" name="data" id="data" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero" required />
        </div>
        <div class="campo-de-digitacao">
            <label for="e_provento">Gasto?</label>
            <select name="e_provento" id="e_provento">
                <option value="0">Sim</option>
                <option value="1">Não, é provento</option>
            </select>
        </div>
        <button @click="inserir">Inserir</button>
    </main>
</template>