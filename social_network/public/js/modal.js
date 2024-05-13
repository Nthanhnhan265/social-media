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