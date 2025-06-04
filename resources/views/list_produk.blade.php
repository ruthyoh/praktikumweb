<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Modern - Daftar Produk Indonesia</title>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> 
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.1); }
        .animate-fade-in { animation: fadeIn 0.5s ease-in; }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .product-card { 
            background: linear-gradient(145deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(0,0,0,0.05);
        }
        .price-tag {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen">
    
    <!-- Header dengan Gradient -->
    <header class="gradient-bg text-white py-12 px-6 shadow-2xl relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="text-center md:text-left mb-6 md:mb-0">
                    <h1 class="text-5xl font-bold mb-3 flex items-center justify-center md:justify-start">
                        <i class="fas fa-store mr-4 text-yellow-300"></i>
                        Toko Modern
                    </h1>
                    <p class="text-blue-100 text-xl font-light">Produk Unggulan Nusantara</p>
                    <div class="w-24 h-1 bg-yellow-300 mx-auto md:mx-0 mt-3 rounded-full"></div>
                </div>
                <div class="text-center bg-white bg-opacity-20 rounded-2xl p-6 backdrop-blur-sm">
                    <div class="text-4xl font-bold mb-1">{{ count($nama) }}</div>
                    <div class="text-blue-100 font-medium">Total Produk</div>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-7xl mx-auto px-6 py-12">
        
        <!-- Action Bar -->
        <div class="flex flex-col lg:flex-row justify-between items-center mb-12 gap-6">
            <div class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                <div class="relative group">
                    <input type="text" id="searchInput" placeholder="Cari produk unggulan..." 
                           class="bg-white border-2 border-gray-200 rounded-full py-4 px-6 pl-14 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 focus:border-blue-500 shadow-lg hover:shadow-xl transition-all duration-300 w-80"
                           onkeyup="filterProducts()">
                    <i class="fas fa-search absolute left-5 top-1/2 transform -translate-y-1/2 text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                </div>
                
                <div class="flex items-center space-x-3">
                    <i class="fas fa-filter text-gray-500"></i>
                    <select id="sortSelect" onchange="sortProducts()" 
                            class="bg-white border-2 border-gray-200 rounded-xl py-4 px-6 focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 focus:border-blue-500 shadow-lg hover:shadow-xl transition-all cursor-pointer">
                        <option value="default">Urutkan Produk</option>
                        <option value="name-asc">Nama A-Z</option>
                        <option value="name-desc">Nama Z-A</option>
                        <option value="price-asc">Harga Terendah</option>
                        <option value="price-desc">Harga Tertinggi</option>
                    </select>
                </div>
            </div>
            
            <button onclick="my_modal_2.showModal()" 
                    class="bg-gradient-to-r from-blue-600 via-purple-600 to-indigo-600 hover:from-blue-700 hover:via-purple-700 hover:to-indigo-700 text-white font-bold py-4 px-8 rounded-full shadow-2xl hover:shadow-blue-500/25 transform hover:scale-105 transition-all duration-300 flex items-center space-x-3 group">
                <i class="fas fa-plus group-hover:rotate-90 transition-transform duration-300"></i>
                <span class="text-lg">Tambah Produk</span>
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform duration-300"></i>
            </button>
        </div>

        <!-- Grid Layout untuk Produk -->
        @if(count($nama) > 0)
        <div id="productGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 animate-fade-in">
            @foreach ($nama as $index => $produk)
            <div class="product-card rounded-3xl shadow-xl card-hover overflow-hidden border-0" data-name="{{ strtolower($produk) }}" data-price="{{ $harga[$index] }}">
                <!-- Product Image Placeholder -->
                <div class="gradient-bg h-48 flex items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-black opacity-20"></div>
                    <i class="fas fa-box-open text-6xl text-white opacity-90 relative z-10"></i>
                    <div class="absolute top-4 right-4 bg-white bg-opacity-20 rounded-full px-3 py-1 backdrop-blur-sm">
                        <span class="text-white text-sm font-semibold">#{{ $index + 1 }}</span>
                    </div>
                </div>
                
                <!-- Product Info -->
                <div class="p-8">
                    <div class="flex items-start justify-between mb-4">
                        <h3 class="font-bold text-xl text-gray-800 leading-tight flex-1 mr-3">{{ $produk }}</h3>
                        <div class="flex items-center space-x-1 text-yellow-400">
                            @for($i = 1; $i <= 5; $i++)
                                <i class="fas fa-star text-sm"></i>
                            @endfor
                        </div>
                    </div>
                    
                    <p class="text-gray-600 text-sm leading-relaxed mb-6 line-clamp-3">{{ $desc[$index] }}</p>
                    
                    <div class="flex justify-between items-center">
                        <div class="price-tag text-3xl font-bold">
                            Rp {{ number_format($harga[$index], 0, ',', '.') }}
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="bg-blue-100 hover:bg-blue-200 text-blue-600 p-3 rounded-full transition-all duration-200 hover:scale-110" title="Edit Produk">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="bg-red-100 hover:bg-red-200 text-red-600 p-3 rounded-full transition-all duration-200 hover:scale-110" title="Hapus Produk">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Product Badge -->
                    <div class="mt-4 flex justify-between items-center">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">
                            <i class="fas fa-check-circle mr-1"></i>Tersedia
                        </span>
                        <span class="text-xs text-gray-500">
                            <i class="fas fa-eye mr-1"></i>{{ rand(50, 500) }} dilihat
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <!-- Empty State -->
        <div class="text-center py-20">
            <div class="inline-flex items-center justify-center w-24 h-24 bg-gray-100 rounded-full mb-6">
                <i class="fas fa-box-open text-4xl text-gray-400"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-700 mb-3">Belum Ada Produk</h3>
            <p class="text-gray-500 mb-8 max-w-md mx-auto">Mulai tambahkan produk unggulan Anda untuk membangun toko online yang menarik</p>
            <button onclick="my_modal_2.showModal()" 
                    class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold py-4 px-8 rounded-full shadow-lg hover:shadow-xl transform hover:scale-105 transition-all">
                <i class="fas fa-plus mr-2"></i>Tambah Produk Pertama
            </button>
        </div>
        @endif
    </div>

    <!-- Modal Tambah Produk -->
    <dialog id="my_modal_2" class="modal backdrop-blur-sm">
        <div class="modal-box max-w-2xl bg-white rounded-3xl shadow-2xl border-0 p-0 overflow-hidden">
            <!-- Modal Header -->
            <div class="gradient-bg text-white p-8 relative">
                <div class="absolute inset-0 bg-black opacity-20"></div>
                <div class="relative z-10">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-3xl font-bold mb-2 flex items-center">
                                <i class="fas fa-plus-circle mr-3 text-yellow-300"></i>
                                Tambah Produk Baru
                            </h2>
                            <p class="text-blue-100 text-lg">Lengkapi informasi produk unggulan Anda</p>
                        </div>
                        <form method="dialog">
                            <button class="text-white hover:text-gray-200 text-3xl transition-colors hover:rotate-90 duration-300">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal Body -->
            <form method="POST" action="{{ route('produk.simpan') }}" class="p-8 space-y-8">
                @csrf
                
                <div class="grid grid-cols-1 gap-8">
                    <!-- Nama Produk -->
                    <div class="space-y-3">
                        <label class="flex items-center text-lg font-semibold text-gray-700">
                            <i class="fas fa-tag text-blue-500 mr-3"></i>
                            Nama Produk
                        </label>
                        <input type="text" id="nama" name="nama" required
                               class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 focus:border-blue-500 transition-all duration-300 text-lg"
                               placeholder="Masukkan nama produk unggulan...">
                    </div>

                    <!-- Deskripsi Produk -->
                    <div class="space-y-3">
                        <label class="flex items-center text-lg font-semibold text-gray-700">
                            <i class="fas fa-align-left text-blue-500 mr-3"></i>
                            Deskripsi Produk
                        </label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" required
                                  class="w-full px-6 py-4 border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 focus:border-blue-500 transition-all duration-300 text-lg resize-none"
                                  placeholder="Deskripsikan keunggulan dan keunikan produk Anda..."></textarea>
                    </div>

                    <!-- Harga Produk -->
                    <div class="space-y-3">
                        <label class="flex items-center text-lg font-semibold text-gray-700">
                            <i class="fas fa-money-bill-wave text-blue-500 mr-3"></i>
                            Harga Produk
                        </label>
                        <div class="relative">
                            <span class="absolute left-6 top-1/2 transform -translate-y-1/2 text-gray-500 font-bold text-lg">Rp</span>
                            <input type="number" id="harga" name="harga" required min="0"
                                   class="w-full pl-16 pr-6 py-4 border-2 border-gray-200 rounded-2xl focus:outline-none focus:ring-4 focus:ring-blue-500 focus:ring-opacity-30 focus:border-blue-500 transition-all duration-300 text-lg"
                                   placeholder="0">
                        </div>
                    </div>
                </div>

                <!-- Modal Actions -->
                <div class="flex space-x-4 pt-8 border-t border-gray-100">
                    <button type="button" onclick="my_modal_2.close()"
                            class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold py-4 px-6 rounded-2xl transition-all duration-300 text-lg">
                        <i class="fas fa-times mr-2"></i>Batal
                    </button>
                    <button type="submit" 
                            class="flex-1 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-6 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 text-lg">
                        <i class="fas fa-save mr-2"></i>Simpan Produk
                    </button>
                </div>
            </form>
        </div>
        
        <!-- Modal Backdrop -->
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
    </dialog>

    <script>
        // Filter dan Search Functions
        function filterProducts() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const productCards = document.querySelectorAll('.product-card');
            
            productCards.forEach(card => {
                const productName = card.dataset.name;
                if (productName.includes(searchTerm)) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        function sortProducts() {
            const sortValue = document.getElementById('sortSelect').value;
            const productGrid = document.getElementById('productGrid');
            const products = Array.from(document.querySelectorAll('.product-card'));
            
            products.sort((a, b) => {
                switch(sortValue) {
                    case 'name-asc':
                        return a.dataset.name.localeCompare(b.dataset.name);
                    case 'name-desc':
                        return b.dataset.name.localeCompare(a.dataset.name);
                    case 'price-asc':
                        return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                    case 'price-desc':
                        return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                    default:
                        return 0;
                }
            });
            
            products.forEach(product => {
                productGrid.appendChild(product);
            });
        }

        // Form Validation Enhancement
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form[action="{{ route('produk.simpan') }}"]');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const nama = document.getElementById('nama').value.trim();
                    const deskripsi = document.getElementById('deskripsi').value.trim();
                    const harga = document.getElementById('harga').value;
                    
                    if (!nama || !deskripsi || !harga || harga <= 0) {
                        e.preventDefault();
                        alert('Mohon lengkapi semua field dengan benar!');
                        return false;
                    }
                    
                    // Show loading state
                    const submitBtn = form.querySelector('button[type="submit"]');
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Menyimpan...';
                    submitBtn.disabled = true;
                });
            }
        });

        // Auto-resize textarea
        document.getElementById('deskripsi')?.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = this.scrollHeight + 'px';
        });

        // Format harga input
        document.getElementById('harga')?.addEventListener('input', function() {
            let value = this.value.replace(/\D/g, '');
            this.value = value;
        });
    </script>
</body>
</html>