<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bibliothèque - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">

    <header class="bg-blue-900 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Ma Bibliothèque</h1>
            @if (Route::has('login'))
                <nav class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:underline">Tableau de bord</a>
                    @else
                        <a href="{{ route('login') }}" class="hover:underline">Connexion</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="hover:underline">Inscription</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </header>

    <main class="py-20">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold mb-6">Bienvenue à notre bibliothèque numérique</h2>
            <p class="text-lg mb-4">
                Découvrez un large catalogue de livres à emprunter en ligne. Que vous soyez amateur de romans, de science, d’histoire ou de développement personnel, notre bibliothèque a quelque chose pour vous.
            </p>
            <p class="text-lg mb-4">
                Inscrivez-vous gratuitement pour commencer à emprunter des livres en quelques clics. Vous pouvez suivre vos emprunts, consulter les nouveautés, et retrouver vos lectures préférées à tout moment.
            </p>
            <a href="{{ route('register') }}" class="mt-6 inline-block bg-blue-700 text-white px-6 py-3 rounded hover:bg-blue-800">
                Commencer maintenant
            </a>
        </div>
    </main>

    <footer class="bg-blue-900 text-white text-center py-6 mt-12">
        &copy; {{ date('Y') }} Ma Bibliothèque. Tous droits réservés.
    </footer>

</body>
</html>
