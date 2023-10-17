<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/viewer_upload.css') }}">
    <title>Upload Photos</title>
</head>
<body>
        <div class="container">
          <div class="left-container">
            <button class="back-button">Back</button>
            <h1>Upload Photos</h1>
            <form action="<?=url('')?>"> method="post">
                @csrf
                <label for="postId">Post ID:</label>
                <input type="text" id="postId" name="postId" required>
                <label for="eventTitle">Event Title:</label>
                <input type="text" id="eventTitle" name="eventTitle" required>
                <p><b>Upload Photos</b></p>
                <p class="description">You can only upload two photos.</p>
                <input type="file" id="fileInput" name="fileInput" accept="image/*" required>
                <div class="button-container">
                    <input type="submit" value="Submit" class="submit-button">
                    <button class="cancel-button">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

