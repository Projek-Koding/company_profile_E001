<!-- Tombol Kembali ke Atas -->
<button id="backToTopBtn" class="fixed bottom-5 right-5 hidden rounded-full bg-yellow-400 p-4 text-white shadow-lg">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
    </svg>
</button>
<script>
    const backToTopBtn = document.getElementById('backToTopBtn');

    // Tampilkan tombol saat scroll sudah di bawah
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.classList.remove('hidden');
            backToTopBtn.classList.add('show');
        } else {
            backToTopBtn.classList.add('hidden');
            backToTopBtn.classList.remove('show');
        }
    });

    // Fungsi untuk scroll ke atas saat tombol diklik
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>