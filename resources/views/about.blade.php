<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class=" place-self-center lg:col-span-7 text-center">
            <h1 class=" max-w-2xl text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl font-script text-3xl text-sky-500 drop-shadow-sm italic">Situ Cileunca</h1>
             <h1 class=" max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-4xl text-sky-500 drop-shadow-sm italic ">Pangalengan</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-800 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                Situ Cileunca Berlokasi di Desa Warnasari, Kecamatan Pangalengan, Ka. Bandung, Provinsi
                Jawa Barat, Indonesia. Situ Cileunca dibangun oleh pemerintah Belanda pada tahun 1919 sampai
                dengan 1926. Selama 7 tahun masa pembangunan Situ Cileunca. Situ Cileunca merupakan danau
                buatan yang dimanfaatkan untuk pembangkit listrik tenaga air (PLTA).</p>
        </div>
        <div class="hidden pl-15 lg:mt-0 lg:col-span-5 lg:flex">
            <img class="size-80" src="/img/logo.png" alt="">
        </div>                
    </div>
</section>





<section class="bg-white antialiased dark:bg-gray-900 ">
  <div class="mx-auto px-4 2xl:px-0">
    <div class="mx-auto max-w-5xl">
      <h2 class=" text-center    text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">selengkapnya</h2>
      <div class="my-8 xl:mb-16 xl:mt-12">
        <img class="w-max mx-auto dark:hidden" src="/img/danau.jpg" alt="" />
      </div>
      <div class="mx-auto max-w-2xl space-y-6">

          <p>
            Transformasi Situ Cileunca dari danau buatan untuk irigasi menjadi destinasi wisata populer di Pangalengan merupakan hasil dari serangkaian perubahan
             dan pengembangan yang dilakukan seiring berjalannya waktu. Keindahan alam di sekitar danau, dengan pemandangan yang menawan dan suasana yang sejuk, 
             menjadi daya tarik utama bagi wisatawan dalam dan luar negeri. Pemerintah dan komunitas lokal memainkan peran penting dalam mengembangkan dan mempromosikan 
             Situ Cileunca sebagai tujuan wisata.


          </p>
          <p>

            Fasilias wisata mulai dibangun, termasuk area berkemah yang nyaman selain itu, kegiatan perahu di danau menjadi salah satu daya tarik utama,
              menawarkan pengalaman berbeda bagi pengunjung yang ingin menjelajahi danau. Berbagai aktivitas wisata yang dapat dinikmati di Situ Cileunca 
              antara lain 
              <span class="font-semibold text-gray-900 dark:text-white"> Offroad Landrover ,Arum Jeram, Fun Games, Paintball, Flying Fox, Lake Tour. </span>
          </p>
    </div>
  </div>
</section>




<div id="gallery" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/danau.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="/img/ooo.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/rr.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/ppp.png" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/ggg.jpg" class="absolute block max-w-full h-auto -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="">
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-gray-800/60 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-gray-800/60 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-black dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>


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