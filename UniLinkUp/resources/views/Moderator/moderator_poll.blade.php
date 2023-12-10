<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Poll Requests</title>

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

        .main .con{
            border: 1px solid black;
            border-radius: 8px;
            
            margin-bottom: 20px;
            margin-top: 20px;
            background: var(--light-white);
        }


        .poll-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            border: 1px solid black;
            border-radius: 8px;
            margin-bottom: 20px;
            margin-top: 20px;
            background: var(--white);
        }

        
    </style>
</head>

<body>


    <!-- header section starts -->
    @include('header')
	<!-- header section ends -->

<div class="main">

    <div class="back" >
        <a href="<?=url('moderator')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
    </div>

        <!-- Loop through each poll -->
        @foreach ($polls as $poll)
        <div class="con">
            <h2 style="text-decoration: underline;">Poll Request for Publish</h2>
            <div class="poll-container">
                <h5>Poll Id:{{$poll->id}}</h5>
                <h3 style=" font-weight: bold;">{{ $poll->poll_title }}</h3>
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

        
            <form action="{{ route('add-to-publish-poll', ['pollId' => $poll->id]) }}" method="POST">
                @csrf

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success')}}
                    </div>
                @endif

                <div class="moderator" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                    <button class="btn denied-btn" onclick="window.location='{{ route("moderator_denied_poll") }}'" style="margin-left: 1rem; background-color: red;">Denied Request</button>
                    <button class="btn" style="margin-left: 1rem; background-color: #404ca0;" type="submit">Accept Request and Publish Poll</button> 
                </div>
            </form>


        </div>
        @endforeach

    
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deniedButtons = document.querySelectorAll('.denied-btn');

        deniedButtons.forEach(button => {
            button.addEventListener('click', function () {
                const pollId = this.dataset.pollId;

                // Send an AJAX request to the server to update the denieds table
                // You need to adjust the URL and other parameters based on your actual routes and requirements
                fetch(`/update-denied/${pollId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Add CSRF token if needed
                    },
                    body: JSON.stringify({ poll_id: pollId }),
                })
                .then(response => response.json())
                .then(data => {
                    // Handle the response from the server if needed
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            });
        });
    });

    
</script>




<!-- footer section starts -->
@include('footer')
  <!-- footer section ends -->
  @section('scripts')
  <script src="{{ asset('js/your-js-file.js') }}"></script>
  @endsection
</body>

</html>
