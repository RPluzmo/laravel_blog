<x-layout>
  <x-slot:title>
    {{ $category->category_name }}
  </x-slot:title>
    <h1>{{ $category->category_name }}</h1>
    <a href="/categories/{{$category->id}}/edit">Rediģēt kategoriju</a>
    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Dzēst</button>
  </form>
</x-layout>