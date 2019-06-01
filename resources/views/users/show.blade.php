@extends('layouts.dashboard')
@section('content')
<h1>{{$user->email}}</h1>

<h3> About me: {{$user->about_me}}</h3>
<h3>Phone: {{$user->phone}}<h3>
<h3>Payment Method:{{$user->payment}}</h3>
<h3>Areas: {{$user->areas}}</h3> 
{!!Form::open(['action'=>['UsersController@update',$user->id],'method'=>'POST','class'=>'float-right'])!!}
{{Form::hidden('_method','PUT')}}
{{Form::submit('Approve',['class'=>'btn btn-success'])}}

{!!Form::close()!!}
{!!Form::open(['action'=>['UsersController@destroy',$user->id],'method'=>'POST','class'=>'float-left'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Reject',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection