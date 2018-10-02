@extends('welcome')

@section('content')
<div class="col-sm-8">
        <h1>Inregistrarea cu numarul : {{$id->id}} </h1>
        <ul>
        
                <li>{{$id->nume}}</li>
                <li>{{$id->produs}}</li>
                <li>{{$id->sn}}</li>
                <li>{{$id->defect}}</li>
                <li>{{$id->created_at}}</li>
        
        </ul>

</div>

<div class="comments">
<h2>COMMENTS</h2>
        @foreach ($id->comments as $comment)

       
        <article>
        
        {{ Auth::user()->name }} a comentat in data {{$comment->created_at}} : {{$comment->body}}

        </article>
        @endforeach
</div>

@endsection