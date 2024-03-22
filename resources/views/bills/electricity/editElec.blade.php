
<link rel="stylesheet" href="css/edit.css">

  
<div class="formu" >
  <h2 >Update a electricity </h2>
  <form action="{{ route('updateElec', $electricity->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <input type="date" name="date" placeholder="date" value="{{$electricity->date}}">
    <input type="date" name="duedate" placeholder="Due Date" value="{{$electricity->duedate}}">
    <input type="text" name="amount" placeholder="amount" value="{{$electricity->amount}}">
    
    <select name="status">
        <option value="unpaid" {{$electricity->status == 'unpaid' ? 'selected' : ''}}>Unpaid</option>
        <option value="paid" {{$electricity->status == 'paid' ? 'selected' : ''}}>Paid</option>
      </select>
    <button type="submit" class="button">EDIT</button>
  </form>
</div>

