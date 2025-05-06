<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/login.css">
<title>Login</title>

</head>
<body>
    <div class="container">
        <div id="login-form">
            <div class="form-header">
                <h2>Login</h2>
                <p>Bem-vindo de volta!</p>
            </div>
            <div class="form-group">
                <label for="login-email">Email</label>
                <input type="email" id="login-email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="login-password">Senha</label>
                <input type="password" id="login-password" placeholder="Digite sua senha">
            </div>
            <button class="btn" onclick="login()">Entrar</button>
            <span class="toggle-link" onclick="toggleForms()">Ainda não tem uma conta? Cadastre-se</span>
        </div>

        <div id="signup-form" style="display: none;">
            <div class="form-header">
                <h2>Cadastro</h2>
                <p>Crie sua conta</p>
            </div>
            <div class="form-group">
                <label for="signup-name">Nome</label>
                <input type="text" id="signup-name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="signup-email">Email</label>
                <input type="email" id="signup-email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
                <label for="signup-password">Senha</label>
                <input type="password" id="signup-password" placeholder="Crie uma senha">
            </div>
            <button class="btn" onclick="signup()">Cadastrar</button>
            <span class="toggle-link" onclick="toggleForms()">Já tem uma conta? Faça login</span>
        </div>
    </div>

    <script src="js/login.js"></script>
</body>
</html>
