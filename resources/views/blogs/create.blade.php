
<x-layout>
    <x-slot:title>
        Izveidot blogu
    </x-slot:title>
    <h1>Izveidot blogu</h1>
    <form action="/blogs" method="POST">
        @csrf
            <ul>
                <li>           
                    <p>Bloga virsraksts :</p>
                        <input name="title" value="{{ old('title') }}"/>
                            @error("title")
                                <p>{{ $message }}</p>
                            @enderror
                </li>
                <li>
                    <p>Bloga saturs: </p>
                        @csrf
                        <textarea name="content">{{ old('content', $blog->content ?? '') }}</textarea>
                        @error("content")
                           <p>{{ $message }}</p>
                        @enderror
                </li>
                <li>
                    <p>Izvēlies kategoiju</p>
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
