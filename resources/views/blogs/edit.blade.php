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
        @error("content")
            <p >{{ $message }}</p>
        @enderror
        </label>
        <label>Izvēlies kategoiju
            <select name="category_id" id="category_id">
                <option value="">Nav kategorijas</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </label>
        <button>Saglabāt</button>
    </form>
</x-layout>