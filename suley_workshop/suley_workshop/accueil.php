<?php
require_once 'header.php';
require_once 'footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 text-gray-800">


    <main class="container mx-auto p-6">
        <section class="bg-white shadow-md rounded p-6">
            <h2 class="text-2xl font-bold mb-4">À propos de nous</h2>
            <p class="text-gray-600">Bienvenue sur notre site. Nous sommes ravis de vous accueillir et de partager notre contenu avec vous.</p>
        </section>

        <section class="mt-6">
            <h2 class="text-xl font-bold mb-4">Nos services</h2>
            <ul class="bg-white shadow-md rounded p-4">
                <li class="text-gray-600 border-b py-2">Service 1</li>
                <li class="text-gray-600 border-b py-2">Service 2</li>
                <li class="text-gray-600 border-b py-2">Service 3</li>
            </ul>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>