<x-layout>
    <x-slot:title>
       Rediģēt kategoriju
    </x-slot:title>
    <h1>Redidždždžģēt kategoriju</h1>
    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <label>Saturs:
            <input name="category_name" type="text" value="{{ old('category_name', $category->category_name) }}">
        </label>
        @error("category_name")
            <p >{{ $message }}</p>
        @enderror
        </label>
        <button>Saglabāt</button>
    </form>
</x-layout>