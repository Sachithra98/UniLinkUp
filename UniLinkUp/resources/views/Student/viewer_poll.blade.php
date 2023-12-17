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



        .notice-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd; /* Border color */
        border-radius: 8px;
        margin-bottom: 20px;
        margin-top: 20px;
        background: #fff; /* Background color */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Box shadow for a subtle lift */
    }

    .notice-container .Nheader {
        background: #fff; /* Background color */
        border: 1px solid #ddd; /* Border color */
        text-align: left;

    }

    .notice-container span {
        display: block;
        color: #666; /* Date text color */
        font-size: 14px;
        margin-bottom: 10px;
    }

    .notice-container h5 {
        color: #333; /* Notice Id text color */
        margin-bottom: 10px;
    }

    .notice-container h3 {
        color: #000; /* Title text color */
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .notice-container p {
        color: #333; /* Description text color */
        margin-bottom: 10px;
        
    }

    .notice-container img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
        border-radius: 4px; /* Optional: Add border radius to the image */
    }

    .buttons {
        display: flex;
        justify-content: space-around;
        margin-top: 10px;
        background: #CFCFCF;
    }

    .btn {
        background-color: #3490dc; /* Button background color */
        color: #fff; /* Button text color */
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #2779bd; /* Button background color on hover */
    }

    /* Optional: Style font awesome icons */
    .fa {
        margin-right: 5px;
    }

    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

    <!-- taskbar section starts -->

    @include('Student/viewer_task')

	<!-- taskbar section ends -->


    <div class="back" >
        <a href="<?=url('viewer')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

    <div class="main">

    <h2 style="text-decoration: underline;">Published Polls</h2>

        <!-- Loop through each publish poll -->
        @foreach ($publishPolls->reverse() as $poll)
        <div class="notice-container">
        <div class="Nheader">
            <span>Created on: {{ $poll->created_at->format('Y-m-d') }}</span>
        </div>
            <h3 style="text-decoration: underline; font-weight: bold;">{{ $poll->poll_title }}</h3>
            <p>{{ $poll->poll_desc }}</p>
            <img src="/uploads/{{ $poll->media_path }}" width='400' height='400' class="image"/>
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
    

    console.log('Publish Polls:', publishPolls);

    publishPolls.forEach(poll => {
        console.log('Processing Poll:', poll);

        const totalVotes = poll.votes.reduce((total, vote) => total + vote.count, 0);
        const voteResultsContainer = document.getElementById(`vote-results-container-${poll.id}`); // Use poll ID

        if (!voteResultsContainer) {
            console.error(`Vote Results Container not found for Poll ID: ${poll.id}`);
            return;
        }

        const voteResultsElement = document.createElement('div');
        voteResultsElement.innerHTML = '<h2>Poll Results</h2>';

        poll.options.forEach(option => {
            const vote = poll.votes.find(vote => vote.choice === option) || { count: 0 };
            const percentage = (totalVotes > 0) ? (vote.count / totalVotes) * 100 : 0;

            console.log(`Option: ${option}, Percentage: ${percentage.toFixed(2)}%, Votes: ${vote.count}`);

            voteResultsElement.innerHTML += `<p>${option}: ${percentage.toFixed(2)}% (${vote.count} votes)</p>`;
        });

        voteResultsContainer.appendChild(voteResultsElement);
    });
});


        function vote(choice, pollId) {
            const url = '/vote';

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
