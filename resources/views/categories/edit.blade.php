<x-layout>
    <x-slot:title>
        Rediģēt kategoriju
    </x-slot:title>
    <h1>Redidždždžģēt kategoriju</h1>
    <form action="/categories/{{ $category->id }}" method="POST">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <label>Saturs:
                    <input name="category_name" type="text" value="{{ old('category_name', $category->category_name) }}">
                    @error("category_name")
                        <p >{{ $message }}</p>
                    @enderror
                </label>
                <button>Saglabāt</button>
            </li>
        </ul>
    </form>
</x-layout>