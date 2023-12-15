<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
        }

        .poll-container {
            margin-top: 20px;
        }

        .poll {
            margin-top: 20px;
        }

        h4 {
            color: #6c757d;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Poll Results</h2>

        @foreach($polls as $poll)
            <div class="poll">
                <h4>Poll ID: {{ $poll->publish_poll_id }}</h4>
                <ul>
                    @foreach($poll->votes as $vote)
                        <li>Option {{ $vote->option_number }}: {{ $vote->count() }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>

</body>
</html>
