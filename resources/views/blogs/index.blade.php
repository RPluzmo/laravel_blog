<x-layout>
  <x-slot:title>
    Visi bloga ieraksti
  </x-slot:title>
    <h1>Visi bloga ieraksti</h1>
      <ul>
       @foreach ($blogs as $blog)
          <li><a href="/blogs/{{ $blog->id }}">{{ $blog->content }}</a></li>
       @endforeach
      </ul>
  </x-layout>