import './bootstrap';
import '@fortawesome/fontawesome-free/js/all';
import ClipboardJS from 'clipboard';
import Swal from 'sweetalert2'

window.Swal = Swal;

// or via CommonJS
// const Swal = require('sweetalert2')


new ClipboardJS('.copy-btn');
