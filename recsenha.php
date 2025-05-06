<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="css/recsenha.css">
</head>
<body>
    <div id="tela01" class="tela">
        <header>
            <h1>Recuperar senha</h1>
        </header>
        <main>
            <h2>Esqueceu a senha?</h2>
            <p>Redefina a senha em duas etapas</p>
            <label for="email">Qual seu e-mail de cadastro?</label>
            <input type="email" id="email" placeholder="Digite seu e-mail">
            <button onclick="mostrarTela02()">Enviar</button>
        </main>
    </div>

    <div id="tela02" class="tela oculto">
        
        <main>
            <h2 id="telarec">Acabamos de enviar um código para seu e-mail</h2>
            <p>Insira no campo abaixo o código de verificação de 5 dígitos enviado para seu e-mail.</p>
            <div class="codigo-container">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
                <input type="text" maxlength="1">
            </div>
            <button>Enviar</button>
            <p class="dica">Dica: Caso não encontre o e-mail na sua caixa de entrada, verifique a pasta de Spam!</p>
        </main>
    </div>

    <script src="js/recsenha.js"></script>
</body>
</html>
