<!DOCTYPE html>
<html>

<head>
    <title>Create Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
        }

        .header h1 {
            font-weight: bold;
        }

        form {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px; /* Add some space between header and form */
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: blue;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            margin: auto; /* Center the form horizontally */
}

    </style>

</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Reviews Form</h1>
        </div>

        <div class="content">

            <form action="{{ route('reviews.store') }}" method="post">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" required>

                <br>
                <br>

                <label for="comment">Review:</label>
                <textarea name="comment" required></textarea>

                <button type="submit">Save</button>
            </form>
        </div>
    </div>

</body>

</html>
