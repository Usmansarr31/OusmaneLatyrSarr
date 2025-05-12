@extends('layouts.app')

@section('title', 'Ajouter un Livre')

@section('content')
<div class="max-w-2xl mx-auto py-8">
    <h2 class="text-2xl font-bold mb-6">Ajouter un livre</h2>

    <form action="{{ route('books.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="title" class="block text-sm font-medium">Titre</label>
            <input type="text" name="titre" id="titre" class="w-full border px-3 py-2 rounded" required>
        </div>

        <div>
            <label for="author" class="block text-sm font-medium">Auteur</label>
            <input type="text" name="author" id="author" class="w-full border px-3 py-2 rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enregistrer
        </button>
    </form>
</div>
@endsection
