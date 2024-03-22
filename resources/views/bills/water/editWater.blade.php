
<link rel="stylesheet" href="css/edit.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>UPDATE the water Bill</title>
</head>
<body>
    <div class="container">
    <div class="row justify-content-center" style="margin-top: 130px;"> <!-- Added margin-top -->
        <div class="col-md-5">
            <div class="card" style="width: 26rem; padding-top: 15px;"> <!-- Added padding-top -->
                <div class="card-body">
                    <form action="{{ route('updateWater', $water->id) }}" method="POST" >
                        @method('PUT')
                        @csrf
                        <label>Date </label>
                        <input class="form-control form-control-lg" type="date" placeholder="Date " name="date" aria-label=".form-control-lg example" value="{{$water->date}}">
                        <label>Due Date </label>
                        <input class="form-control form-control-lg" type="date" placeholder="Due Date " name="duedate" aria-label=".form-control-lg example" value="{{$water->duedate}}">
                        <label>Amount </label>
                        <input class="form-control form-control-lg" type="text" placeholder="Amount " name="amount" aria-label=".form-control-lg example" value="{{$water->amount}}">
                        <label>Status </label>
                        <select name="status" aria-label=".form-control-lg example"  class="form-control form-control-lg">
                          <option value="unpaid" {{$water->status == 'unpaid' ? 'selected' : ''}}>Unpaid</option>
                          <option value="paid" {{$water->status == 'paid' ? 'selected' : ''}}>Paid</option>
                        </select>
                        <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px;">Submit</button> 
                        <a href="{{route('getWater')}}" class="card-link">
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
