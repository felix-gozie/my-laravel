
<!-- resources/views/formupload.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>File Upload Form</h2>

    <!-- Display success message -->
    @if (session('success'))
        <div>{{ session('success') }}</div>
        <p>File Path: {{ session('filePath') }}</p>
    @endif

    <!-- Display error message -->
    @if (session('error'))
        <div>{{ session('error') }}</div>
    @endif

    <!-- File Upload Form -->
    <form action="{{ route('file.upload.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <input type="file" name="image" id="image"><br><br>
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="price" placeholder="Price"><br><br>
        <label for="description">Description:</label><br>
        <textarea name="description" id="description" required></textarea><br><br>
        
        <!-- Display validation errors -->
        @error('image')
            <div>{{ $message }}</div>
        @enderror
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        @error('price')
            <div>{{ $message }}</div>
        @enderror
        @error('description')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Upload</button>
    </form>
</body>
</html>
