<header class="border-b-2 border-blue-500">
    <div class="flex items-center justify-between px-4 md:px-12 py-5">
        <h1 class="text-2xl md:text-3xl font-bold">
            <a href="/">Port<span class="text-blue-500">folio</span></a>
        </h1>

        <nav class="hidden md:flex text-lg">
            <ul class="flex flex-row gap-8 lg:gap-24">
                <li class="font-bold">
                    <a href="/home" class="nav-link text-blue-600 hover:text-blue-800">
                        Home
                    </a>
                </li>
                <li class="font-bold">
                    <a href="/about" class="nav-link text-blue-600 hover:text-blue-800">
                        About
                    </a>
                </li>
                <li class="font-bold">
                    <a href="/project" class="nav-link text-blue-600 hover:text-blue-800">
                        Projects
                    </a>
                </li>
            </ul>
        </nav>

        <div class="hidden md:flex">
            <button onclick="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Get in Touch
            </button>
        </div>

        <button id="mobile-menu-button" class="md:hidden text-blue-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <nav id="mobile-menu" class="hidden md:hidden border-t border-blue-300">
        <ul class="flex flex-col py-4">
            <li class="font-bold px-4 py-2">
                <a href="/home" class="mobile-nav-link block text-blue-600">
                    Home
                </a>
            </li>
            <li class="font-bold px-4 py-2">
                <a href="/about" class="mobile-nav-link block text-blue-600">
                    About
                </a>
            </li>
            <li class="font-bold px-4 py-2">
                <a href="/project" class="mobile-nav-link block text-blue-600">
                    Projects
                </a>
            </li>
            <li class="px-4 py-2">
                <button onclick="openModal()" class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg text-center">
                    Get in Touch
                </button>
            </li>
        </ul>
    </nav>
</header>

<div id="myModal" class="hidden fixed inset-0 bg-white bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 shadow-2xl border-2 border-gray-50">
        <h2 class="text-2xl font-bold mb-4">Contact Me</h2>
        <p class="text-gray-600 mb-6">Get in touch! I'd love to hear from you.</p>

        <form class="space-y-4">
            <input type="text" placeholder="Your Name" class="w-full px-4 py-2 border rounded-lg">
            <input type="email" placeholder="Your Email" class="w-full px-4 py-2 border rounded-lg">
            <textarea placeholder="Your Message" rows="4" class="w-full px-4 py-2 border rounded-lg"></textarea>

            <div class="flex gap-3">
                <button type="button" onclick="closeModal()" class="flex-1 px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400">
                    Cancel
                </button>
                <button type="submit" class="flex-1 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Send
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const allNavLinks = document.querySelectorAll('.nav-link, .mobile-nav-link');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    function setActiveLink(clickedLink) {
        allNavLinks.forEach(link => {
            link.classList.remove('text-blue-800', 'border-b-2', 'border-blue-800', 'bg-blue-50');
            link.classList.add('text-blue-600');
        });

        clickedLink.classList.remove('text-blue-600');
        clickedLink.classList.add('text-blue-800', 'border-b-2', 'border-blue-800');

        if (clickedLink.classList.contains('mobile-nav-link')) {
            clickedLink.classList.add('bg-blue-500', 'text-white', 'p-2');
        }
    }

    allNavLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            setActiveLink(this);

            if (!mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        });
    });

    window.addEventListener('DOMContentLoaded', () => {
        const currentPath = window.location.pathname;
        allNavLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                setActiveLink(link);
            }
        });
    });

    function openModal() {
        document.getElementById('myModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('myModal').classList.add('hidden');
    }

    document.getElementById('myModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
</script>