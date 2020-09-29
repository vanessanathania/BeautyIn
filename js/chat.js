$('#sendMessage').on("click", function() {
    var message = $('#messageBox').val();
    sendMessage(message);
})

$("#messageBox").keyup(function(e) {
    var code = e.key;
    if (code === "Enter") {
        var message = $('#messageBox').val();
        sendMessage(message);
    }
});

function sendMessage(message) {
    var to_email = sessionStorage.getItem("to_email");
    var email = sessionStorage.getItem("email");
    if (to_email != null) {
        var data = JSON.stringify({
            "type": "send_chat",
            "email": email.replace(/ /g, ''),
            "to_email": to_email,
            "message": message
        });

        $('#messageBox').val("")
        $.post('backend-chat.php', data, function(response) {
            var result = JSON.parse(response);
            if (result == 1) {
                refreshChatList();
            }
        });
    } else {
        alert("Tolong pilih contact");
    }

}

function setChatBox(element) {
    var to_email = $(element).data("email");
    sessionStorage.setItem("to_email", to_email);
    refreshChatList();
}

$(document).ready(function() {
    var email = sessionStorage.getItem("email");
    if (email == null) {
        alert("Mohon untuk login terlebih dahulu");
        location.href = "index.php"
    }
    var role = sessionStorage.getItem("role");
    var data = JSON.stringify({
        "type": "all_users",
        "email": email,
        "role" :role
    });
    

    $.post('backend-chat.php', data, function(response) {
        var result = JSON.parse(response);
        var sender = sessionStorage.getItem("email").replace(/ /g, '');

        var content = "";

        result.forEach(element => {
            if (element.email != sender) {
                content += '<div class="card" style="cursor: pointer;" onclick="setChatBox(this)" data-email="' + element.email + '">';
                content += '<div class="card-body text-right">' + element.name + ' | ' + element.email + ' <i class="fas fa-angle-right"></i></div>';
                content += '</div>';
            }
        });
        $('#userList').html(content);
    });
});

$(document).ready(function() {
    refreshChatList();
});

function refreshChatList() {
    var email = sessionStorage.getItem("email");
    var data = JSON.stringify({
        "type": "all_chats",
        "email": email
    });


    $.post('backend-chat.php', data, function(response) {
        var result = JSON.parse(response);
        var content = "";
        var hasChat = false;

        var to_email = sessionStorage.getItem("to_email");
        if (to_email != null) {
            result.forEach(element => {
                var my_email = email.replace(/ /g, '');
                var from_user = element.from_user.replace(/ /g, '');

                if (my_email == from_user && to_email == element.to_user) {
                    content += '<div class="card my-2">';
                    content += '<div class="card-body">';
                    content += '<div class="font-weight-bold">' + element.from_user + '</div>';
                    content += '<span>' + element.chat_message + '</span><div class="text-right font-weight-light">' + element.timestamp + '</div>';
                    content += '</div></div>';

                    hasChat = true;
                }


                if (my_email == element.to_user && to_email == from_user) {
                    content += '<div class="card my-2">';
                    content += '<div class="card-body">';
                    content += '<div class="font-weight-bold">' + element.from_user + '</div>';
                    content += '<span>' + element.chat_message + '</span><div class="text-right font-weight-light">' + element.timestamp + '</div>';
                    content += '</div></div>';

                    hasChat = true;
                }
            });
            result.forEach(element => {


            });
            if (!hasChat) {
                content += "Chat Kosong";
            }
            $('#chatList').html(content);
        }
    });
}

setInterval(function() { refreshChatList(); }, 1000);