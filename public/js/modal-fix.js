// public/assets/js/modal-fix.js
(function() {
    'use strict';

    function forceCleanModals() {
        // 1. D'abord retirer le focus de TOUS les éléments dans les modales
        document.querySelectorAll('.modal').forEach(modal => {
            const focusedElements = modal.querySelectorAll(':focus');
            focusedElements.forEach(el => {
                el.blur();
                el.removeAttribute('tabindex');
            });
        });

        // 2. Déplacer le focus vers le body
        if (document.activeElement && document.activeElement.closest('.modal')) {
            document.body.focus();
        }

        // 3. Supprimer les backdrops
        document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
            backdrop.remove();
        });

        // 4. Fermer les modales SANS aria-hidden d'abord
        document.querySelectorAll('.modal').forEach(modal => {
            modal.style.display = 'none';
            modal.classList.remove('show');
            modal.removeAttribute('aria-hidden'); // Retirer complètement
        });

        // 5. Restaurer le body
        document.body.classList.remove('modal-open');
        document.body.style.cssText = ''; // Reset complet des styles

        // 6. Remettre aria-hidden après un délai
        setTimeout(() => {
            document.querySelectorAll('.modal').forEach(modal => {
                if (!modal.classList.contains('show')) {
                    modal.setAttribute('aria-hidden', 'true');
                }
            });
        }, 100);
    }

    // Correction spécifique pour les boutons de fermeture
    function setupModalCloseButtons() {
        document.querySelectorAll('[data-bs-dismiss="modal"]').forEach(button => {
            button.addEventListener('click', function(e) {
                // Retirer immédiatement le focus
                this.blur();
                this.removeAttribute('tabindex');

                // Trouver la modal parente
                const modal = this.closest('.modal');
                if (modal) {
                    // Retirer aria-hidden temporairement
                    modal.removeAttribute('aria-hidden');

                    // Fermer avec Bootstrap
                    const modalInstance = bootstrap.Modal.getInstance(modal);
                    if (modalInstance) {
                        modalInstance.hide();
                    }
                }

                setTimeout(forceCleanModals, 150);
            });
        });
    }

    // Initialisation
    document.addEventListener('DOMContentLoaded', function() {
        setupModalCloseButtons();

        // Observer pour les nouveaux boutons ajoutés dynamiquement
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.addedNodes.length) {
                    setupModalCloseButtons();
                }
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });

        // Gestion des modales
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('hidden.bs.modal', function() {
                setTimeout(forceCleanModals, 50);
            });

            // Avant fermeture
            modal.addEventListener('hide.bs.modal', function() {
                this.removeAttribute('aria-hidden');
            });
        });

        // Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                setTimeout(forceCleanModals, 50);
            }
        });
    });

    // Exposer globalement
    window.forceCleanModals = forceCleanModals;

})();


function closeRentModal() {
    const modal = document.getElementById('rentModal');
    const modalInstance = bootstrap.Modal.getInstance(modal);

    // Retirer le focus
    document.activeElement.blur();

    // Fermer sans aria-hidden d'abord
    modal.removeAttribute('aria-hidden');

    if (modalInstance) {
        modalInstance.hide();
    }

    // Nettoyage complet
    setTimeout(() => {
        document.querySelectorAll('.modal-backdrop').forEach(b => b.remove());
        document.body.classList.remove('modal-open');
        document.body.style.cssText = '';
        modal.setAttribute('aria-hidden', 'true');
    }, 200);
}
