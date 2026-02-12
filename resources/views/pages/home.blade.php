<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('parts.header')
    <main class="container mx-auto mt-16 px-4">
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 ml-0">
            <div class="h-auto p-4 shadow-lg rounded-lg flex items-center justify-center">
                <img src="{{ asset('images/profile.jpg') }}" alt="Profile Image" class="rounded w-full h-full object-cover max-w-xs">
            </div>
            <div class="md:col-span-2 h-auto shadow-lg rounded-lg p-6 mr-0 md:mr-12">
                <h2 class="text-3xl font-bold mb-4">Welcome to My Portfolio</h2>
                <p class="text-gray-700 mb-6">Hi! I'm Mac Robert Savandal, a passionate full stack developer. I specialize in creating efficient and scalable web applications using modern technologies. With experience in JavaScript, Laravel, Python, and more, I am dedicated to delivering high-quality projects that solve complex problems. Feel free to explore my work and get in touch!</p>
            </div>
        </section>
    </main>
</body>

</html>