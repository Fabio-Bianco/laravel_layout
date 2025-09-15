import 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css'; // se vuoi le icone

// Per caricare tutte le immagini e i font nella cartella "images" e "fonts" nella tua build
import.meta.glob(['../images/**', '../fonts/**'], { eager: true });