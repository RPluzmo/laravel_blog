<x-layout>
    <x-slot:title>
       Rediģēt blogu
    </x-slot:title>
    <h1>Redidždždžģēt blogu</h1>
    <form action="/blogs/{{ $blog->id }}" method="POST">
        @csrf
        @method('PUT')
        <ul>
            <li>
                <p>Virsraksts: </p>
                <input name="title" type="text" value="{{ old('title', $blog->title) }}">
                    @error("title")
                       <p >{{ $message }}</p>
                    @enderror
            </li>
            <li>
                <p>Saturs:</p>
                <textarea name="content" type="text" rows="5" cols="60">{{ old('content', $blog->content) }}</textarea>
                    @error("content")
                        <p >{{ $message }}</p>
                    @enderror
            </li>
            <li>
                <p>Izvēlies kategoiju  </p>
                <select name="category_id" id="category_id">
                    <option value="">Nav kategorijas</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                </select>
                <button>Saglabāt</button>
            </li>
        </ul>
    </form>
</x-layout>