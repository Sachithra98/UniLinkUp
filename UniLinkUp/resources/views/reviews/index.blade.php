<!DOCTYPE html>
<html>

<head>
    <title>Review Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="margin-top: 50px;">

    <div class="container">
        <div class="row">
            @foreach($reviews as $review)
            <div class="col-md-4">
                <div class="border border-primary p-3 mb-3">
                    <!-- User Image Icon -->
                    <img src="{{ asset('images/user-icon.jpg') }}" alt="User Icon" class="img-fluid mb-2">

                    <p class="text-primary">{{ $review->name }}</p>
                    <p>{{ $review->comment }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>
