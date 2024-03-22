<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center" style="margin-top: 40px;"> <!-- Added margin-top -->
        <div class="col-md-5">
            <div class="card" style="width: 26rem; padding-top: 15px;"> <!-- Added padding-top -->
                <div class="card-body">
                    <form action="{{ route('updateTeacher', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <label>Name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Name" name="name" aria-label=".form-control-lg example" value="{{$teacher->name}}">
                        <label>Email</label>
                        <input class="form-control form-control-lg" type="email" placeholder="Email" name="email" aria-label=".form-control-lg example" value="{{$teacher->email}}">
                        <label>CNI</label>
                        <input class="form-control form-control-lg" type="text" placeholder="CNI" name="cin" aria-label=".form-control-lg example" value="{{$teacher->cin}}">
                        <label>Phone</label>
                        <input class="form-control form-control-lg" type="number" placeholder="Phone" name="phone" aria-label=".form-control-lg example" value="{{$teacher->phone}}">
                        <label>Date Naiss</label>
                        <input class="form-control form-control-lg" type="date" placeholder="Date Naissance" name="date_naissance" aria-label=".form-control-lg example" value="{{$teacher->date_naissance}}">
                        <label for="inputGroupFile04">File Upload</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" aria-describedby="" aria-label="Upload" name="image" placeholder="{{$teacher->image}}" value="{{$teacher->image}}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Submit</button>
                        <a href="{{route('getTeacher')}}" class="card-link">
                            <button type="submit"  class="btn btn-secondary btn-block" style="margin-top: 10px;">Cancel</button> 
                            </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
    
</body>
</html>