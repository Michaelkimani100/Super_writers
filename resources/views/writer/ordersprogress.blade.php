@extends('layouts.writerdash')
@section('content')
<h3>My Orders in progress</h3>

<table class="table table-dark">
  <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Pages</th>
        <th scope="col">Cpp</th>
        <th scope="col">Total</th>
        <th scope="col">Deadline</th>
    </tr>
    <tr>
    </tr>
  </thead>
  <tbody>
        @if(count($orders)>0)
        @foreach($orders as $order)
       
    <tr>
        <th scope="row">{{$order->id}}</th>
        <a href=><td>{{$order->title}}</td></a>
        <td>{{$order->pages}}</td>
        <td>{{$order->cpp}}</td>
        <td>{{$order->cpp* $order->pages}}</td>
        <td>{{$order->date}}</td>
        <td>
        <a href="/writer/{{$order->id}}/edit" class="btn btn-default">View</a>
        <td>

    </tr>
   
</tbody>
@endforeach
@else
<h3>You have no orders</h3>
@endif
</table>


@endsection