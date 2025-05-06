const chatBody = document.getElementById('chat-body');
const chatInput = document.getElementById('chat-input');
const sendButton = document.getElementById('send-button');

sendButton.addEventListener('click', sendMessage);

chatInput.addEventListener('keypress', function (e) {
  if (e.key === 'Enter') {
    sendMessage();
  }
});

function sendMessage() {
  const messageText = chatInput.value.trim();

  if (messageText === '') return;

  const messageDiv = document.createElement('div');
  messageDiv.classList.add('message', 'user-message');
  messageDiv.innerHTML = `
    <div class="user-icon">👤</div>
    <div class="message-text">${messageText}</div>
  `;
  chatBody.appendChild(messageDiv);

  chatInput.value = '';
  chatBody.scrollTop = chatBody.scrollHeight;
}
