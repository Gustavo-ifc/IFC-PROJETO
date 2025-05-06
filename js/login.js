function toggleForms() {
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');
    if (loginForm.style.display === 'none') {
        loginForm.style.display = 'block';
        signupForm.style.display = 'none';
    } else {
        loginForm.style.display = 'none';
        signupForm.style.display = 'block';
    }
}

function login() {
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;
    
    
    if (email && password) {
        
        window.location.href = 'paginaprincipal.php';
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}

function signup() {
    const name = document.getElementById('signup-name').value;
    const email = document.getElementById('signup-email').value;
    const password = document.getElementById('signup-password').value;
    
    if (name && email && password) {
        alert(`Conta criada para: ${name}`);
        toggleForms(); 
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}