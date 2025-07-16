<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <h3 class="text-xl">Beli Tiket</h3>


  <article class="py-8 border-b border-[#e3e3e0]">

  <h2> {{$post['title']}}</h2>

    <p>
    {{ $post['body']}}</p>
    <a href="/posts"> &laquo; back </a>
  </article>


</x-layout> 
