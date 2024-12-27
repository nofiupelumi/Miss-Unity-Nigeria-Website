<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miss World Nigeria</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <!-- Google Fonts - Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/build/assets/app.css">
    <script type="module" src="/build/assets/app.js"></script>
    <style>
        /* Apply Montserrat to all text elements */
        body {
            font-family: 'Montserrat', sans-serif;
        }
    
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 1s ease-in-out; }

        @keyframes zoom {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        .zoom-animation {
            animation: zoom 5s infinite ease-in-out;
        }
    </style>
</head>
<body class="bg-black text-white">
    <header class="relative w-full bg-black">
        <!-- Desktop Navbar -->
        <nav class="hidden lg:flex justify-between items-center px-8 py-4">
            <div class="logo">
                <img src="{{ asset('assets/images/logopageant.png') }}" alt="Logo" class="h-12">
            </div>
            <ul class="flex space-x-6 text-white">
                <li><a href="#about" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#queen" class="hover:text-gray-300">MWN Queen</a></li>
                <li><a href="#blog" class="hover:text-gray-300">Blog</a></li>
                <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
                <li><a href="#login" class="hover:text-gray-300">Login</a></li>
                <li><a href="#register" class="hover:text-gray-300">Register</a></li>
                <li><a href="#events" class="hover:text-gray-300">Events</a></li>
            </ul>
        </nav>

        <!-- Mobile Navbar -->
        <div class="lg:hidden flex flex-col items-center py-4">
            <img src="{{ asset('assets/images/logopageant.png') }}" alt="Logo" class="h-12">
            <button id="hamburger" class="mt-2">
                <div class="w-8 h-1 bg-white mb-1"></div>
                <div class="w-8 h-1 bg-white mb-1"></div>
                <div class="w-8 h-1 bg-white"></div>
            </button>
        </div>
        <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-black text-center">
            <ul class="space-y-4 py-4">
                <li><a href="#about" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#queen" class="hover:text-gray-300">MWN Queen</a></li>
                <li><a href="#blog" class="hover:text-gray-300">Blog</a></li>
                <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
                <li><a href="#login" class="hover:text-gray-300">Login</a></li>
                <li><a href="#register" class="hover:text-gray-300">Register</a></li>
                <li><a href="#events" class="hover:text-gray-300">Events</a></li>
            </ul>
        </div>
    </header>

        

    <!-- Main Section -->
    <section class="relative h-screen flex items-center justify-center">
        <!-- Background Image with Blur -->
 
    <div class="absolute inset-0 bg-cover bg-center md:bg-[center_top] sm:bg-[center_center]" style="
    background-image: url('/assets/images/bg-pageant.jpeg');
    background-blend-mode: overlay;
    background-color: rgba(0, 0, 0, 0.7);
    filter: blur(2px);
    z-index: -1;
    "></div>

        <!-- Overlay for Blending -->
        <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>
    
        <!-- Main Content -->
        <div class="text-center relative z-10">
            <div class="relative inline-block">
                <!-- Creative Stacking -->
                <h1 class="text-5xl lg:text-7xl font-bold uppercase text-gold leading-tight">
                    <span class="block transform -translate-y-2">Miss</span>
                    <span class="block transform -translate-y-4">Unity</span>
                    <span class="block transform -translate-y-6 text-white">Nigeria</span>
                </h1>
            </div>
            <!-- Paragraph -->
            <p class="mt-6 text-lg lg:text-2xl text-white font-medium">
                Start Registration ~ <span class="text-gold ">Fill the Form</span>
            </p>
        </div>
    </section>
    
    

    <!-- Participation Section -->
    
    <section id="participation" class="h-screen flex items-center justify-center bg-black text-white relative ">
        <div class="container mx-auto flex flex-col lg:flex-row items-center justify-center lg:space-x-8 space-y-8 lg:space-y-0">
            
<!-- Golden Border with Persistent Blurred Background -->
<div class="relative border border-gold bg-cover bg-center w-10/12 lg:w-5/12 aspect-square" 
     style="background-image: url('/assets/images/banner-pageant.png');">
    <!-- Dark Overlay to Reduce Lightening -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Content with Shadows -->
    <div class="p-4 lg:p-8 flex flex-col items-center justify-center h-full relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold uppercase text-center leading-tight text-white drop-shadow-lg">
            Participation<br>Criteria
        </h2>
        <p class="mt-4 text-lg lg:text-xl text-center text-gray-200 drop-shadow-md">
            Kindly read the participation criteria<br>
            <span class="text-gold font-semibold">before you apply...</span>
        </p>
    </div>
</div>




            <!-- Criteria List -->
            <div class="w-10/12 lg:w-5/12">
                <ul class="space-y-6">
                    <!-- Single Item -->
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">Female</span>
                    </li>
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">Aged between 18-26 years</span>
                    </li>
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">Nigerian by birth</span>
                    </li>
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">Single/Unmarried</span>
                    </li>
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">No criminal convictions</span>
                    </li>
                    <li class="flex items-center space-x-4 border-b border-white pb-2 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">
                            Minimum education qualification: <br class="hidden lg:block">
                            Secondary school certificate
                        </span>
                    </li>
                    <li class="flex items-center space-x-4 transform transition duration-300 hover:scale-105">
                        <span class="h-8 w-8 flex items-center justify-center rounded-full bg-gold text-black text-xl font-bold">✔</span>
                        <span class="text-lg lg:text-xl">
                            Possess valid international passport <br class="hidden lg:block">(or in process)
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    
        <!-- Bottom Arrow -->
        {{-- {{-- <div class="absolute bottom-4 w-full text-center">
            <span class="arrow-icon text-gold text-2xl">&#x25BC;</span>
        </div> --}}
    </section> 
    

    <!-- Start registration Section -->
   
    <section id="start-registration" class="min-h-screen flex flex-col items-center justify-center bg-black-900 text-white p-4">
        <!-- Banner Image Container -->
        <div class="relative w-full sm:w-10/12 md:w-8/12 lg:w-6/12 aspect-[4/3] md:aspect-square overflow-hidden rounded shadow-lg">
            <img src="/assets/images/banner-pageant.png" alt="Banner" class="w-full h-full object-cover zoom-animation object-top sm:object-center" style="object-position: 50% 25%;">
            
        </div>
        <!-- Registration Link -->
        <div class="mt-8 md:mt-12 w-full sm:w-auto">
            <a href="#" class="w-full sm:w-auto inline-flex items-center justify-center bg-green-500 text-white font-bold text-2xl sm:text-3xl lg:text-4xl py-4 sm:py-6 px-8 sm:px-16 rounded-lg shadow-lg transform transition hover:scale-105 hover:bg-green-600 uppercase">
                <span class="material-icons mr-2 sm:mr-4 text-3xl sm:text-4xl">arrow_forward</span>
                Start Registration
            </a>
        </div>
    </section>

    <!-- Payment Description Section -->
    

    <section class="min-h-screen relative flex flex-col items-center justify-center p-4 sm:p-8 font-[Montserrat]">
        <!-- Background Image with darker overlay -->
        <div class="absolute inset-0 z-0">
            <img 
                src="/assets/images/river-pageants.jpg" 
                alt="River Background" 
                class="w-full h-full object-cover brightness-40"
            >
        </div>

        <!-- Content Container -->
        <div class="relative z-10 flex flex-col items-center text-center space-y-8 sm:space-y-10 max-w-4xl mx-auto">
            <!-- Registration Fee - Largest Text -->
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-white leading-tight tracking-wide drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)] filter drop-shadow-2xl">
                REGISTRATION FEE IS N25,000 PER CONTESTANT
            </h1>

            <!-- Payment Validates - Medium Large Text -->
            <h2 class="text-2xl sm:text-3xl md:text-4xl  text-white tracking-wide drop-shadow-[0_3px_3px_rgba(0,0,0,0.8)]">
                PAYMENT VALIDATES REGISTRATION
            </h2>

            <!-- Start Registration Button -->
            <a href="#" class="inline-flex items-center justify-center bg-green-500 text-white font-bold text-xl sm:text-2xl py-3 sm:py-4 px-8 sm:px-12 rounded-lg shadow-xl transform transition hover:scale-105 hover:bg-green-600 uppercase filter drop-shadow-xl">
                <span>Start Registration Now</span>
                <span class="material-icons ml-2 text-2xl sm:text-3xl">arrow_forward</span>
            </a>

            <!-- Payment Info - Small Text -->
            <p class="text-lg sm:text-xl md:text-2xl font-bold text-gold max-w-3xl tracking-wide drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)]">
                AFTER DATA FORM COMPLETION, APPLICANTS WILL BE REDIRECTED TO THE PAYSTACK PLATFORM PAGE TO MAKE PAYMENT
            </p>
        </div>
    </section>

    <!-- Footer Section -->
    {{-- <footer class="bg-black text-center py-6">
        <p class="text-white text-sm">&copy; 2024 Miss World Nigeria. All rights reserved.</p>
    </footer> --}}
    <footer class="bg-black text-white py-8 px-4 md:px-8 lg:px-12 fade-in">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row md:justify-between space-y-8 md:space-y-0">
                <!-- Left Column -->
                <div class="flex flex-col space-y-8">
                    <!-- Logo -->
                    <div>
                        <img src="{{ asset('assets/images/logopageant.png') }}" alt="Logo" class="h-16 object-contain">
                    </div>

                    <!-- Navigation Links -->
                    <nav class="flex flex-col space-y-4">
                        
                        <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                            <img src="{{ asset('assets/images/Home Overview.png') }} " alt="Home" class="w-5 h-5 bg-white" >
                            <span>Home Overview</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                            <img src="{{ asset('assets/images/Corporate.png') }}" alt="Corporate" class="w-5 h-5 bg-white">
                            <span>Corporate</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                            <img src="{{ asset('assets/images/Articles & Blog.png') }}" alt="Blog" class="w-5 h-5 bg-white">
                            <span>Articles & Blog</span>
                        </a>
                        <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                            {{-- <img src="/public/Communication/Contact.png" alt="Contact" class="w-5 h-5"> --}}
                            <img src="{{ asset('assets/images/Contact.png') }}" alt="Contact" class="w-5 h-5 bg-white">
                            <span>Communication/Contact</span>
                        </a>
                    
                    </nav>

                    <!-- Social Media Icons -->
                    <div class="flex space-x-4">
                        <a href="#" class="p-2 bg-white rounded-lg hover:bg-gray-700">
                            {{-- <img src="/public/facebook.png" alt="Facebook" class="w-5 h-5"> --}}
                            <img src="{{ asset('assets/images/facebook.png') }}" alt="Facebook" class="w-5 h-5">
                        </a>
                        <a href="#" class="p-2 bg-white rounded-lg hover:bg-gray-700">
                            {{-- <img src="/public/youtube.png" alt="YouTube" class="w-5 h-5"> --}}
                            <img src="{{ asset('assets/images/youtube.png') }}" alt="YouTube" class="w-5 h-5">
                        </a>
                        <a href="#" class="p-2 bg-white rounded-lg hover:bg-gray-700">
                            {{-- <img src="/public/instagram.png" alt="Instagram" class="w-5 h-5"> --}}
                            <img src="{{ asset('assets/images/instagram.png') }}" alt="Instagram" class="w-5 h-5">
                        </a>
                        <a href="#" class="p-2 bg-white rounded-lg hover:bg-gray-700">
                            {{-- <img src="/public/twitter.png" alt="Twitter" class="w-5 h-5"> --}}
                            <img src="{{ asset('assets/images/twitter.png') }}" alt="Twitter" class="w-5 h-5">
                        </a>
                    </div>
                </div>

                <!-- Right Column (Registration Links) -->
                <div class="flex flex-col space-y-4">
                    <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                        {{-- <img src="/public/Start Registration.png" alt="Registration" class="w-5 h-5"> --}}
                        <img src="{{ asset('assets/images/Start Registration') }}.png" alt="Registration" class="w-5 h-5 bg-white">
                        <span>Start Registration</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                        {{-- <img src="/public/Create My Account.png" alt="Account" class="w-5 h-5"> --}}
                        <img src="{{ asset('assets/images/Create-My-Account.png') }}" alt="Account" class="w-5 h-5 bg-white">
                        <span>Create My Account</span>
                    </a>
                    <a href="#" class="flex items-center space-x-3 hover:text-gray-300">
                        {{-- <img src="/public/Check Application Status.png" alt="Status" class="w-5 h-5"> --}}
                        <img src="{{ asset('assets/images/Check-Application-Status.png') }}" alt="Status" class="w-5 h-5 bg-white">
                        <span>Check Application Status</span>
                    </a>
                </div>
            </div>
            <div class="text-center py-6 space-y-10">
                <p class="text-white text-sm">&copy; 2024 Miss Unity Nigeria. All rights reserved.</p>
                </div>
        </div>

        
    </footer>
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Intersection Observer for Fade-in Effect
        const sections = document.querySelectorAll('section');
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, { threshold: 0.1 });

        sections.forEach(section => {
            observer.observe(section);
        });
    </script>
      <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
