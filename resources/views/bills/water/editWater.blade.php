
<link rel="stylesheet" href="css/edit.css">

  
<div class="formu" >
  <h2 >Edit the water bill</h2>
  <form action="{{ route('updateWater', $water->id) }}" method="POST" >
    @csrf
    @method('PUT')
    <input type="date" name="date" placeholder="date" value="{{$water->date}}">
    <input type="date" name="duedate" placeholder="Due Date" value="{{$water->duedate}}">
    <input type="text" name="amount" placeholder="amount" value="{{$water->amount}}">
    
    <select name="status">
        <option value="unpaid" {{$water->status == 'unpaid' ? 'selected' : ''}}>Unpaid</option>
        <option value="paid" {{$water->status == 'paid' ? 'selected' : ''}}>Paid</option>
      </select>
    <button type="submit" class="button">UPDATE</button>
  </form>
</div>

