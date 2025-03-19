<x-layout>
  <x-slot:title>
      Visi veicamie uzdevumi
  </x-slot:title>
  <h1>Visi veicamie uzdevumi</h1>
    <ul>
      @foreach ($blogs as $blog)
        <li><a href="/blogs/{{ $blog->id }}">{{ $blog->content }}</a></li>
      @endforeach
    </ul>
  </x-layout>