@extends('layouts.app')

@section('content')


<div class="container">
    <table>
        <tr>
            <th>Song:</th>
            <th>Created at:</th>
            <th>Updated at:</th>
        </tr>
        @for($i=0; $i<count($songs); $i++)
            <tr>
                <td><a href="song/{{$songs[$i]->id}}"><h3>{{$songs[$i]->name}}</h3></a></td>
                <td>{{$songs[$i]->created_at}}</td>
                <td>{{$songs[$i]->updated_at}}</td>
            </tr>

        @endfor
    </table>
</div>
@endsection
