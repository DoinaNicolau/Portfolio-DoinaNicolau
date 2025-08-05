<x-layout> 
 

    <section class="hero-section">
        <div class="hero-content">
            <h1 class="hero-title">Doina NICOLAU</h1>
            <p class="hero-subtitle">5G Web Developer</p>
        </div>
        
        
    </section>

 {{-- NUOVA SEZIONE: About Me --}}
    <section id="about" class="about-section fade-in-section">
        <div class="container">
            <h2 class="section-title">Chi Sono</h2>
            <div class="about-content">
                <div class="about-image">
                    {{-- Inserisci qui un'immagine di te.
                         Per ora usiamo un placeholder da un servizio online --}}
                    <img src="https://i.pravatar.cc/300" alt="Foto di [Il Tuo Nome]">
                </div>
                <div class="about-text">
                    <p>
                        Ciao! Sono Doina, una sviluppatrice web creativa con una solida base nel design grafico e 3D. La mia passione è trasformare idee complesse in esperienze digitali eleganti, funzionali e intuitive. Credo fermamente che il codice più efficace sia quello che unisce logica rigorosa e creatività visiva.
                    </p>
                    <p>
                        Il mio obiettivo è avviare la mia carriera come **Junior Web Developer**, mettendo a frutto le mie competenze in **Laravel, PHP e SCSS**. Sono una persona precisa, organizzata e abituata a lavorare sotto pressione, qualità che ho affinato nelle mie precedenti esperienze. Sono entusiasta di poter contribuire a un team dinamico e continuare a crescere come professionista completa nel mondo dello sviluppo web.
                    </p>
                    <div class="about-text">
                        {{-- ... --}}
                        <button id="open-cv-modal-btn" class="btn btn-primary">Visualizza CV</button>
                    </div>
                     <hr class="modal-divider"> {{-- Aggiungiamo un divisore --}}

                        {{-- NUOVO FORM PER INVIARE VIA EMAIL --}}
                        <form action="{{ route('cv.send') }}" method="POST" class="send-cv-form">
                            @csrf
                            <label for="recipient_email">Invia questo CV via email:</label>
                            <div class="send-cv-input-group">
                                <input type="email" name="recipient_email" id="recipient_email" placeholder="Email del destinatario" required>
                                <button type="submit" class="btn btn-secondary">Invia</button>
                            </div>
                        </form>
                        
                        {{-- Link alternativi (se vuoi tenerli) --}}
                        <div class="cv-alternative-links">
                            <span>o scarica in formato standard: ...</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- NUOVA SEZIONE: SKILLS --}}
    <section id="skills" class="skills-section">
        <div class="container">
            <h2 class="section-title">Le Mie Competenze</h2>
            <div class="skills-grid">
                
                <div class="skill-category">
                    <h3>Sviluppo Web</h3>
                    <ul>
                        <li>HTML5 & CSS3</li>
                        <li>SCSS (Sass)</li>
                        <li>JavaScript (ES6)</li>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>SQL (Base)</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Software & Design</h3>
                    <ul>
                        <li>Adobe Photoshop</li>
                        <li>Adobe Illustrator</li>
                        <li>Blender</li>
                        <li>AutoCAD</li>
                        <li>Pacchetto Office</li>
                    </ul>
                </div>

                <div class="skill-category">
                    <h3>Lingue</h3>
                    <ul>
                        <li>Italiano (Madrelingua)</li>
                        <li>Rumeno (Madrelingua)</li>
                        <li>Inglese (Avanzato)</li>
                        <li>Russo (Base)</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    {{-- NUOVA SEZIONE: Projects --}}
    <section id="projects" class="projects-section fade-in-section">
        <div class="container">
            <h2 class="section-title">I Miei Progetti</h2>
            <div class="projects-grid">
                {{-- Esempio di Card Progetto 1 --}}
                <div class="project-card">
                    <div class="project-card-image">
                        <img src="https://via.placeholder.com/400x300.png/fc86e1/1a1919?text=Progetto+Uno" alt="Immagine Progetto Uno">
                    </div>
                    <div class="project-card-content">
                        <h3 class="project-title">Nome Progetto 1</h3>
                        <p>Breve descrizione di questo fantastico progetto che dimostra le mie abilità con Laravel e SCSS.</p>
                        <div class="project-tags">
                            <span class="tag">Laravel</span>
                            <span class="tag">SCSS</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">Vedi Live</a>
                            <a href="#" class="btn-link">Codice Sorgente</a>
                        </div>
                    </div>
                </div>

                {{-- Esempio di Card Progetto 2 --}}
                <div class="project-card">
                    <div class="project-card-image">
                        <img src="https://via.placeholder.com/400x300.png/c26af4/1a1919?text=Progetto+Due" alt="Immagine Progetto Due">
                    </div>
                    <div class="project-card-content">
                        <h3 class="project-title">Nome Progetto 2</h3>
                        <p>Un altro progetto interessante che mette in luce le mie competenze di sviluppo frontend e backend.</p>
                        <div class="project-tags">
                            <span class="tag">PHP</span>
                            <span class="tag">JavaScript</span>
                        </div>
                        <div class="project-links">
                            <a href="#" class="btn-link">Vedi Live</a>
                            <a href="#" class="btn-link">Codice Sorgente</a>
                        </div>
                    </div>
                </div>

                {{-- Aggiungi altre card qui... --}}

            </div>
        </div>
    </section>
    {{-- NUOVA SEZIONE: Contact --}}

@if(session('success'))
    <div class="alert-success">
        {{ session('success') }}
    </div>
@endif

    <section id="contact" class="contact-section fade-in-section">
        <div class="container">
            <h2 class="section-title">Contattami</h2>
            <p class="section-subtitle">Hai un'idea o un progetto in mente? Scrivimi!</p>

            <form action="/contact" method="POST" class="contact-form">
                @csrf {{-- Misura di sicurezza FONDAMENTALE in Laravel --}}

                <div class="form-group">
                    <input type="text" name="name" id="name" placeholder="Il tuo nome" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="La tua email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" rows="6" placeholder="Il tuo messaggio" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Invia Messaggio</button>
            </form>
        </div>
    </section>

    
 </x-layout>