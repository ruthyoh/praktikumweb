<head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/flowbite.min.css">
    <link rel="stylesheet" href="styles/flowbite.min.js"> 
    <link rel=”stylesheet” href=”https://cdn.tailwindcss.com/3.4.1”>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Motors | Premium Automobiles</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .header-bg {
            background: linear-gradient(135deg, #111827 0%, #1f2937 100%);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
        }
        .nav-link {
            position: relative;
            padding-bottom: 5px;
        }
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #f59e0b;
            transition: width 0.3s ease;
        }
        .nav-link:hover:after {
            width: 100%;
        }
        .logo-text {
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            letter-spacing: 1px;
        }
        .search-bar {
            transition: all 0.3s ease;
        }
        .search-bar:focus-within {
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.3);
        }
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
        }
        .dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;
        }
        .mobile-menu.open {
            max-height: 500px;
        }
    </style>
</head>
<body>
    <!-- Top Announcement Bar -->
    <div class="bg-gradient-to-r from-amber-500 to-amber-600 text-white text-center py-2 px-4 text-sm font-medium">
        <div class="container mx-auto flex justify-between items-center">
            <span>✨ Exclusive Limited Edition Models Available Now</span>
            <a href="#" class="hover:underline flex items-center">
                Explore <i class="fas fa-chevron-right ml-1 text-xs"></i>
            </a>
        </div>
    </div>

    <!-- Main Header -->
    <header class="header-bg text-white sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center space-x-2">
                    <div class="text-amber-500 text-3xl">
                        <i class="fas fa-car"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold logo-text">LUXURY<span class="text-amber-500">MOTORS</span></h1>
                        <p class="text-xs text-gray-400 -mt-1">Since 1985</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <div class="dropdown relative">
                        <a href="#" class="nav-link font-medium flex items-center">
                            Inventory <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl py-1 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">New Arrivals</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Luxury Sedans</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Sports Cars</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">SUVs</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Limited Editions</a>
                        </div>
                    </div>
                    
                    <a href="#" class="nav-link font-medium">Brands</a>
                    
                    <div class="dropdown relative">
                        <a href="#" class="nav-link font-medium flex items-center">
                            Services <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </a>
                        <div class="dropdown-menu absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-xl py-1 z-50">
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Financing</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Leasing</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Maintenance</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Customization</a>
                            <a href="#" class="block px-4 py-2 hover:bg-amber-50">Trade-In</a>
                        </div>
                    </div>
                    
                    <a href="#" class="nav-link font-medium">About</a>
                    <a href="#" class="nav-link font-medium">Contact</a>
                </nav>

                <!-- Search and User Actions -->
                <div class="hidden lg:flex items-center space-x-4">
                    <div class="relative search-bar">
                        <input type="text" placeholder="Search models..." class="bg-gray-800 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-amber-500 w-64">
                        <button class="absolute right-3 top-2 text-gray-400 hover:text-amber-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <a href="#" class="text-gray-300 hover:text-amber-500 text-xl">
                        <i class="far fa-user"></i>
                    </a>
                    <a href="#" class="text-gray-300 hover:text-amber-500 text-xl relative">
                        <i class="far fa-heart"></i>
                        <span class="absolute -top-2 -right-2 bg-amber-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-2xl focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu lg:hidden bg-gray-900 rounded-lg mt-2">
                <div class="px-4 py-3 space-y-4">
                    <div class="relative search-bar mb-4">
                        <input type="text" placeholder="Search models..." class="bg-gray-800 text-white px-4 py-2 rounded-full focus:outline-none focus:ring-2 focus:ring-amber-500 w-full">
                        <button class="absolute right-3 top-2 text-gray-400 hover:text-amber-500">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800 font-medium">Inventory</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800 font-medium">Brands</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800 font-medium">Services</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800 font-medium">About</a>
                    <a href="#" class="block px-3 py-2 rounded hover:bg-gray-800 font-medium">Contact</a>
                    
                    <div class="flex space-x-4 pt-2">
                        <a href="#" class="text-gray-300 hover:text-amber-500 text-xl">
                            <i class="far fa-user"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-amber-500 text-xl relative">
                            <i class="far fa-heart"></i>
                            <span class="absolute -top-2 -right-2 bg-amber-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('open');
            mobileMenuButton.innerHTML = mobileMenu.classList.contains('open') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenu.contains(e.target) && e.target !== mobileMenuButton) {
                mobileMenu.classList.remove('open');
                mobileMenuButton.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });
    </script>
</body>
</html>
<body>
    


<div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/bmw.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/hitam.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ferrari Enzo</h5>
        <p class="mb-3 font-normal text-gray-700">Best Sport Car for your life.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/lamborgini.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">lamborghini aventador</h5>
        <p class="mb-3 font-normal text-gray-700">technical specifications, performance (top speed and acceleration), design, and pictures of the new Lamborghini Aventador.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/merah.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ferrari 599 GTO</h5>
        <p class="mb-3 font-normal text-gray-700">The Ferrari 599 GTO is a limited-edition, high-performance, two-seater berlinetta.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/rr.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/tesla.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/xiaomi.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/biru.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/bintang.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/keren.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/putih.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/kuning.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
    <img class="rounded-t-lg" src="images/pink.jpeg" alt="" />
    <div class="p-5">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">BMW 520i</h5>
        <p class="mb-3 font-normal text-gray-700">Hypercar with hybrid engine.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-lg hover:bg-red-700">
            View Details
        </a>
    </div>
</div>




</body>

    
