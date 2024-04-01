<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/theme-color/dashboard.css")}}" rel="stylesheet">
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        <div class="back-to-dashboard">
            <a href="dashboard" class="btn btn-primary">Back to Dashboard</a>
        </div>
    @endif
<form action="{{ route('upload.store')}}" method="POST" enctype="multipart/form-data" class="form-container">
    @csrf
    <div>
        <label for="title">Title</Title>:</label>
        <textarea name="title" id="title" cols="30" rows="5"></textarea>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
    </div>
    <div>
    <label for="thumbnail">Thumbnail:</label>
        <input type="file" class="form-control" id="thumbnail" name="thumbnail" onchange="previewThumbnail(event)">
        <img id="thumbnail-preview" src="#" alt="Thumbnail Preview" style="display: none; max-width: 200px; max-height: 200px;">
    </div>
    <div>
    <label for="images">Upload House Images:</label>
        <input type="file" class="form-control" id="images" name="images[]" multiple onchange="previewImages(event)">
        <div id="image-previews"></div>
    </div>
    <button type="submit">Upload</button>
</form>

<script>
    function previewThumbnail(event) {
        const thumbnailPreview = document.getElementById('thumbnail-preview');
        thumbnailPreview.style.display = 'block';
        thumbnailPreview.src = URL.createObjectURL(event.target.files[0]);
    }

    function previewImages(event) {
        const imagePreviews = document.getElementById('image-previews');
        imagePreviews.innerHTML = '';

        for (let i = 0; i < event.target.files.length; i++) {
            const file = event.target.files[i];
            const img = document.createElement('img');
            const span = document.createElement('span');

            img.src = URL.createObjectURL(file);
            img.alt = 'Image Preview';
            img.style.maxWidth = '80px';
            img.style.maxHeight = '80px';
            span.textContent = file.name;

            const container = document.createElement('div');
            container.appendChild(img);
            container.appendChild(span);

            imagePreviews.appendChild(container);
        }
    }
</script>

</body>
</html>

