// Get a reference to the form and message list
const messageForm = document.getElementById("messageForm");
const messageList = document.getElementById("messageList");

// Function to create a new message item
function createMessageItem(messageText) {
  const li = document.createElement("li");
  li.classList.add("message-item");
  li.innerText = messageText;
  return li;
}

// Add event listener for form submission
messageForm.addEventListener("submit", function (event) {
  event.preventDefault();
  
  // Get the message text from the input
  const messageInput = document.getElementById("messageInput");
  const messageText = messageInput.value.trim();

  if (messageText !== "") {
    // Create a new message item and add it to the list
    const newMessage = createMessageItem(messageText);
    messageList.appendChild(newMessage);
    
    // Clear the input field after submission
    messageInput.value = "";

    // Here you'd typically send the data to your backend for storage in the database
    // Using AJAX, fetch, or a form submission to your server-side code
    // The backend will handle storing the data in MySQL
    // For example: 
     fetch('/your-backend-endpoint', {
      method: 'POST',
       body: JSON.stringify({ message: messageText }),
      headers: {
         'Content-Type': 'application/json'
       }
     })
     .then(response => {
        Handle response, update UI, etc.
     })
     .catch(error => {
       console.error('Error:', error);
     });
  }
});
