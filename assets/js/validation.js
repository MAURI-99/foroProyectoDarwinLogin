document.addEventListener('DOMContentLoaded', () => {
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    
    document.querySelectorAll('.toggle-password').forEach(btn => {
        btn.addEventListener('click', () => {
            const target = document.getElementById(btn.getAttribute('data-target'));
            if (target.type === "password") {
                target.type = "text";
                btn.textContent = "🙈";
            } else {
                target.type = "password";
                btn.textContent = "👁";
            }
        });
    });

    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            const phone = registerForm.phone.value.trim();
            const password = registerForm.password.value.trim();
            const confirm = registerForm.confirm_password.value.trim();
            const mensaje = document.getElementById('mensaje-error');

            
            if (isNaN(phone)) {
                mensaje.textContent = "El teléfono debe contener solo números.";
                e.preventDefault();
                return;
            }

            
            const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$&.])[A-Za-z\d@$&.]{8,16}$/;
            if (!regex.test(password)) {
                mensaje.textContent = "La contraseña debe tener 8-16 caracteres, con mayúscula, minúscula, número y uno de estos: @ $ & .";
                e.preventDefault();
                return;
            }

           
            if (password !== confirm) {
                mensaje.textContent = "❌ Las contraseñas no coinciden.";
                e.preventDefault();
                return;
            }

            mensaje.textContent = ""; 
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            const email = loginForm.email.value.trim();
            const password = loginForm.password.value.trim();

            if (!email.includes("@") || password.length < 6) {
                alert("Correo inválido o contraseña demasiado corta.");
                e.preventDefault();
            }
        });
    }
});













