// Aspetta che l'intero documento HTML sia stato caricato e analizzato
document.addEventListener('DOMContentLoaded', function() {

    // TUTTO IL TUO CODICE PER LA NAVBAR VA QUI DENTRO
    
    // Esempio: codice per aggiungere una classe allo scroll
    const header = document.querySelector('.main-header');

    // Aggiungiamo un controllo per sicurezza: se la navbar non esiste, non fare nulla
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }


    // Logica per il menu hamburger
    const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileNavToggle && navMenu) {
        mobileNavToggle.addEventListener('click', () => {
            const isOpened = navMenu.classList.toggle('active');
            mobileNavToggle.setAttribute('aria-expanded', isOpened);
        });
    }

     // 1. Seleziona tutti gli elementi con la classe 'fade-in-section'
    const sectionsToAnimate = document.querySelectorAll('.fade-in-section');

    // 2. Se non ci sono elementi, non fare nulla 
    if (sectionsToAnimate.length > 0) {
        
        // 3. Crea "osservatore"
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                
                if (entry.isIntersecting) {
                 
                    entry.target.classList.add('is-visible');
                    
                    observer.unobserve(entry.target);
                }
            });
        }, {
       
            rootMargin: '0px 0px -50px 0px',
           
        });

        // 4. Dice all'observer di iniziare a "guardare" ogni sezione
        sectionsToAnimate.forEach(section => {
            observer.observe(section);
        });
    }

        // --- LOGICA PER LA MODALE DEL CV ---
    const openModalBtn = document.getElementById('open-cv-modal-btn');
    const cvModal = document.getElementById('cv-modal');
    const closeModalBtn = cvModal.querySelector('.modal-close-btn');

    if (openModalBtn && cvModal && closeModalBtn) {
        
        // Apre la modale
        openModalBtn.addEventListener('click', () => {
            cvModal.classList.add('active');
        });

        // Chiude la modale con il pulsante X
        closeModalBtn.addEventListener('click', () => {
            cvModal.classList.remove('active');
        });

        // Chiude la modale cliccando sullo sfondo (overlay)
        cvModal.addEventListener('click', (event) => {
            if (event.target === cvModal) {
                cvModal.classList.remove('active');
            }
        });
    }

}); // Fine dell'evento DOMContentLoaded
