
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Bibliothèque</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-blue-900 text-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">Ma Bibliothèque</h1>
            <nav class="space-x-6">
                <a href="{{ route('books.create') }}" class="hover:underline">Livres</a>
                <a href="#" class="hover:underline">Contact</a>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="hover:underline">Déconnexion</button>
                </form>
            </nav>

        </div>
    </header>

    <!-- Contenu principal -->
            <!-- Contenu principal -->
        <main class="flex-grow py-12 px-6 max-w-5xl mx-auto">
            @yield('content')
        </main>

    <!-- Footer -->
    <footer class="bg-blue-900 text-white text-center py-4 mt-12">
        <p>&copy; {{ date('Y') }} Ma Bibliothèque. Tous droits réservés.</p>
    </footer>

</body>
</html>
