<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>portfolio</title>
</head>
<body class="bg-dark-bg text-gray-200 font-sans ">
  {{-- NUOVO CONTENITORE PER LE SFERE DI SFONDO --}}
    <div class="background-spheres">
        <div class="sphere s1"></div>
        <div class="sphere s2"></div>
        <div class="sphere s3"></div>
        <div class="sphere s4"></div>
    
       {{-- NUOVI CERCHI VUOTI --}}
        <div class="circle c1"></div>
        <div class="circle c2"></div>
        <div class="circle c3"></div>
    </div>
     {{-- Contenitore per le particelle IN PRIMO PIANO --}}
    <div class="foreground-particles">
        <div class="particle p1"></div>
        <div class="particle p2"></div>
        <div class="particle p3"></div>
        <div class="particle p4"></div>
        <div class="particle p5"></div>
        <div class="particle p6"></div>
    </div>
    {{-- COMPONENTE NAVBAR --}}
    <x-navbar />
    
    {{-- NUOVA MODALE PER IL CV (nascosta di default) --}}
    <div id="cv-modal" class="modal-overlay">
        <div class="modal-content">
            <button class="modal-close-btn">×</button>
            
            {{-- Usiamo un <iframe> per mostrare il PDF direttamente nella pagina --}}
        <iframe src="{{ asset('media\CV_Doina_Nicolau_IT_Personalizzato_Circolare.pdf') }}" width="100%" height="100%"></iframe>
            
            <div class="modal-actions">
                <a href="{{ asset('media/CV-Doina-Nicolau-Creativo.pdf') }}" download class="btn btn-primary">Scarica Questa Versione</a>
                <div class="cv-alternative-links">
                    <span>o scarica in formato standard:</span>
                    <a href="{{ asset('media/CV-Doina-Nicolau-Standard-IT.pdf') }}" download>Italiano</a> |
                    <a href="{{ asset('media/CV-Doina-Nicolau-Standard-EN.pdf') }}" download>English</a>
                </div>
            </div>
        </div>
    </div>
      <hr class="modal-divider"> {{-- Aggiungiamo un divisore --}}

    <main>
          {{ $slot }}
    </main>
</body>
</html>