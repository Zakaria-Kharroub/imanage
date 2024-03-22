<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .card {
            width: 100%;
            border-radius: 6px;
            overflow: hidden; /* Ensure that the image doesn't overflow */
        }

        .card-image {
            background-image: url('{{ asset('storage/images/' . $teachers->image) }}');
            background-size: cover;
            background-position: center;
            height: 360px; /* Set height to 100% to cover the entire card */
            border-radius: 6px 6px 0 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4"> <!-- Adjust column size as needed -->

                <div class="card">
                    <div class="card-image"></div>
                    <div class="category text-uppercase text-primary font-weight-bold"> {{$teachers->name}} </div>
                    <div class="card-body">
                        <h5 class="card-title heading"> {{$teachers->email}} </h5>
                        <h5 class="card-title heading"> {{$teachers->cin}} </h5>
                        <h5 class="card-title heading"> {{$teachers->date_naissance}} </h5>
                        <p class="card-text author"> phone <span class="name font-weight-bold">{{$teachers->phone}}</span> </p>
                        <a href="{{route('getTeacher')}}" class="card-link">Go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
