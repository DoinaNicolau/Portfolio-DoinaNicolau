# Portfolio Personale di Doina Nicolau

<p align="center">
  <!-- Sostituisci questa immagine con uno screenshot del tuo sito quando sarà online, o usa un banner personalizzato -->
  <img src="https://i.imgur.com/GZ0Qy3d.png" alt="Portfolio Banner" width="700"/>
</p>

Questo repository ospita il codice sorgente del mio portfolio personale, un'applicazione web single-page costruita per presentare le mie competenze, i miei progetti e la mia passione per lo sviluppo. L'intero progetto è stato sviluppato utilizzando **Laravel 12** per il backend e **SCSS/JavaScript** per un frontend moderno e reattivo.

L'applicazione non è solo una vetrina, ma una dimostrazione pratica delle mie capacità di creare soluzioni web complete, dalla progettazione dell'interfaccia alla logica di backend.

---

## ✨ Features Principali

*   **Design Moderno e Reattivo:** Interfaccia utente pulita e ispirata a stili "tech", completamente responsive per desktop, tablet e mobile.
*   **Single-Page Experience:** Navigazione fluida tra le sezioni senza ricaricare la pagina, grazie a JavaScript e all'effetto "smooth scroll".
*   **Form di Contatto Funzionante:** Un endpoint backend sicuro costruito con Laravel che valida l'input dell'utente e invia notifiche email.
*   **Download CV:** Funzionalità integrata per permettere ai visitatori di scaricare facilmente il mio curriculum vitae.
*   **Codice Organizzato:** Aderenza alle migliori pratiche di Laravel, con l'uso di Controller, Componenti Blade per la modularità e una struttura SCSS ben organizzata.

---

## 🛠️ Stack Tecnologico e Strumenti

*   **Backend:** Laravel 12 (con PHP 8.3)
*   **Frontend:** Blade, SCSS (Sass), Vite, JavaScript (ES6)
*   **Ambiente di Sviluppo Locale:** [ Laravel]
*   **Servizi Esterni:**
    *   **Mailtrap:** Utilizzato per il testing delle email in ambiente di sviluppo.

---

## 🚦 Guida all'Installazione Locale

Per clonare ed eseguire questo progetto sul tuo computer, segui questi passaggi:

1.  **Clona il repository:**
    ```bash
    git clone https://github.com/TUO_USERNAME/NOME_REPOSITORY.git
    cd NOME_REPOSITORY
    ```

2.  **Installa le dipendenze di Composer e NPM:**
    ```bash
    composer install
    npm install
    ```

3.  **Configura il file di ambiente:**
    ```bash
    cp .env.example .env
    ```
    *Successivamente, genera la chiave dell'applicazione:*
    ```bash
    php artisan key:generate
    ```

4.  **Configura le tue variabili d'ambiente:**
    Apri il file `.env` e imposta le credenziali per il tuo database (`DB_*`) e per il tuo mailer (`MAIL_*`).

5.  **Avvia i server di sviluppo:**
    *   In un terminale, avvia Vite per la compilazione degli asset:
        ```bash
        npm run dev
        ```
    *   In un secondo terminale, avvia il server di Laravel:
        ```bash
        php artisan serve
        ```

Il sito sarà ora visibile su `http://127.0.0.1:8000`.

---

## 🏛️ Architettura e Decisioni di Progetto

Una breve panoramica di come è organizzato il codice:

*   **Routing (`routes/web.php`):** Contiene due rotte:
    1.  `GET /`: Gestita da `PublicController@homepage`, mostra la pagina principale.
    2.  `POST /contact`: Gestita da `PublicController@submitContact`, processa i dati del form.
*   **Controller (`app/Http/Controllers/PublicController.php`):** Un unico controller per gestire tutta la logica pubblica del sito, inclusa la validazione del form e l'invocazione del Mailable.
*   **Mail (`app/Mail/ContactFormMail.php`):** Una classe Mailable dedicata, che utilizza la sintassi moderna di Laravel per definire l'invio dell'email di notifica.
*   **Viste (`resources/views`):**
    *   `layouts/app.blade.php`: Il layout principale dell'applicazione, che sfrutta gli **slot** (`$slot`) per una maggiore pulizia e modularità.
    *   `components/navbar.blade.php`: Il componente riutilizzabile per la barra di navigazione.
    *   `welcome.blade.php`: La vista che contiene tutte le sezioni della single-page e che viene "avvolta" dal componente di layout.
*   **Stili (`resources/scss`):** L'SCSS è suddiviso in "partials" per ogni componente o sezione (es. `_hero.scss`, `_projects.scss`, `_header.scss`), tutti gestiti e importati da `app.scss`.

---

## 📜 Licenza

Questo progetto è un software open-source ma è inteso come portfolio personale. Sentiti libero di usarlo come ispirazione, ma ti chiedo gentilmente di non ripubblicarlo come tuo. Il codice del framework Laravel sottostante è licenziato sotto la [licenza MIT](https://opensource.org/licenses/MIT).