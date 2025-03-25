<x-layout>
  <x-slot:title>
    {{ $blog->content }}
  </x-slot:title>
    <h1>{{ $blog->content }}</h1>
    <a href="/blogs/{{$blog->id}}/edit">Rediģēt ierakstu</a>
      <p>Kategorija ir: {{ $blog->category ? $blog->category->category_name : 'Nav kategorijas' }}</p>
    <form action="/blogs/{{ $blog->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Dzēst</button>
  </form>
</x-layout>