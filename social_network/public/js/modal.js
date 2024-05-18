function openEditModal(commentId, content, images) {
    // Set comment content
    document.getElementById('commentContent').value = content;
    // Set comment ID
    document.getElementById('commentId').value = commentId;
    // Display modal
    $('#editCommentModal').modal('show');
}

function saveEditedComment() {
    // Code to save edited comment goes here
    // You can use AJAX to send the edited data to the server
    // After successful update, close the modal
    $('#editCommentModal').modal('hide');
}
// document.addEventListener('DOMContentLoaded', function() {
//     $('#editCommentModal-{{$commenter->comment_id}}').on('show.bs.modal', function (event) {
//         var button = $(event.relatedTarget); // Button that triggered the modal
//         var content = button.data('content'); // Extract info from data-* attributes
//         var images = button.data('images'); // Assuming images is a JSON string

//         var modal = $(this);
//         modal.find('.modal-body textarea').val(content);

//         // Clear existing images in the modal
//         var imageContainer = modal.find('.modal-body #comment-images-{{$commenter->comment_id}}');
//         imageContainer.empty();

//         // Append new images
//         images.forEach(function(image) {
//             var imgElement = $('<img>').attr('src', '{{asset("storage/images")}}/' + image.url).addClass('img-fluid mb-2');
//             imageContainer.append(imgElement);
//         });
//     });
// });
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.edit-comment').forEach(function(button) {
        button.addEventListener('click', function(event) {
            var commentId = this.getAttribute('data-id');
            var content = this.getAttribute('data-content');
            var images = JSON.parse(this.getAttribute('data-images'));
            var videos = JSON.parse(this.getAttribute('data-videos'));

            var form = document.getElementById('editCommentForm-' + commentId);
            form.action = '/comments/' + commentId;

            var contentField = document.getElementById('comment-content-' + commentId);
            contentField.value = content;

            var imagesContainer = document.getElementById('comment-images-' + commentId);
            imagesContainer.innerHTML = '';
            images.forEach(function(image) {
                var imgElement = document.createElement('img');
                imgElement.src = '{{asset("storage/images/")}}/' + image.url;
                imgElement.classList.add('img-fluid', 'mb-2');
                imgElement.alt = 'Image';
                imagesContainer.appendChild(imgElement);
            });

            var videosContainer = document.getElementById('comment-videos-' + commentId);
            videosContainer.innerHTML = '';
            videos.forEach(function(video) {
                var videoElement = document.createElement('video');
                videoElement.controls = true;
                var sourceElement = document.createElement('source');
                sourceElement.src = '{{asset("storage/videos/")}}/' + video.url;
                videoElement.appendChild(sourceElement);
                videosContainer.appendChild(videoElement);
            });
        });
    });
});
