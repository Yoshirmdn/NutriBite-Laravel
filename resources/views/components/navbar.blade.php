<style>
    .glass-effect {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>
<div class="fixed w-full z-10 flex justify-center py-4">
    <!-- Gunakan md:rounded-full untuk tampilan desktop saja -->
    <div class="glass-effect md:rounded-full px-6 py-2 w-full max-w-4xl">
        <header class="flex justify-between items-center">
            <div class="text-lg font-semibold text-gray-700">Brand</div>
            <nav class="hidden md:flex space-x-6">
                <a class="btn-custom px-4 py-2 rounded" href="#">Home</a>
                <a class="btn-custom px-4 py-2 rounded" href="#">About</a>
                <a class="btn-custom px-4 py-2 rounded" href="#">Products</a>
                <a class="btn-custom px-4 py-2 rounded" href="#">Shop</a>
                <a class="btn-custom px-4 py-2 rounded" href="#">Featured</a>
            </nav>
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </header>
        <nav id="mobile-menu" class="hidden md:hidden flex flex-col items-center mt-4 space-y-2">
            <a class="block px-4 py-2 rounded" href="#">Home</a>
            <a class="block px-4 py-2 rounded" href="#">About</a>
            <a class="block px-4 py-2 rounded" href="#">Products</a>
            <a class="block px-4 py-2 rounded" href="#">Shop</a>
            <a class="block px-4 py-2 rounded" href="#">Featured</a>
        </nav>
    </div>
</div>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>
