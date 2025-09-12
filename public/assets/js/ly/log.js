function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.className = "bi bi-eye-slash";
    } else {
        passwordInput.type = "password";
        toggleIcon.className = "bi bi-eye";
    }
}

// Form validation and smooth interactions
document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll(".form-control-custom");

    inputs.forEach((input) => {
        input.addEventListener("focus", function () {
            this.parentElement.classList.add("focused");
        });

        input.addEventListener("blur", function () {
            if (!this.value) {
                this.parentElement.classList.remove("focused");
            }
        });

        input.addEventListener("input", function () {
            if (this.value) {
                this.parentElement.classList.add("has-value");
            } else {
                this.parentElement.classList.remove("has-value");
            }
        });
    });

    // Smooth form submission
    form.addEventListener("submit", function (e) {
        e.preventDefault();
        const submitBtn = form.querySelector(".btn-login");
        const originalText = submitBtn.innerHTML;

        submitBtn.innerHTML =
            '<i class="bi bi-hourglass-split me-2"></i>Memproses...';
        submitBtn.disabled = true;

        // Simulate loading
        setTimeout(() => {
            submitBtn.innerHTML =
                '<i class="bi bi-check-circle me-2"></i>Berhasil!';
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 1000);
        }, 2000);
    });
});
