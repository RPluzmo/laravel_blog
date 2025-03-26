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
        <button>Dzēst ierakstu</button>
      </form>
    <form action="{{ route('blogs.comments.store', $blog->id) }}" method="POST">
      @csrf
      <label for="comment">Pievieno komentu:</label>
      <textarea name="comment" id="comment" required></textarea>
      <button >Pievienot</button>
  </form>
  @foreach ($blog->comments as $comment)
          <p>{{ $comment->comment }}</p>
  @endforeach

</x-layout>