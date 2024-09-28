// Get the elements
var chatWindow = document.getElementById("chatWindow");
var toggleChatLink = document.getElementById("toggleChatLink");
var closeChatBtn = document.getElementById("closeChatBtn");

// Toggle the chat window when the "Tin nhắn" link is clicked
toggleChatLink.addEventListener("click", function() {
    if (chatWindow.style.display === "none" || chatWindow.style.display === "") {
        chatWindow.style.display = "block"; // Show the chat window
    } else {
        chatWindow.style.display = "none"; // Hide the chat window
    }
});

// Close the chat window when the close button is clicked
closeChatBtn.addEventListener("click", function() {
    chatWindow.style.display = "none"; // Hide the chat window
});
