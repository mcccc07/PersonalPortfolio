<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;500;700&family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <header>
        <div class="grid grid-cols-2 gap-36 items-center mt-5 mb-5">
            <h1 class="flex justify-start ml-12 text-3xl font-bold">
                <a href="/">Port<span class="text-blue-500">folio</span></a>
            </h1>
            <div class="flex justify-end mr-12">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    <a href="/home">Get Started</a>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="grid grid-cols-2 gap-32 items-center">
            <div class="ml-12 mt-20">
                <h3 class="text-4xl font-bold font-Inter">Hi! I'm</h3>
                <h2 class="text-5xl font-extrabold mb-2 font-Inter">
                    <span id="typing-text" class="text-blue-600"></span>
                    <span class="animate-pulse text-blue-600">|</span>
                    </h3>
                    <p class="text-3xl font-bold text-gray-600">Full Stack Developer</p>
                    <p class="text-md font-Inter mt-2 p-2">
                        I am a passionate full stack developer with experience in building web applications using modern technologies. I enjoy creating efficient and scalable solutions to solve complex problems. My expertise includes JavaScript, Laravel, Python, and more. I am always eager to learn new technologies and improve my skills to deliver high-quality projects.
                    </p>


                    
            </div>

            <section>
                <div class="relative w-96 h-96 mr-12 ml-10 flex items-center justify-center">
                    <div class="absolute top-0 left-0 w-80 h-80 bg-blue-500 rounded-full z-0"></div>
                    <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-400 rounded-full z-0"></div>
                    <img src="" alt="Developer Image" class="relative z-10 w-full h-full object-contain">
                </div>
            </section>
        </div>
    </main>

    <script>
        const text = "MAC ROBERT SAVANDAL";
        const element = document.getElementById('typing-text');
        let i = 0;
        let isDeleting = false;

        function type() {
            if (!isDeleting && i < text.length) {
                element.textContent += text[i];
                i++;
                setTimeout(type, 100);
            } else if (!isDeleting && i === text.length) {
                setTimeout(() => {
                    isDeleting = true;
                    type();
                }, 2000);
            } else if (isDeleting && i > 0) {
                element.textContent = text.substring(0, i - 1);
                i--;
                setTimeout(type, 50);
            } else if (isDeleting && i === 0) {
                isDeleting = false;
                setTimeout(type, 200);
            }
        }

        type();
    </script>
</body>

</html>