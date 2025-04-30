document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');
    const mensajeError = document.getElementById('mensaje-error');

    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            const phone = registerForm.phone.value.trim();
            const password = registerForm.password.value.trim();
            const confirmPassword = registerForm.confirm_password.value.trim();

            if (isNaN(phone)) {
                mensajeError.textContent = "❌ El teléfono debe contener solo números.";
                e.preventDefault();
                return;
            }

            if (password.length < 6) {
                mensajeError.textContent = "❌ La contraseña debe tener mínimo 6 caracteres.";
                e.preventDefault();
                return;
            }

            if (password !== confirmPassword) {
                mensajeError.textContent = "❌ Las contraseñas no coinciden.";
                e.preventDefault();
                return;
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            const email = loginForm.email.value.trim();
            const password = loginForm.password.value.trim();

            if (!email.includes("@")) {
                alert("Correo electrónico no válido.");
                e.preventDefault();
                return;
            }

            if (password.length < 6) {
                alert("La contraseña debe tener al menos 6 caracteres.");
                e.preventDefault();
                return;
            }
        });
    }

    // Mostrar/ocultar contraseñas
    document.querySelectorAll(".toggle-password").forEach(btn => {
        btn.addEventListener("click", () => {
            const targetId = btn.getAttribute("data-target");
            const input = document.getElementById(targetId);

            if (input.type === "password") {
                input.type = "text";
                btn.textContent = "🙈";
            } else {
                input.type = "password";
                btn.textContent = "👁";
            }
        });
    });
});
