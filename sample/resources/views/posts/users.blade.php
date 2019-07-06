@extends('layouts.app')

@section('content')
    <table>
    <tr>
    <th>ID</th>  <th>Name</th><th>Email</th>
    </tr>
        @foreach ($items as $item)
        <tr>
         <td>{{$item->id}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->email}}</td>

        </tr>

        @endforeach
  </table>
@endsection
