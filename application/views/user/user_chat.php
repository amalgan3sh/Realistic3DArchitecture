<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Automatic Chat Bot</title>
<!-- Include jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- Include Owl Carousel script -->
<script src="path/to/owl.carousel.js"></script>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .chat-container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .chat-messages {
        height: 200px;
        overflow-y: auto;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
    }
    .chat-input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-top: 10px;
    }
    .send-btn {
        width: 100%;
        padding: 8px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="chat-container">
    <div class="chat-messages" id="chatMessages">
        <p>Welcome to Automatic Chat Bot! How can I help you?</p>
    </div>
    <input type="text" class="chat-input" id="messageInput" placeholder="Type your message...">
    <button class="send-btn" onclick="sendMessage()">Send</button>
</div>

<script>
function sendMessage() {
    var messageInput = document.getElementById("messageInput");
    var message = messageInput.value.trim();
    
    if (message !== "") {
        // Append the user message to the chat messages container
        var chatMessages = document.getElementById("chatMessages");
        var userMessageElement = document.createElement("div");
        userMessageElement.textContent = "You: " + message;
        chatMessages.appendChild(userMessageElement);
        
        // Generate a response from the automatic chat bot
        var botResponse = generateBotResponse();
        var botMessageElement = document.createElement("div");
        botMessageElement.textContent = "Bot: " + botResponse;
        chatMessages.appendChild(botMessageElement);
        
        // Clear the input field
        messageInput.value = "";
        
        // Scroll to the bottom of the chat messages container
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }
}

function generateBotResponse() {
    // Predefined list of responses
    var responses = [
        "I'm sorry, I can't assist you right now.",
        "Please try again later.",
        "Thank you for your message.",
        "I appreciate your feedback.",
        "Let me check that for you.",
        "I'm not sure, but I'll do my best to help.",
        "How can I assist you further?"
    ];
    
    // Select a random response from the list
    var randomIndex = Math.floor(Math.random() * responses.length);
    return responses[randomIndex];
}
</script>
</body>
</html>
