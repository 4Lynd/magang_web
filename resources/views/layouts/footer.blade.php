<!-- JS Files -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('assets/vendor/toastify/toastify.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const toggleBtn = document.getElementById("toggle-sidebar");
        const sidebar = document.getElementById("sidebar");
        if (toggleBtn && sidebar) {
            toggleBtn.addEventListener("click", function () {
                sidebar.classList.toggle("active");
            });
        }
    });
</script>

                    <!-- App footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
					</div>
					<!-- App footer end -->
