function fetchAndDisplayMessages() {
    fetch('/get-messages')
      .then(response => response.json())
      .then(data => {
        const messageList = document.getElementById("messageList");
        messageList.innerHTML = '';
        
        data.forEach(message => {
          const li = document.createElement("li");
          li.textContent = message.message;
          messageList.appendChild(li);
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }
  
  // Fetch and display messages when the page loads
  window.onload = function() {
    fetchAndDisplayMessages();
  };
  