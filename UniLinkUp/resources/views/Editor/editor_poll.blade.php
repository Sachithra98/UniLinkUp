<!DOCTYPE html>
<html lang="en">
    <!-- Start-piyumi -->
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

        #poll-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
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
<div id="poll-container">
        <h2>Do you want to buy this Item?</h2>
        <button class="btn" onclick="vote('buy')">I will buy</button>
        <button class="btn" onclick="vote('not-buy')">I will not buy</button>
        <button class="btn" onclick="vote('may-buy')">I may buy</button>

        <div id="result"></div>
        <!-- Display vote results -->
        <div id="vote-results"></div>
    </div>

    <script>
        function vote(choice) {
            const url = '/api/vote';

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ choice: choice }),
            })
            .then(response => response.json())
            .then(result => {
                document.getElementById('result').innerHTML = `<p>Thank you for your vote! You voted: ${result.choice}</p>`;
            })
            .catch(error => console.error('Error:', error));
        }
    </script>


            <!-- Add a new div to display vote results -->
<div id="vote-results"></div>

<script>
    function vote(choice) {
        const url = '/api/vote';

        fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ choice: choice }),
        })
        .then(response => response.json())
        .then(result => {
            document.getElementById('result').innerHTML = `<p>Thank you for your vote! You voted: ${result.choice}</p>`;

            // Display vote results
            displayVoteResults(result.votes);
        })
        .catch(error => console.error('Error:', error));
    }

    // Function to display vote results
    function displayVoteResults(votes) {
        const voteResultsElement = document.getElementById('vote-results');
        voteResultsElement.innerHTML = '<h2>Poll Results</h2>';

        // Calculate total votes
        const totalVotes = votes.reduce((total, vote) => total + vote.count, 0);

        // Display results as percentages
        votes.forEach(vote => {
            const percentage = (vote.count / totalVotes) * 100;
            voteResultsElement.innerHTML += `<p>${vote.choice}: ${percentage.toFixed(2)}%</p>`;
        });
    }
</script>

</body>
<!-- end-piyumi -->
</html>
