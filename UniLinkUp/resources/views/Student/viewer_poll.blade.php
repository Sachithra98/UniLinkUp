<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Poll System</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('css/sty.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        .main{
            flex:1 1 41rem;
            background: var(--light-bg);
            font-size: 1.75rem;
            padding:1rem 0;
            padding-left: 7rem;
            padding-right: 3rem;
            line-height: 2;
            color:var(--black);
        }


        .poll-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 8px;
            margin-bottom: 20px;
            background: var(--white);
        }

        /* .btn {
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
        } */

        /* .btn:hover {
            background-color: #0056b3;
        } */
    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    <div class="main">

        <!-- Loop through each publish poll -->
        @foreach ($publishPolls as $poll)
        <div class="poll-container">
            <h3 style="text-decoration: underline; font-weight: bold;">{{ $poll->poll_title }}</h3>
            <p>{{ $poll->poll_desc }}
            <h3>{{ $poll->question }}</h3>

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

            

       <!-- Add this script at the end of the body section, after the HTML content -->


       <script>
        document.addEventListener('DOMContentLoaded', function () {
            const publishPolls = @json($publishPolls);

            publishPolls.forEach(poll => {
                const totalVotes = poll.votes.reduce((total, vote) => total + vote.count, 0);
                const voteResultsElement = document.getElementById(`vote-results-${poll.id}`);

                voteResultsElement.innerHTML = '<h2>Poll Results</h2>';

                poll.options.forEach(option => {
                    const vote = poll.votes.find(vote => vote.choice === option) || { count: 0 };
                    const percentage = (totalVotes > 0) ? (vote.count / totalVotes) * 100 : 0;

                    voteResultsElement.innerHTML += `<p>${option}: ${percentage.toFixed(2)}% (${vote.count} votes)</p>`;
                });
            });
        });

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

                // Display updated vote results for the specific poll
                displayVoteResults(result.votes, pollId);
            })
            .catch(error => console.error('Error:', error));
        }

        function displayVoteResults(votes, pollId) {
            const voteResultsElement = document.getElementById(`vote-results-${pollId}`);
            voteResultsElement.innerHTML = '<h2>Poll Results</h2>';

            const totalVotes = votes.reduce((total, vote) => total + vote.count, 0);

            votes.forEach(vote => {
                const percentage = (totalVotes > 0) ? (vote.count / totalVotes) * 100 : 0;
                voteResultsElement.innerHTML += `<p>${vote.choice}: ${percentage.toFixed(2)}% (${vote.count} votes)</p>`;
            });
        }
    </script>





    </div>

      <!-- footer section starts -->
      @include('footer')
        <!-- footer section ends -->
        @section('scripts')
        <script src="{{ asset('js/your-js-file.js') }}"></script>
        @endsection
</body>

</html>
