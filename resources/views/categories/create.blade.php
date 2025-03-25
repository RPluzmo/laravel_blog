<x-layout>
    <x-slot:title>
        Izveidot kategoriju
    </x-slot:title>
    <h1>Izveidot kategoriju</h1>
    <form action="/categories" method="POST">
        @csrf
        <input name="category_name" value="{{ old('content') }}"/>
            @error("category_name")
                <p>{{ $message }}</p>
            @enderror
        <button>Saglabāt</button>
    </form>
  </x-layout>
