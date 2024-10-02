@extends('welcome')
@section('conten_galeri')


<table border="1">
    
    @foreach($galeri as $Get)
    <tr>
        <td>
            <a href={{ $Get->post_id }} target="_blank">
                {{ $Get->status }}
            </a>
            <a href={{ $Get->post_id }} target="_blank">
                <img src= {{$Get->status }}
            </a>
            <br>
        </td>
    </tr>
    @endforeach
</table>


    
@endsection