<x-layout>
    <x-slot:title>
       Rediģēt blogu
    </x-slot:title>
    <h1>Redidždždžģēt blogu</h1>
    <form action="/blogs/{{ $blog->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>Saturs:
            <input name="content" type="text" value="{{ old('content', $blog->content) }}">
        </label>
        @error("content")
            <p >{{ $message }}</p>
        @enderror
        </label>
        <button>Saglabāt</button>
    </form>
</x-layout>