<x-layout>
    <x-slot:title>
        Visi kategoriju ieraksti
    </x-slot:title>
    <h1>Visi kategoriju ieraksti</h1>
        <ul>
            <li>
                @foreach ($categories as $category)
                    <a href="/categories/{{ $category->id }}">{{ $category->category_name }}</a></li>
                @endforeach
            </li>
      </ul>
  </x-layout>