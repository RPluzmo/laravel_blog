<x-layout>
    <x-slot:title>
        {{ $blog->title }}
    </x-slot:title>
    <h2>Virsraksts:</h2>
        <h3>{{ $blog->title }}</h3>
    <h2>Bloga ierkasts:</h2>
        <h3 class="content-text">{{ $blog->content }}</h3>
    <a href="/blogs/{{$blog->id}}/edit">Rediģēt ierakstu</a>
        <p>Kategorija: {{ $blog->category ? $blog->category->category_name : 'Nav kategorijas' }}</p>
        <form action="/blogs/{{ $blog->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Dzēst ierakstu</button>
        </form>
        <form action="{{ route('blogs.comments.store', $blog->id) }}" method="POST">
            @csrf
                <ul>    
                    <li>
                        <p>Pievienot komentāru: </p>
                        <p>Autors:</p>
                            <input name="author" value="{{ old('author') }}"/>
                                @error("author")
                                    <p >{{ $message }}</p>
                                @enderror    
                    </li>
                    <li>
                        <p>Komentārs:</p>
                            <textarea name="comment" id="comment"></textarea>
                                @error("comment")
                                    <p >{{ $message }}</p>
                                @enderror
                            <button >Pievienot</button>      
                    </li> 
                </ul>
        </form>
            @csrf
                <ul>
                    <li>
                    <h2>Komentāri: </h2>
                        @foreach ($blog->comments as $comment)
                                <h3> Autors:{{ $comment->author }}</h3>
                                <p>{{ $comment->comment }}</p>
                        @endforeach
                    </li>
                </ul>
</x-layout>
    