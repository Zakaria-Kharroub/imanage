
<link rel="stylesheet" href="css/edit.css">

  
<div class="formu" >
  <h2 >Update a Student </h2>
  <form action="{{ route('students.update', $student->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <input type="text" name="nom" placeholder="First Name" value="{{$student->nom}}">
    <input type="text" name="prenom" placeholder="Last Name"value="{{$student->prenom}}">
    <input type="email" name="email" placeholder="Email" value="{{$student->email}}">
    <input type="number" name="phone" placeholder="Phone Number" value="{{$student->phone}}">
    <input type="text" name="cin" placeholder="CIN" value="{{$student->cin}}">
    <input type="date" name="dateN" placeholder="Date of Birth" value="{{$student->dateN}}">
    <button type="submit" class="button">EDIT</button>
  </form>
</div>

