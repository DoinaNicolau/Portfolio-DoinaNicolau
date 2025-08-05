<p align="center">
<img src="https://i.imgur.com/GZ0Qy3d.png" alt="Portfolio Banner" width="600"/>
</p>
Questo repository contiene il codice sorgente del mio portfolio personale, sviluppato con Laravel 12 e stilizzato con SCSS per un design moderno e reattivo.
Il progetto segue una filosofia di "sviluppo come campagna", dove ogni fase è stata pianificata per raggiungere l'obiettivo di creare una vetrina professionale per le mie competenze.
🚀 Obiettivi del Progetto (Campaign Objectives)
Creare un'identità digitale: Presentare le mie competenze e i miei progetti in modo professionale e visivamente d'impatto.
Dimostrare competenza tecnica: Utilizzare uno stack tecnologico moderno e implementare funzionalità backend complesse come l'invio di email transazionali.
Attirare opportunità professionali: Funzionare come punto di contatto primario per recruiter e potenziali datori di lavoro, offrendo strumenti interattivi.
✨ Funzionalità Principali (Key Features)
Modulo di Contatto Funzionante: Un form di contatto che invia le richieste direttamente a un indirizzo email personale.
Condivisione CV via Email: Una feature che permette a un visitatore (es. un recruiter) di inserire il proprio indirizzo email per ricevere automaticamente i miei CV (in italiano e in inglese) come allegati PDF.
Design Reattivo: Interfaccia utente completamente reattiva grazie a SCSS, per una visualizzazione ottimale su desktop, tablet e mobile.
🛠️ Stack Tecnologico
Backend: Laravel 12
Frontend: Blade, SCSS (Sass), Vite
Database: MySQL
Servizi Esterni: MailerSend per la gestione e l'invio di email transazionali via SMTP.
Ambiente di Sviluppo: Windows (Laragon / XAMPP / etc.)
🚦 Guida all'Installazione Locale
Per eseguire questo progetto in locale, segui questi passaggi:
Clona il repository:
Generated bash
git clone https://github.com/tuo-username/tuo-repository.git
cd tuo-repository
Use code with caution.
Bash
Installa le dipendenze di Composer:
Generated bash
composer install
Use code with caution.
Bash
Crea e configura il file .env:
Copia il file di esempio e genera la chiave dell'applicazione.
Generated bash
cp .env.example .env
php artisan key:generate
Use code with caution.
Bash
Successivamente, apri il file .env e configura le seguenti sezioni:
Database:
Generated dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_del_tuo_database
DB_USERNAME=root
DB_PASSWORD=
Use code with caution.
Dotenv
Mailer (MailerSend SMTP):
Generated dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailersend.net
MAIL_PORT=587
MAIL_USERNAME="il_tuo_username_smtp_da_mailersend"
MAIL_PASSWORD="la_tua_password_smtp_da_mailersend"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="la_tua_email_verificata@tuo_dominio.com"
MAIL_FROM_NAME="Il Tuo Nome"
Use code with caution.
Dotenv
Esegui le migrazioni del database:
Questo creerà le tabelle necessarie (es. per le sessioni).
Generated bash
php artisan migrate
Use code with caution.
Bash
Installa le dipendenze di Node.js e compila gli asset:
Generated bash
npm install
npm run dev
Use code with caution.
Bash
Nota: npm run dev avvia il server di sviluppo di Vite. Tienilo in esecuzione in un terminale mentre lavori sul frontend.
Avvia il server di sviluppo di Laravel:
In un nuovo terminale, esegui:
Generated bash
php artisan serve
Use code with caution.
Bash
Ora il sito dovrebbe essere accessibile su http://127.0.0.1:8000.
🎨 Struttura degli Stili (SCSS)
Il progetto utilizza SCSS per una gestione degli stili pulita e modulare. I file principali si trovano in resources/scss/:
app.scss: Il file principale che importa tutti gli altri "partials".
_variables.scss: Contiene tutte le variabili CSS (colori, font, spaziature) per mantenere la coerenza visiva.
_base.scss: Definisce gli stili globali per elementi come body, h1, ecc.
_layout.scss: Contiene le classi per la struttura principale della pagina (es. .container).
Man mano che aggiungeremo componenti, creeremo nuovi partials (es. _hero.scss, _buttons.scss) e li importeremo in app.scss.