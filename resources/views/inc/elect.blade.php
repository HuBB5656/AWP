@extends('layout.home')
@section('content')
<hr>
<h1>Elect</h1>
 <div class="row" style="background-color:aliceblue">
    <div class="col-8">
        <h3>Category</h3>
        <input type="button" class= 'btn btn-primary'id='toggelBtn' value="Neshida List" onclick="toggle(this)">
        <a href="#" style="font-size:30px">No of Candidates ->&nbsp;&nbsp;{{count($neshida) }} </a>
        <div class="row g-0" style="display: none;" id='card'>
            <div class="col-sm-6 col-md-8">
                @if(count($neshida) > 0)
                    @foreach($neshida as $candy)
                    <h4> {{ $candy->name }}</h4>
                    @endforeach
                    <hr>
                @else
                    <h3> Empty Neshida Candidates List </h3>
                @endif
            </div>
        </div>
        
    </div>
    <div class="col-4">
      <h2>  Score </h2>
    </div>
  </div>
  @endsection
  <script>
    function toggle(ele) {
        var cont = document.getElementById('card');
        if (cont.style.display == 'block') {
            cont.style.display = 'none';
            document.getElementById(ele.id).value = 'Neshida List';
        }
        else {
            cont.style.display = 'block';
            document.getElementById(ele.id).value = 'Hide Neshida List';
        }
    }
</script>