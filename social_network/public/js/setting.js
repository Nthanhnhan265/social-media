var isMenuOpen = false; 

function toggleMenu() {
    var menu = document.getElementById("menu-setting");
    if (!isMenuOpen) {
        menu.style.display = "block";
        isMenuOpen = true;
    } else {
        menu.style.display = "none";
        isMenuOpen = false;
    }
}

document.addEventListener("click", function(event) {
    var menu = document.getElementById("menu-setting");
    var setting = document.querySelector(".setting");
    if (!setting.contains(event.target) && !menu.contains(event.target)) {
        menu.style.display = "none";
        isMenuOpen = false;
    }
});

// cài đặt thời gian ẩn success 
var successMessage = document.getElementById('successMessage');
if(successMessage) {
    setTimeout(function() {
        successMessage.style.display = 'none';
    }, 2500); 
}





// 
$(document).ready(function() {
    $('.like').click(function() {
        var postId = $(this).data('post-id');
        toggleLike(postId, 1);
        value = document.querySelector('#like'+postId); 
        $(this).css('color', 'green');
        value.textContent = parseInt(value.textContent) + 1; 
    });
    
    $('.dislike').click(function() {
        var postId = $(this).data('post-id');
        toggleLike(postId, 0);
        $(this).css('color', 'red');
        value = document.querySelector('#dislike'+postId); 
        value.textContent = parseInt(value.textContent) + 1; 
    });
    
    function toggleLike(postId, status) {
        $.ajax({
            url: '/likepost',
            type: 'POST',
            data: {
                
                postId: postId,
                status: status,
                _token: document.getElementsByName("_token")[0].value
            },
            success: function(response) {

                // Handle success response, e.g., update UI
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    }
});
    // Giới hạn từ cho description 
    var textarea = document.getElementById('description');
    var charCount = document.getElementById('char-count');
    
    textarea.addEventListener('input', function() {
        var remaining = 20 - this.value.length;
        charCount.textContent = remaining + ' characters remaining';
        
        if (remaining < 0) {
            charCount.style.color = 'red'; 
        } else {
            charCount.style.color = 'black';
        }
    });



    // 
    
  

