@extends('welcome')

@section('content')


<h1>Inregistrare noua</h1>
<hr>
<form method="POST" action="test">
{{ csrf_field() }}
  <div class="form-group">
    <label for="nume">Nume</label>
    <input type="text" class="form-control" id="nume" name="nume" require >
  </div>
  <div class="form-group">
    <label for="produs">PRODUS</label>
    <input type="text" class="form-control" id="produs" name="produs"require >
  </div>
  <div class="form-group">
    <label for="sn">SN</label>
    <input type="text" class="form-control" id="sn" name="sn"require>
  </div>
  <div class="form-group">
    <label for="defect">DEFECT</label>
    <input type="text" class="form-control" id="defect" name="defect"require>
  </div>
  
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Inregistrare</button>
  </div>

    @if(count($errors))

    <div class="form-group">
                    <div class="alert alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>

                    </div>
    </div>

    @endif
</form>
<hr>




@endsection