@extends('welcome')
 
@section('content') 
        <table class="  table table-hover">
            
            <tr>
                <th>ID</th>
                <th>NUME</th>
                <th>PRODUS</th>
                <th>SN</th>
                <th>DEFECT</th>
                <th>DATA</th>
                <th></th>
            </tr>
            @foreach ($datas as $data)
            <tr>
                <td> {{ $data->id }} </td>
                <td> {{ $data->nume }} </td>
                <td> {{ $data->produs }} </td>
                <td> {{ $data->sn }} </td>
                <td> {{ $data->defect }} </td>
                <td> {{ $data->created_at->toFormattedDateString() }} </td>
                <td><a href="test/{{$data->id}}"><button>SHOW</button></a></td>
            </tr>
            @endforeach
        
            
        </table>
        {{$datas->links()}}
@endsection  