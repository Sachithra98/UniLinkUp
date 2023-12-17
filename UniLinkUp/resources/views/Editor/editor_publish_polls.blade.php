<!-- sachithra-start -->
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Publish Poll</title>

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
    @include('Editor/editor_task')
    <!-- taskbar section ends -->

    <div class="back" >
        <a href="<?=url('editor')?>" class="btn"  style="margin-bottom: 20px; margin-right: 1200px;">Back</a>
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

            <div class="delete" style="text-align: center; display: flex; justify-content: center; align-items: center; padding-top: 5rem; padding-bottom: 5rem;">
                <a href="#" class="btn delete-poll-btn" data-poll-id="{{ $poll->id }}" style="margin-left: 1rem; background-color: red;">Delete Poll</a>
            </div>


        </div>
        @endforeach

            

       <!-- Add this script at the end of the body section, after the HTML content -->


  <!-- ... Your existing HTML code ... -->

<script>
    // Use JavaScript to make an AJAX request when the delete button is clicked
    document.querySelectorAll('.delete-poll-btn').forEach(button => {
        button.addEventListener('click', function (event) {
            event.preventDefault();

            // Get the poll ID from the button's data attribute
            const pollId = this.getAttribute('data-poll-id');

            // Make an AJAX request to delete the poll
            fetch(`/polls/${pollId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response, e.g., remove the deleted poll from the DOM
                console.log(data.message);
                this.closest('.notice-container').remove();
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    });
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
