@extends('layouts.dashboard')
@section('content')
<h2 class="text-muted">Pending Approval</h2>
@if(count($users)> 0)
@foreach($users as $user)
<div class="card card-body bg-light">
<a href="/users/{{$user->id}}"><h3>  {{$user->fname}} {{$user->lname}}</h3></a>
<br>
<small>Registered at {{$user->created_at}}</small>
</div>
@endforeach
{{$users->links()}}
@else
<h3>No Users Available</h3>
@endif

@endsection