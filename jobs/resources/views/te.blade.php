@extends('test')
@section('name')
<form action="{{url('/do')}}" method="POST">
    @csrf
    <button type="submit" name="submit"> do </button>
</form>
<table>
    <tr>
        <th> id</th>
        <th> rand sring</th>
    </tr>
    @foreach($str as $vali)
        <tr>
            <td>{{$vali->id}}</td>
            <td>{{$vali->randomstr}}</td>
        </tr>
    @endforeach
</table>
@endsection