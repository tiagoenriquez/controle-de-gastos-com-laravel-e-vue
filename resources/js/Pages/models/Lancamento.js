export default class Lancamento {
    /**
     * @type {string}
     */
    item;

    /**
     * @type {number}
     */
    preco;

    /**
     * @type {string}
     */
    data;

    /**
     * @type {string}
     */
    genero;

    /**
     * @type {number}
     */
    e_provento;

    /**
     * 
     * @param {string} item 
     * @param {string} preco 
     * @param {string} data 
     * @param {string} genero 
     * @param {number} e_provento 
     */
    constructor(item, preco, data, genero, e_provento) {
        this.item = item;
        this.preco = Number(preco.replace(',', '.'));
        this.data = data;
        this.genero = genero;
        this.e_provento = e_provento;
    }
}