<p align="center">
  <img src="https://i.imgur.com/GZ0Qy3d.png" alt="Portfolio Banner" width="600"/>
</p>

Questo repository contiene il codice sorgente del mio portfolio personale, sviluppato con **Laravel 12** e stilizzato con **SCSS** per un design moderno e reattivo.

Il progetto segue una filosofia di "sviluppo come campagna", dove ogni fase è stata pianificata per raggiungere l'obiettivo di creare una vetrina professionale per le mie competenze.

---

## 🚀 Obiettivi del Progetto (Campaign Objectives)

*   **Creare un'identità digitale:** Presentare le mie competenze e i miei progetti in modo professionale e visivamente d'impatto.
*   **Attirare opportunità professionali:** Funzionare come punto di contatto primario per recruiter e potenziali clienti.
*   **Dimostrare competenza tecnica:** Utilizzare un stack tecnologico moderno (Laravel 11, Vite, SCSS) per costruire il sito stesso.

---

## 🛠️ Stack Tecnologico

*   **Backend:** Laravel 11
*   **Frontend:** Blade, SCSS (Sass), Vite
*   **Database:** MySQL (in sviluppo) / PostgreSQL (in produzione)
*   **Ambiente di sviluppo:** [Descrivi il tuo, es. Laravel Herd, Laragon, Docker]

---

## 🚦 Guida all'Installazione Locale

Per eseguire questo progetto in locale, segui questi passaggi:

1.  **Clona il repository:**
    ```bash
    git clone https://github.com/TUO_USERNAME/TUO_REPOSITORY.git
    cd TUO_REPOSITORY
    ```

2.  **Installa le dipendenze di Composer:**
    ```bash
    composer install
    ```

3.  **Crea il file `.env`:**
    ```bash
    cp .env.example .env
    ```

4.  **Genera la chiave dell'applicazione:**
    ```bash
    php artisan key:generate
    ```

5.  **Installa le dipendenze di Node.js e compila gli asset:**
    ```bash
    npm install
    npm run dev
    ```
    *Nota: `npm run dev` avvia il server di sviluppo di Vite. Tienilo in esecuzione mentre lavori sul frontend.*

6.  **Avvia il server di sviluppo di Laravel:**
    In un nuovo terminale, esegui:
    ```bash
    php artisan serve
    ```

Ora il sito dovrebbe essere accessibile su `http://127.0.0.1:8000`.

---

## 🎨 Struttura degli Stili (SCSS)

Il progetto utilizza SCSS per una gestione degli stili pulita e modulare. I file principali si trovano in `resources/scss/`:

*   `app.scss`: Il file principale che importa tutti gli altri "partials".
*   `_variables.scss`: Contiene tutte le variabili CSS (colori, font, spaziature) per mantenere la coerenza visiva.
*   `_base.scss`: Definisce gli stili globali per elementi come `body`, `h1`, ecc.
*   `_layout.scss`: Contiene le classi per la struttura principale della pagina (es. `.container`).

Man mano che aggiungeremo componenti, creeremo nuovi partials (es. `_hero.scss`, `_buttons.scss`) e li importeremo in `app.scss`.
