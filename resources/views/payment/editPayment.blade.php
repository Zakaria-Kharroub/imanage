<link rel="stylesheet" href="css/edit.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Payment</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Edit Payment</div>
                    <div class="card-body">
                        <form action="{{ route('updatePayment', $payment->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}">
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" value="{{ $payment->date }}">
                            </div>
                            <div class="mb-3">
                                <label for="student" class="form-label">Student</label>
                                <select class="form-control" id="student" name="student">
                                    @foreach($student as $student)
                                        <option value="{{ $student->id }}" {{ $payment->student->id == $student->id ? 'selected' : '' }}>{{ $student->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formation" class="form-label">Formation</label>
                                <select class="form-control" id="formation" name="formation">
                                    @foreach($formation as $formation)
                                        <option value="{{ $formation->id }}" {{ $payment->formation->id == $formation->id ? 'selected' : '' }}>{{ $formation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <label>Status </label>
                            <select name="status" aria-label=".form-control-lg example"  class="form-control form-control-lg">
                                <option value="paid" {{$payment->status == 'paid' ? 'selected' : ''}}>Paid</option>
                                <option value="unpaid" {{$payment->status == 'unpaid' ? 'selected' : ''}}>Unpaid</option>
                            </select>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('getClass') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
