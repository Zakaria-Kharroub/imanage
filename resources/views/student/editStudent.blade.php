
<link rel="stylesheet" href="css/edit.css">

  
<div class="formu" >
  <h2 >Update a Student </h2>
  <form action="{{ route('updateStudent', $student->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$student->name}}">
    <input type="email" name="email" placeholder="Email" value="{{$student->email}}">
    <input type="number" name="phone" placeholder="Phone Number" value="{{$student->phone}}">
    <input type="text" name="cin" placeholder="CIN" value="{{$student->cin}}">
    <input type="date" name="date_naissance" placeholder="Date of Birth" value="{{$student->date_naissance}}">
    <input type="text" name="classe_id" placeholder="Class" value="{{$student->classe_id}}">
    <button type="submit" class="button">EDIT</button>
  </form>
</div>

