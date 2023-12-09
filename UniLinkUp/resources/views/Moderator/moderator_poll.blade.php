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

        <!-- Loop through each poll -->
        @foreach ($polls as $poll)
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


    </div>

<!-- footer section starts -->
@include('footer')
  <!-- footer section ends -->
  @section('scripts')
  <script src="{{ asset('js/your-js-file.js') }}"></script>
  @endsection
</body>

</html>
