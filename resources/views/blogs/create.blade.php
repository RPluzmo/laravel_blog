
<x-layout>
    <x-slot:title>
        Izveidot blogu
    </x-slot:title>
    <h1>Izveidot blogu</h1>
    <form action="/blogs" method="POST">
        <label>
            @csrf
            <input name="content" value="{{ old('content') }}"/>
                @error("content")
                    <p>{{ $message }}</p>
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
