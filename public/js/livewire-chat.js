// function sendMessage() {
//     var message = document.getElementById("user-input").value.trim();
//     if (message !== "") {
//         var chatMessages = document.getElementById("chat-messages");
//         var newMessage = document.createElement("div");
//         newMessage.textContent = message;
//         chatMessages.appendChild(newMessage);
//         document.getElementById("user-input").value = "";
//         // chatMessages.scrollTop = chatMessages.scrollHeight;
//     }
// }

// function sendMessage() {
//     var messageInput = document.getElementById("user-input");
//     var message = messageInput.value;

//     if (message.trim() !== "") {
//         var chatContainer = document.getElementById("chatbox");
//         var chatMessage = document.getElementById("chat-messages");

//         var newMessage = document.createElement("div");
//         newMessage.textContent = message;
//         newMessage.classList.add("chat-messages");
//         newMessage.style.textAlign = "right";

//         chatMessage.insertAdjacentElement("beforeend", newMessage);

//         messageInput.value = "";
//     }
// }

// Oh, saya paham sekarang. Anda ingin pesan muncul di bagian bawah chat-container dan kemudian naik ke atas saat pesan baru ditambahkan. Untuk melakukan ini, kita perlu melakukan beberapa perubahan dalam gaya CSS dan logika JavaScript. Mari kita lihat:

// JavaScript (script.js):

// javascript
// Copy code
// function sendMessage() {
//     var messageInput = document.getElementById("user-input");
//     var message = messageInput.value;

//     if (message.trim() !== "") {
//         var chatContainer = document.getElementById("chatbox");

//         var newMessage = document.createElement("div");
//         newMessage.textContent = message;
//         newMessage.classList.add("chat-message");
//         newMessage.style.textAlign = "right";

//         chatContainer.appendChild(newMessage);

//         // Hapus pesan pertama jika jumlah pesan melebihi 10
//         var chatMessages = chatContainer.getElementsByClassName("chat-message");
//         if (chatMessages.length > 10) {
//             chatContainer.removeChild(chatMessages[0]);
//         }

//         // Gulir ke atas untuk menampilkan pesan baru
//         chatContainer.scrollTop = 0;

//         messageInput.value = "";
//     }
// }

function sendMessage() {
    var messageInput = document.getElementById("user-input");
    var message = messageInput.value;

    if (message.trim() !== "") {
        var chatContainer = document.getElementById("chatbox");
        var chatMessages = document.getElementById("chat-messages");

        var newMessage = document.createElement("div");
        newMessage.textContent = message;
        newMessage.classList.add("chat-message");
        newMessage.style.textAlign = "right";

        chatMessages.appendChild(newMessage);

        // Hapus pesan pertama jika jumlah pesan melebihi 10
        var messages = chatMessages.getElementsByClassName("chat-message");
        if (messages.length > 10) {
            chatMessages.removeChild(messages[0]);
        }

        // Gulir ke atas untuk menampilkan pesan baru
        chatContainer.scrollTop = chatContainer.scrollHeight;

        messageInput.value = "";
    }
}
