<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Chewy&family=Great+Vibes&display=swap');

    /* Custom fonts mimicking style in image */
    .font-handwriting {
      font-family: 'Chewy', cursive;
    }
    .font-script {
      font-family: 'Great Vibes', cursive;
    }
    /* Text shadow for black offset glow */
    .text-shadow {
      text-shadow: 2px 2px 2px rgba(0,0,0,0.6);
    }
    /* Button shadow mimicking image */
    .btn-shadow {
      box-shadow: 2px 3px 5px rgba(0,0,0,0.35);
    }
    /* Card shadow */
    .card-shadow {
      box-shadow: 0 8px 12px rgb(0 0 0 / 0.2);
    }

    .nav-link-custom {
      font-weight: 600;
      font-size: 1.05rem;
      cursor: pointer;
      transition: color 0.3s;
    }
    .nav-link-custom:hover {
      color: #2563eb; /* Tailwind blue-600 hover */
    }

    /* Override focus outline to subtle ring */
    button:focus, a:focus {
      outline: none;
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
    }
  </style>
</head>
<body class="bg-white text-gray-900 select-none">


  <!-- HERO SECTION -->
  <section class="relative">
    <img
      src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/743eaf1d-32e0-4bf7-9673-2662e6573e78.png"
      alt="A traditional wooden boat on calm lake water with mountains and cloudy sky in the background at Situ Cileunca Pangalengan"
      class="w-full h-[25rem] object-cover"
      onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/15bfb359-45f5-469f-a439-1cddea0762aa.png';"
    />
    <!-- Text overlay top-left -->
    <div class="absolute top-16 left-16 max-w-lg">
      <p class="text-green-500 font-handwriting text-xl" style="letter-spacing: 0.04em;">Selamat datang di</p>
      <h1 class="text-white font-handwriting text-5xl leading-tight text-shadow -mb-2">SITU CILEUNCA</h1>
      <h2 class="text-white font-handwriting text-4xl leading-tight text-shadow">PANGALENGAN</h2>
    </div>
  </section>


  
  <!-- Call to Action Box -->
  <section class="flex justify-center">
    <div class="bg-blue-300 bg-opacity-100 rounded-lg px-10 py-6 drop-shadow-lg shadow-xl w-fit text-center">
      <p class="font-handwriting text-xl mb-3 text-white drop-shadow-md select-text">Beli Tiket Sekarang Juga</p>
      <x-nav-link href="/tiket">
      <button
        class="btn-shadow bg-lime-400 px-6 py-2 rounded-md font-semibold hover:bg-lime-500 text-black transition-colors duration-300 focus:ring-4 focus:ring-lime-300">
        Pilih Paket
      </button>
      </x-nav-link>
    </div>
  </section>

  <!-- DESTINATION INFORMATION -->

    
      <div class="text-center mb-5 mt-10 select-text">
      <p class="uppercase font-extrabold text-lg tracking-widest drop-shadow-md">Informasi Destinasi Wisata</p>
      <p class="font-script text-3xl text-sky-600 drop-shadow-sm italic">Situ Cileunca</p>
    </div>
<div id="gallery" class="relative w-full text-center h-50 mb-25" data-carousel="static">

    <!-- Carousel wrapper -->

      <div class="pl-10 grid gap-4 relative h-30 overflow-hidden rounded-lg md:h-80">
    <div class="grid grid-cols-4 gap-4 hidden  ease-in-out" data-carousel-item="active">
        <div>
          <a href="">
            <img class="h-auto max-w-full rounded-lg" src="/img/danau.jpg" alt="" >
            <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Danau</p>
            <a href="">More info >></a>
          </a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/rrr.png" alt="">
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Rafting</p>
            <a href="">More info >></a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="/img/fff.png" alt="">
                    <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Flayingfox</p>
            <a href="">More info >></a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/aaa.jpg" alt="">
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">ATV</p>
            <a href="">More info >></a>
        </div>
    </div>
</div>

     <div class="grid gap-4 static h-56 overflow-hidden rounded-lg md:h-96">
    <div class="grid grid-cols-4 gap-4 hidden  ease-in-out" data-carousel-item="">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/ooo.jpg" alt="">
           
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Offroad</p>
            <a href="">More info >></a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/ttt.jpg" alt="">
           
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Team Building</p>
            <a href="">More info >></a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/ppp.png" alt="">
        
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Paint Ball</p>
            <a href="">More info >></a>
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="img/ggg.jpg" alt="">
                    
                        <p class="font-handwriting text-2xl text-sky-600 drop-shadow-sm italic">Fun Games</p>
            <a href="">More info >></a>
        </div>
    </div>
</div>

 <!-- Controls -->
      <button type="button" class="absolute top-1/2 left-0 z-30 flex items-center justify-center h-10 w-10 bg-black/50 rounded-full -translate-y-1/2" data-carousel-prev>
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button type="button" class="absolute top-1/2 right-0 z-30 flex items-center justify-center h-10 w-10 bg-black/50 rounded-full -translate-y-1/2" data-carousel-next>
        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>

    </div>
  
  <!-- FOOTER -->
  <footer class="bg-sky-300 bg-opacity-80 py-5 mt-5">
    <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center text-white select-text">
      
      <div class="mb-6 md:mb-0 flex flex-col items-center md:items-start">
        <div><img class="size-60" src="../img/logo.png" alt="Your Company" /></div>
      </div>

      <div class="space-y-3 text-center md:text-left font-mono uppercase tracking-widest text-white select-text">
        <a href="/">Hubungi Kami :</a>
        <p>+6285869759430</p>
        <p>SituCileuncaOficial</p>
        <p>SituCileuncaOficial</p>
      </div>
    </div>
    <div class="mt-5 text-center text-white text-sm select-text">
      Copyright by SituCileunca 2025 . Allright reserved
    </div>
  </footer>



</x-layout>