import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

console.log('app.js chargé par Encore');

document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.basculer');
  const menu = document.getElementById('menu');

  if (!btn || !menu) return;

  const openMenu = () => {
    document.body.classList.add('open');
    btn.setAttribute('aria-expanded', 'true');
    btn.setAttribute('aria-label', 'Fermer le menu');
    menu.hidden = false;
    document.body.style.overflow = 'hidden'; // bloque le scroll derrière
  };

  const closeMenu = () => {
    document.body.classList.remove('open');
    btn.setAttribute('aria-expanded', 'false');
    btn.setAttribute('aria-label', 'Ouvrir le menu');
    // attendre la fin de l’animation pour re-cacher
    setTimeout(() => { if (!document.body.classList.contains('open')) menu.hidden = true; }, 250);
    document.body.style.overflow = '';
  };

  btn.addEventListener('click', () => {
    document.body.classList.contains('open') ? closeMenu() : openMenu();
  });

  // Fermeture au clic sur un lien du menu
  menu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

  // Sync en cas de redimensionnement (repasse en desktop proprement)
  const sync = () => {
    if (window.innerWidth > 1100) {
      menu.hidden = false; // visible en desktop
      document.body.classList.remove('open');
      document.body.style.overflow = '';
    } else if (!document.body.classList.contains('open')) {
      menu.hidden = true; // caché en mobile si non ouvert
    }
  };
  window.addEventListener('resize', sync);
  sync();
});

