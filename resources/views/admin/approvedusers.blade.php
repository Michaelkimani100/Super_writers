@extends('layouts.dashboard')
@section('content')
<h2 class="text-muted">Approved Users</h2>
@if(count($users)> 0)
@foreach($users as $user)
<div class="card card-body bg-light">
<h3>  {{$user->fname}} {{$user->lname}}</h3>
<br>
<p>Email: {{$user->email}}</p>
<p>Payment Method: {{$user->payment}}</p>
<p>Phone: {{$user->phone}}</p>
<br>


<small>Registered at {{$user->created_at}}</small>
</div>
@endforeach
{{$users->links()}}
@else
<h3>No Users Available</h3>
@endif

@endsection