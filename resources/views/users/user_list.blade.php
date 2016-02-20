@extends('layout.default1')
@section('content')
    <table>
    @foreach($users as $user)
<tr><td>{{$user->user_name}}</td><td>{{$user->email}}</td><td>{{($user->Phone =='127') ?  'INDIA' : 'USA'}}</td></tr>
    @endforeach
    </table>
    @endsection
