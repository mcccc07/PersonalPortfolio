<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Mac Robert Savandal</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('parts.header')

    <main class="container mx-auto mt-8 md:mt-16 px-4 mb-16">

        <section class="max-w-4xl mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-6 md:p-8 mb-8">
                <h2 class="text-3xl font-bold mb-4 text-blue-600">Who I Am</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    Hi! I'm Mac Robert Savandal, a passionate full stack developer dedicated to creating efficient and scalable web applications. I love turning complex problems into simple, beautiful, and intuitive solutions. My goal is to build products that make a difference in people's lives.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    With a strong foundation in both frontend and backend development, I enjoy working on projects that challenge me to learn and grow. I believe in writing clean, maintainable code and staying updated with the latest technologies and best practices.
                </p>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 md:p-8 mb-8">
                <h2 class="text-3xl font-bold mb-4 text-blue-600">Education</h2>

                <div class="border-l-4 border-blue-500 pl-6 mb-6">
                    <h3 class="text-xl font-semibold mb-2">Bachelor of Science in Information Systems</h3>
                    <p class="text-gray-600 mb-2">La Verdad Christian College</p>
                    <p class="text-gray-500 text-sm mb-3">2024-2028</p>
                    <p class="text-gray-700 leading-relaxed">
                        During my college years, I developed a strong foundation in programming, database management, web development, and software engineering. I actively participated in coding competitions and hackathons, which helped me enhance my problem-solving skills and teamwork abilities.
                    </p>
                </div>

                <div class="bg-gray-50 p-4 rounded-lg">
                    <h4 class="font-semibold text-lg mb-3">Key Achievements:</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Champion in Capture-the-Flag during ICT Week</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mr-2 mt-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                            <span class="text-gray-700">Successful delivery of projects</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6 md:p-8 mb-8">
                <h2 class="text-3xl font-bold mb-4 text-blue-600">Skills & Expertise</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-xl font-semibold mb-3">Frontend</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>HTML5, CSS3, JavaScript (ES6+)</li>
                            <li>Tailwind CSS, Bootstrap</li>
                            <li>Responsive Web Design</li>
                            <li>UI/UX Best Practices</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Backend</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>PHP (Laravel Framework)</li>
                            <li>Python</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Databases</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>MySQL</li>
                            <li>SQLite</li>
                            <li>Database Optimization</li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-semibold mb-3">Tools & Others</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>Git & GitHub</li>
                            <li>VS Code</li>
                            <li>Figma</li>
                            <li>Problem Solving</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-blue-600 text-white shadow-lg rounded-lg p-6 md:p-8 text-center">
                <h2 class="text-3xl font-bold mb-4">Let's Work Together!</h2>
                <p class="text-lg mb-6">I'm always open to discussing new projects, creative ideas, or opportunities.</p>
                <button onclick="openModal()" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-lg hover:bg-gray-100 transition">
                    Get In Touch
                </button>
            </div>

        </section>
    </main>
    @include('parts.footer')
</body>

</html>