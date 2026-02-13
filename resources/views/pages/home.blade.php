<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen">
    @include('parts.header')
    <main class="container mx-auto mt-8 md:mt-16 px-4 flex-grow">
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 ml-0">
            <div class="p-5 shadow-lg rounded-lg flex items-center justify-center self-start">
                <img src="{{ asset('images/Choso.jpg') }}" alt="Profile Image" class="rounded w-full h-full object-cover max-w-xs max-h-xs">
            </div>
            <div class="md:col-span-2 shadow-lg rounded-lg pt-4 md:pt-6 px-4 md:px-6 pb-4 mr-0 md:mr-12 self-start">
                <h4 class="text-base md:text-xl font-semibold mb-2"> Hi! My name is</h4>
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-3 md:mb-4"> Mac Robert Savandal</h2>
                <p class="text-sm md:text-base text-gray-700 mb-4 md:mb-6 font-light">A passionate full stack developer. I specialize in creating efficient and scalable web applications using modern technologies.</p>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-3 md:mb-4">Tech Stack</h3>
                <div class="flex flex-wrap gap-3 md:gap-6 items-center">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" alt="Laravel" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/python/python-original.svg" alt="Python" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" alt="MySQL" class="w-16 h-16 md:w-20 md:h-20">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/sqlite/sqlite-original.svg" alt="SQLite" class="w-16 h-16 md:w-20 md:h-20">
                </div>
            </div>
        </section>
    </main>

    @include('parts.footer')
</body>

</html>