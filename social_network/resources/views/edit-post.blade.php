<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS */
        body {
            background-color: #f8f9fa;
        }

        .edit-post-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .form-title {
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .form-control {
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #0056b3;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #007bff;
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 15px;
        }

        .image-container img {
            width: 49%;
            margin-bottom: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        .video-container video {
            width: 49%;
            margin-bottom: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
        }

        .image-container input[type="file"],
        .video-container input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 1px solid #007bff;
            color: #007bff;
            background-color: transparent;
            border-radius: 5px;
            padding: 8px 12px;
            cursor: pointer;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .custom-file-upload:hover {
            background-color: #007bff;
            color: #fff;
        }

        .image,
        .video {
            border: none;
        }
    </style>
</head>

<body>
<div class="container">
        <div class="edit-post-container">
            <h2 class="form-title">Edit Post</h2>
            <form action="{{ url('update-post/'.$post->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="type" value="{{!empty($isInGroup)? $isInGroup->group_id_fk : ''}}">

                <div class="form-group">
                    <label for="post_content">Post Content:</label>
                    <textarea class="form-control" id="post_content" name="content" rows="4"
                        placeholder="Write something...">{{$post->content }}</textarea>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <div class="image-container" id="image-container">
                        @foreach($images as $image)
                            <img src="{{ asset('storage/images/'.$image->url) }}" alt="Selected Image">
                        @endforeach
                    </div>
                    <label for="imgFileSelected" class="custom-file-upload">Choose Image</label>
                    <input type="file" name="imgFileSelected[]" id="imgFileSelected" multiple accept="image/*">
                </div>
                <div class="form-group">
                    <label for="video">Video:</label>
                    <div class="video-container" id="video-container">
                        @foreach($videos as $video)
                            <video controls>
                                <source src="{{ asset('storage/videos/'.$video->url) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        @endforeach
                    </div>
                    <label for="vdFileSelected" class="custom-file-upload">Choose Video</label>
                    <input type="file" name="vdFileSelected[]" id="vdFileSelected" multiple accept="video/*">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('imgFileSelected').addEventListener('change', function(event) {
            var files = event.target.files;
            var imageContainer = document.getElementById('image-container');
            
            // Clear existing images
            imageContainer.innerHTML = '';

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '49%';
                    img.style.marginBottom = '10px';
                    img.style.border = '2px solid #007bff';
                    img.style.borderRadius = '5px';
                    imageContainer.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        });

        document.getElementById('vdFileSelected').addEventListener('change', function(event) {
            var files = event.target.files;
            var videoContainer = document.getElementById('video-container');
            
         
            videoContainer.innerHTML = '';

            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                var reader = new FileReader();

                reader.onload = function(e) {
                    var video = document.createElement('video');
                    video.controls = true;
                    video.src = e.target.result;
                    video.style.width = '50%';
                    video.style.marginBottom = '10px';
                    video.style.border = '2px solid #007bff';
                    video.style.borderRadius = '5px';
                    videoContainer.appendChild(video);
                };

                reader.readAsDataURL(file);
            }
        });
    });
</script>

</body>

</html>
