<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        .poll-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <!-- Loop through each poll -->
    @foreach ($polls as $poll)
    <div class="poll-container">
        <h2>{{ $poll->question }}</h2>

        <!-- Loop through each choice of the poll -->
        @foreach (range(1, 5) as $index)
            @php
                $option = "option{$index}";
            @endphp
            @if (!empty($poll->$option))
                <button class="btn" onclick="vote('{{ $poll->$option }}', '{{ $poll->id }}')">{{ $poll->$option }}</button>
            @endif
        @endforeach

        <div id="result-{{ $poll->id }}"></div>
        <!-- Display vote results for each poll separately -->
        <div id="vote-results-{{ $poll->id }}"></div>
    </div>
    @endforeach

    <script>
        function vote(choice, pollId) {
            const url = '/api/vote';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({
                    choice: choice,
                    pollId: pollId
                }),
            })
            .then(response => response.json())
            .then(result => {
                const resultElement = document.getElementById(`result-${pollId}`);
                resultElement.innerHTML = `<p>Thank you for your vote! You voted: ${result.choice}</p>`;

                // Display vote results for each poll separately
                displayVoteResults(result.votes, pollId);
            })
            .catch(error => console.error('Error:', error));
        }

        // Function to display vote results
        function displayVoteResults(votes, pollId) {
            const voteResultsElement = document.getElementById(`vote-results-${pollId}`);
            voteResultsElement.innerHTML = '<h2>Poll Results</h2>';

            // Calculate total votes for the specific poll
            const totalVotes = votes.reduce((total, vote) => total + vote.count, 0);

            // Display results as percentages for the specific poll
            votes.forEach(vote => {
                const percentage = (vote.count / totalVotes) * 100;
                voteResultsElement.innerHTML += `<p>${vote.choice}: ${percentage.toFixed(2)}%</p>`;
            });
        }
    </script>
</body>

</html>
