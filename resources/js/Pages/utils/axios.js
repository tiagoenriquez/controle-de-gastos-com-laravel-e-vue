import axios from 'axios';

// Pega o token CSRF da meta tag
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

// Configura o Axios para usar o token CSRF
axios.defaults.headers.common['X-CSRF-TOKEN'] = csrfToken;

export default axios;
