
<head>
    <link rel="icon" href="{{ asset('images/fav.png') }}" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popupShare.css') }}">
</head>

<div class="menu">
    <a onclick="openModal(this)" data-post-id="{{ $slot }}" class="btn trigger"><i
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
