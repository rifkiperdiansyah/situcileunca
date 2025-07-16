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
      <button href="/tiket"
        class="btn-shadow bg-lime-400 px-6 py-2 rounded-md font-semibold hover:bg-lime-500 text-black transition-colors duration-300 focus:ring-4 focus:ring-lime-300"
      >
        Pilih Paket
      </button>
    </div>
  </section>

  <!-- DESTINATION INFORMATION -->
  <section class="max-w-7xl mx-auto py-6 px-6">
    <div class="text-center mb-12 select-text">
      <p class="uppercase font-extrabold text-lg tracking-widest drop-shadow-md">Informasi Destinasi Wisata</p>
      <p class="font-script text-3xl text-sky-600 drop-shadow-sm italic">Situ Cileunca</p>
    </div>

    <!-- Cards carousel with arrows on sides -->
    <div class="relative flex items-center justify-center select-none">
      
      <!-- Left arrow -->
      <button aria-label="Previous" class="absolute left-0 text-4xl text-gray-900 hover:text-sky-600 focus:outline-none focus:ring-4 focus:ring-sky-300 rounded px-2 z-10">
        ⟸ <!-- double left arrow -->
      </button>

      <!-- Cards container -->
      <div class="flex space-x-8 overflow-x-auto scrollbar-hide px-12 snap-x">
        <!-- Card 1 -->
        <div class="min-w-[240px] snap-center bg-white rounded-2xl overflow-hidden card-shadow relative cursor-pointer">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/c3af7785-825b-4c2b-a3ac-4be298b8f013.png"
            alt="Scenic view of sunset over lake with a blue wooden boat on the shore at Situ Cileunca"
            class="w-full h-60 object-cover rounded-t-2xl"
            onerror="this.onerror=null;this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/8d0f3cde-cfe6-49fc-bd94-cf77368096c7.png';"
          />
          <div class="absolute top-4 left-4 text-white drop-shadow-lg font-handwriting text-lg italic space-y-1">
            <p>Keliling Danau</p>
            <p class="font-semibold">Situ Cileunca</p>
          </div>
          <div class="absolute bottom-3 right-3 text-white drop-shadow-lg text-sm font-semibold underline cursor-pointer">More Info</div>
        </div>

        <!-- Card 2 -->
        <div class="min-w-[240px] snap-center bg-white rounded-2xl overflow-hidden card-shadow relative cursor-pointer">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7cc3b2de-78a4-4fef-8c35-c0c5d5110ca4.png"
            alt="Group of people rafting in blue raft on rapid river surrounded by greenery at Sungai Palayangan"
            class="w-full h-60 object-cover rounded-t-2xl"
            onerror="this.onerror=null;this.src='https://placehold.co/240x360?text=Image+Not+Available';"
          />
          <div class="absolute top-4 left-4 text-white drop-shadow-lg font-handwriting text-lg italic space-y-1">
            <p>Rafting</p>
            <p class="font-semibold">Sungai Palayangan</p>
          </div>
          <div class="absolute bottom-3 right-3 text-white drop-shadow-lg text-sm font-semibold underline cursor-pointer">More Info</div>
        </div>

        <!-- Card 3 -->
        <div class="min-w-[240px] snap-center bg-white rounded-2xl overflow-hidden card-shadow relative cursor-pointer">
          <img
            src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/40c1e2e9-2b12-497a-be73-564f71dc8867.png"
            alt="Person wearing helmet and harness on flyingfox zipline over a lake at Situ Cileunca"
            class="w-full h-60 object-cover rounded-t-2xl"
            onerror="this.onerror=null;this.src='https://placehold.co/240x360?text=Image+Not+Available';"
          />
          <div class="absolute top-4 left-4 text-white drop-shadow-lg font-handwriting text-lg italic space-y-1">
            <p>Flyingfox</p>
            <p class="font-semibold">Situ Cileunca</p>
          </div>
          <div class="absolute bottom-3 right-3 text-white drop-shadow-lg text-sm font-semibold underline cursor-pointer">More Info</div>
        </div>
      </div>

      <!-- Right arrow -->
      <button aria-label="Next" class="absolute right-0 text-4xl text-gray-900 hover:text-sky-600 focus:outline-none focus:ring-4 focus:ring-sky-300 rounded px-2 z-10">
        ⟹ <!-- double right arrow -->
      </button>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-sky-300 bg-opacity-80 py-5 mt-5">
    <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center text-white select-text">
      
      <div class="mb-6 md:mb-0 flex flex-col items-center md:items-start">
        <div><img class="size-60" src="../img/logo.png" alt="Your Company" /></div>
      </div>

      <div class="space-y-3 text-center md:text-left font-mono uppercase tracking-widest text-white select-text">
        <p>Hubungi Kami :</p>
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