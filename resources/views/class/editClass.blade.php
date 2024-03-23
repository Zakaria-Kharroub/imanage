<link rel="stylesheet" href="css/edit.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Edit Class</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Edit Class</div>
                    <div class="card-body">
                        <form action="{{ route('updateClass', $class->id) }}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $class->name }}">
                            </div>
                            <div class="mb-3">
                                <label for="teacher" class="form-label">Teacher</label>
                                <select class="form-control" id="teacher" name="teacher">
                                    @foreach($teacher as $teacher)
                                        <option value="{{ $teacher->id }}" {{ $class->teacher->id == $teacher->id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="formation" class="form-label">Formation</label>
                                <select class="form-control" id="formation" name="formation">
                                    @foreach($formation as $formation)
                                        <option value="{{ $formation->id }}" {{ $class->formation->id == $formation->id ? 'selected' : '' }}>{{ $formation->name }}</option>
                                    @endforeach
                                </select>
                            </div>
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
