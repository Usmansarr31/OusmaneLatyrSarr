@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Affichage du message de succès -->
        @if (session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <h1 class="text-2xl font-semibold mb-6">Liste des livres</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($books as $book)
                <div class="p-4 border rounded shadow-sm">
                    <h2 class="text-xl font-semibold mb-2">{{ $book->titre }}</h2>
                    
                    <!-- Affichage de l'avis ou de la description -->
                    <p>
                        @if($book->description)
                            {{ $book->description }}
                        @else
                            Aucun avis disponible
                        @endif
                    </p>

                    <div class="mt-4">
                        <a href="{{ route('books.edit', $book->id) }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Modifier l'avis
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
