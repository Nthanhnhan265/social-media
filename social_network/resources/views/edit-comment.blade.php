<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Comment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5>Edit Comment</h5>
        </div>
        <div class="card-body">
            <form id="editCommentForm-{{$comment->comment_id}}" method="POST" action="{{route('comments.update', $comment->comment_id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="comment-content-{{$comment->comment_id}}" class="col-form-label">Content:</label>
                    <textarea class="form-control" id="comment-content-{{$comment->id}}" name="content">{{$comment->content}}</textarea>
                </div>
                <div class="form-group">
                <label for="imgFileSelected" class="custom-file-upload">Choose Image</label>
                    <input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
                    <div id="comment-images-{{$comment->comment_id}}" class="mt-2">
                        @foreach ($comment->image as $img)
                            <img src="{{asset('storage/images/' . $img->url)}}" class="img-fluid mb-2" alt="Image">
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="comment-videos-{{$comment->comment_id}}" class="col-form-label">Videos:</label>
                    <input type="file" name="vdFileSelected[]" multiple>
                    <div id="comment-videos-{{$comment->id}}" class="mt-2">
                        @foreach ($comment->video as $vi)
                            <video controls class="mb-2" style="width: 100%;">
                                <source src="{{asset('storage/videos/' . $vi->url)}}" type="video/mp4">
                            </video>
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
