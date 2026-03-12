<!-- ════ FOOTER ════ -->
<footer>
    <div class="container-xl px-3 px-lg-4">
        <div class="row g-4 pb-5">
            <div class="col-12 col-lg-4">
                <a href="#" class="d-inline-flex mb-3">
                    <img src="{{ asset('assets/images/icon-white-no-bg.png') }}" alt="Logo Bit HRMS" class="logo-light" height="90" width="100">
                </a>
                <p class="footer-desc mb-3">Platform HRMS Indonesia terbaik. Kelola Gaji, Absensi, Cuti, Lembur, BPJS, dan PPh 21 secara otomatis sesuai regulasi ketenagakerjaan.</p>
                <div class="d-flex gap-2">
                    <a href="#" class="footer-social-btn"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="footer-social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social-btn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="footer-social-btn"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="footer-social-btn"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-col-title mb-3">Solusi &amp; Fitur</h6>
                <a href="#" class="footer-link">Database Karyawan</a>
                <a href="#" class="footer-link">Manajemen Payroll</a>
                <a href="#" class="footer-link">Rekrutmen &amp; Jobsite</a>
                <a href="#" class="footer-link">Kehadiran &amp; Shift</a>
                <a href="#" class="footer-link">Cuti &amp; Absensi</a>
                <a href="#" class="footer-link">Mobile Admin</a>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-col-title mb-3">Kompensasi</h6>
                <a href="#" class="footer-link">BPJS Karyawan</a>
                <a href="#" class="footer-link">Benefit Karyawan</a>
                <a href="#" class="footer-link">PPh 21 / 26</a>
                <a href="#" class="footer-link">Evaluasi Kinerja</a>
                <a href="#" class="footer-link">Dasbor Analytics</a>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-col-title mb-3">Resource</h6>
                <a href="#" class="footer-link">Blog</a>
                <a href="#" class="footer-link">Kamus HR</a>
                <a href="#" class="footer-link">FAQ</a>
                <a href="#" class="footer-link">Kemitraan</a>
                <a href="#" class="footer-link">Program Referral</a>
            </div>
            <div class="col-6 col-lg-2">
                <h6 class="footer-col-title mb-3">Tentang Kami</h6>
                <a href="#" class="footer-link">Profil Perusahaan</a>
                <a href="#" class="footer-link">Karir</a>
                <a href="#" class="footer-link">Kebijakan Privasi</a>
                <a href="#" class="footer-link">Syarat &amp; Ketentuan</a>
                <a href="#" class="footer-link">Kontak Kami</a>
            </div>
        </div>
        <div class="footer-bottom text-center">
            © 2026 Bit HRMS · Business Intelligent for Talent · All Rights Reserved
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/fontawesome.min.js" integrity="sha512-ywaT8M9b+VnJ+jNG14UgRaKg+gf8yVBisU2ce+YJrlWwZa9BaZAE5GK5Yd7CBcP6UXoAnziRQl40/u/qwVZi4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // Fix mega menu on desktop: close when clicking outside
    document.addEventListener('click', function(e) {
        const megaWrap = document.querySelector('.mega-menu-wrapper');
        if (megaWrap && !megaWrap.contains(e.target)) {
            const bsDropdown = bootstrap.Dropdown.getInstance(megaWrap.querySelector('[data-bs-toggle="dropdown"]'));
            if (bsDropdown) bsDropdown.hide();
        }
    });

    // On mobile: keep mega menu as accordion (no positioning fix needed)
    // On desktop: make mega dropdown full-width relative to navbar
    function positionMegaMenu() {
        const navbar = document.querySelector('.navbar');
        const megaMenu = document.querySelector('.mega-menu-wrapper .dropdown-menu');
        if (!megaMenu || !navbar) return;

        if (window.innerWidth >= 992) {
            const navbarRect = navbar.getBoundingClientRect();
            const wrapRect = document.querySelector('.mega-menu-wrapper').getBoundingClientRect();
            megaMenu.style.left = (-wrapRect.left + navbarRect.left + 20) + 'px';
            megaMenu.style.width = (navbarRect.width - 40) + 'px';
            megaMenu.style.right = 'auto';
        } else {
            megaMenu.style.left = '';
            megaMenu.style.width = '';
        }
    }

    document.querySelector('.mega-menu-wrapper [data-bs-toggle="dropdown"]')
        .addEventListener('shown.bs.dropdown', positionMegaMenu);
    window.addEventListener('resize', positionMegaMenu);


    document.querySelectorAll(".faq-question").forEach(button => {

        button.addEventListener("click", () => {

            const item = button.parentElement

            document.querySelectorAll(".faq-item").forEach(faq => {
                if (faq !== item) {
                    faq.classList.remove("active")
                }
            })

            item.classList.toggle("active")

        })

    })
</script>

</body>

</html>