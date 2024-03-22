<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <link href="{{ asset("House_Hunting\House_hunting/Home_Property/css/theme-color/dashboard.css")}}" rel="stylesheet">
</head>
<body>
<form action="{{ route('upload.store') }}" method="POST" enctype="multipart/form-data" class="form-container">
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
        <label for="images">Upload Images:</label>
        <input type="file" name="images[]" id="images" multiple>
    </div>
    <button type="submit">Upload</button>
</form>

</body>
</html>

