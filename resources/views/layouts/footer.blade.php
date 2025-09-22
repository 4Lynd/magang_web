
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
