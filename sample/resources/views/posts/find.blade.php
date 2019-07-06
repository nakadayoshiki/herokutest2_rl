@extends('layouts.app')

@section('content')
  <form action="/users/find" method="post">
  {{ csrf_field() }}
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="find">
  </form>
  @if (isset($item))
  <table>
  <tr>
    <th>data</th>
  </tr>
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
  </table>
  @endif
@endsection
