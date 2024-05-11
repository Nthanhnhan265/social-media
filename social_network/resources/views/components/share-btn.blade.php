

<div class="menu">
    <a onclick="openModal(this)" data-post-id="{{ $slot }}" class="btn trigger share_modal"><i
    class="fa fa-share-alt"></i></a>
</div>

<script>
    function openModal(element) {
        const shareBtn = document.querySelector(".share_modal");
        shareBtn.style.display = 'block';

        const postId = element.getAttribute("data-post-id");
        //gán giá trị id bài post vào trong trường ẩn để xử lý khi submit
        document.getElementById('post_id').value = postId;
        console.log("psoid: ", postId);
    }

    function closeModal() {
                const shareBtn = document.querySelector(".share_modal");
                shareBtn.style.display = 'none';
            }
</script>
