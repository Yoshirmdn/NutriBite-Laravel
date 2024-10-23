<x-layout>
    <!-- Hero Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold text-gray-800">Snack Sehat untuk Semua</h2>
            <p class="mt-4 text-gray-600">Pilihan snack yang aman dan lezat untuk mereka yang memiliki alergi, dengan
                komposisi alami dan terukur kalori.</p>
            <a href="#products" class="mt-6 inline-block bg-green-500 text-white py-3 px-8 rounded-full shadow-lg">Temukan
                Snack
                Anda</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Mengapa Nutribite?</h2>
            <p class="mt-4 text-gray-600">Kami menyediakan snack yang diformulasikan khusus untuk membantu mereka yang
                memiliki alergi. Produk kami bebas dari bahan pengawet dan pewarna buatan.</p>
        </div>
    </section>

    <!-- Product Section -->
    <section id="products" class="py-20 bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-800">Pilihan Snack</h2>
            <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Snack 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Nutribite Crunch</h3>
                    <p class="mt-4 text-gray-600">Snack bebas gluten yang aman untuk mereka dengan alergi gandum.</p>
                    <ul class="mt-4">
                        <li><strong>Komposisi:</strong> Oat, Kacang Almond, Madu</li>
                        <li><strong>Kalori:</strong> 120 kcal per porsi</li>
                    </ul>
                </div>
                <!-- Snack 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Nutribite Fruit Bar</h3>
                    <p class="mt-4 text-gray-600">Terbuat dari buah-buahan kering, bebas dari produk susu dan
                        kacang-kacangan.</p>
                    <ul class="mt-4">
                        <li><strong>Komposisi:</strong> Kurma, Aprikot, Kismis</li>
                        <li><strong>Kalori:</strong> 90 kcal per porsi</li>
                    </ul>
                </div>
                <!-- Snack 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold text-gray-800">Nutribite Protein Bites</h3>
                    <p class="mt-4 text-gray-600">Camilan tinggi protein yang aman bagi penderita alergi kedelai.</p>
                    <ul class="mt-4">
                        <li><strong>Komposisi:</strong> Kacang Polong, Cokelat Hitam, Chia Seeds</li>
                        <li><strong>Kalori:</strong> 150 kcal per porsi</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Hubungi Kami</h2>
            <p class="mt-4 text-gray-600">Jika Anda memiliki pertanyaan tentang produk kami atau alergi, jangan ragu
                untuk menghubungi kami.</p>
            <a href="mailto:info@nutribite.com"
                class="mt-6 inline-block bg-green-500 text-white py-3 px-8 rounded-full shadow-lg">Email Kami</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-green-500 py-6">
        <div class="container mx-auto text-center text-white">
            <p>&copy; 2024 Nutribite. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</x-layout>
