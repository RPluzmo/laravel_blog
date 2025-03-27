<x-layout>
    <x-slot:title>
        Visi bloga ieraksti
    </x-slot:title>
    <h1>Visi bloga ieraksti</h1>
        <ul>
            <li>
                @foreach ($blogs as $blog)
                    <a class="content-text" href="/blogs/{{ $blog->id }}">{{ $blog->content }}</a></li>
                @endforeach
            </li>
        </ul>
  </x-layout>