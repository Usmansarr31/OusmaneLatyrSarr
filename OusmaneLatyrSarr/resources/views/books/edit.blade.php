@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Donner votre avis</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h2 class="text-xl font-semibold mb-4">{{ $book->titre }}</h2>


        <div class="mb-4">
            <label for="avis" class="block text-sm font-medium text-gray-700">Avis</label>
            <textarea name="avis" id="avis" rows="4" class="mt-1 block w-full border px-3 py-2 rounded">{{ $book->avis }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Enregistrer
        </button>
    </form>
@endsection
