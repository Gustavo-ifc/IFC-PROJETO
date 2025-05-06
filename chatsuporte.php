<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat de Suporte</title>
  <link rel="stylesheet" href="css/chatsuporte.css">
</head>
<body>
  <div class="chat-container">
    <div class="chat-header">Chat suporte</div>
    <div class="chat-body" id="chat-body">
      <div class="message">
        <div class="user-icon">👤</div>
        <div class="message-text">Boa tarde! Como posso ajudá-lo hoje?</div>
      </div>
    </div>
    <div class="chat-footer">
      <input type="text" id="chat-input" placeholder="Digite aqui..." />
      <button id="send-button">➤</button>
    </div>
  </div>
  <script src="js/chat.js"></script>
</body>
</html>
