import axios from '../utils/axios';
import Lancamento from '../models/Lancamento'

export default class LancamentoController {
    /**
     * 
     * @param {number} id 
     * @returns {Promise<void>}
     */
    atualizar = async (id) => {
        const lancamento = this.obterLancamento();
        await axios.put(`/${id}`, lancamento).then((response) => {
            console.log(response);
            window.location.href = '/';
        }).catch((error) => {
            alert(`A requisição falhou: ${error}`);
        });
    }

    /**
     * 
     * @param {number} id 
     * @returns {Promise<void>}
     */
    excluir = async (id) => {
        await axios.delete(`/${id}`).then((response) => {
            console.log(response);
            window.location.href = '/';
        }).catch((error) => {
            alert(`A requisição falhou: ${error}`);
        });
    }
    
    /**
     * @returns {Promise<void>}
     */
    inserir = async () => {
        const lancamento = this.obterLancamento();
        await axios.post('/', lancamento).then((response) => {
            console.log(response);
            window.location.href = '/';
        }).catch((error) => {
            alert(`A requisição falhou: ${error}`);
        });
    }

    /**
     * @returns {Lancamento}
     * @private
     */
    obterLancamento() {        
        const item = document.getElementById('item').value;
        const preco = document.getElementById('preco').value;
        const data = document.getElementById('data').value;
        const genero = document.getElementById('genero').value;
        const e_provento = document.getElementById('e_provento').value;
        const lancamento = new Lancamento(item, preco, data, genero, e_provento);
        return lancamento;
    }
}