<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>

  @foreach ($posts as $post)

  <article class="py-8 border-b border-[#e3e3e0]">

    <a href="/posts/{{$post['slug']}}" class="hover:underline">
  <h2> {{$post['title']}}</h2>
   </a>

    <p>
    {{ Str::limit($post['body'], 50, '...')}}</p>
    <a href="/posts/{{$post['slug']}}">readmore &raquo;</a>
  </article>
  @endforeach
</x-layout> 