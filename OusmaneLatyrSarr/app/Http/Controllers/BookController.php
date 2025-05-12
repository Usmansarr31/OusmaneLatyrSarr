<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    //
    public function index()
{
    $books = Book::all();
    return view('books.index', compact('books'));
}

// Affiche le formulaire
public function create()
{
    return view('books.create');
}

// Enregistre un nouveau livre
public function store(Request $request)
{
    $validated = $request->validate([
        'titre' => 'required|string|max:255',
        'author' => 'required|string|max:255',
    ]);

    Book::create($validated);

    return redirect()->route('books.index')->with('success', 'Livre ajouté avec succès.');
}

// Supprime un livre
public function destroy(Book $book)
{
    $book->delete();

    return redirect()->route('books.index')->with('success', 'Livre supprimé.');
}

public function edit($id)
{
    $book = Book::findOrFail($id);
    return view('books.edit', compact('book'));
}

public function update(Request $request, $id)
{
    // Récupérer le livre par son ID
    $book = Book::findOrFail($id);

    // Mettre à jour l'avis
    $book->description = $request->input('avis');
    $book->save();

    // Rediriger vers la page d'index avec un message de succès
    return redirect()->route('books.index')->with('success', 'Avis mis à jour avec succès !');
}



    
}
