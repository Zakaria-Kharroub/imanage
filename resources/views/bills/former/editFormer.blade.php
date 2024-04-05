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
                    <form action="{{ route('updateFormer', $former->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <label>Name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Name" name="name" aria-label=".form-control-lg example" value="{{$former->name}}">
                        <label>date</label>
                        <input class="form-control form-control-lg" type="date" placeholder="date" name="date" aria-label=".form-control-lg example" value="{{$former->date}}">
                        <label>due date</label>
                        <input class="form-control form-control-lg" type="date" placeholder="duedate" name="duedate" aria-label=".form-control-lg example" value="{{$former->duedate}}">
                        <label>amount</label>
                        <input class="form-control form-control-lg" type="number" placeholder="amount" name="amount" aria-label=".form-control-lg example" value="{{$former->amount}}">
                        <label>Status </label>
                        <select name="status" aria-label=".form-control-lg example"  class="form-control form-control-lg">
                          <option value="unpaid" {{$former->status == 'unpaid' ? 'selected' : ''}}>Unpaid</option>
                          <option value="paid" {{$former->status == 'paid' ? 'selected' : ''}}>Paid</option>
                        </select>
                        <label for="inputGroupFile04">File Upload</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="image" aria-describedby="" aria-label="Upload" name="image" placeholder="{{$former->image}}" value="{{$former->image}}">
                            </div>
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Submit</button>
                        <a href="{{route('getFormer')}}" class="card-link">
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