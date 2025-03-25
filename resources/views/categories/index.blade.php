<x-layout>
  <x-slot:title>
    Visi kategoriju ieraksti
  </x-slot:title>
    <h1>Visi kategoriju ieraksti</h1>
      <ul>
       @foreach ($categories as $category)
          <li><a href="/categories/{{ $category->id }}">{{ $category->category_name }}</a></li>
       @endforeach
      </ul>
  </x-layout>