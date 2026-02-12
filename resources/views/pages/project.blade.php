<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('parts.header')

    <main class="container mx-auto mt-10 px-4 md:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-4">My Projects</h2>
        <p class="text-gray-700 mb-6">Here are some of the projects I've worked on.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Project 1</h3>
                <p class="text-gray-600">Description of project 1.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Project 2</h3>
                <p class="text-gray-600">Description of project 2.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-xl font-semibent mb-2">Project 3</h3>
                <p class="text-gray-600">Description of project 3.</p>
            </div>
        </div>
    </main>
</body>

</html>