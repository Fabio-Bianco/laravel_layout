import 'bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css'; // se vuoi le icone

// Per caricare tutte le immagini e i font nella cartella "images" e "fonts" nella tua build
import.meta.glob(['../images/**', '../fonts/**'], { eager: true });

document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.toggle-details').forEach((btn) => {
    const targetSel = btn.getAttribute('data-bs-target')
    if (!targetSel) return
    const target = document.querySelector(targetSel)
    if (!target) return

    const closedText = btn.getAttribute('data-text-closed') || 'Dettagli'
    const openText = btn.getAttribute('data-text-open') || 'Nascondi dettagli'

    const setText = () => {
      const isOpen = target.classList.contains('show')
      btn.textContent = isOpen ? openText : closedText
      btn.setAttribute('aria-expanded', String(isOpen))
    }

    // stato iniziale
    setText()

    // eventi bootstrap collapse
    target.addEventListener('shown.bs.collapse', setText)
    target.addEventListener('hidden.bs.collapse', setText)
  })
})