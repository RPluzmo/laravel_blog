<x-layout>
    <x-slot:title>
        Izveidot kategoriju
    </x-slot:title>
    <h1>Izveidot kategoriju</h1>
    <form action="/categories" method="POST">
        @csrf
        <ul>
            <li>
                <label>Izveio blogam kategoriju
                    <input name="category_name" value="{{ old('content') }}"/>
                        @error("category_name")
                            <p>{{ $message }}</p>
                        @enderror
                </label>
                <button>Saglabāt</button>
            </li>
        </ul>
        </form>
  </x-layout>
