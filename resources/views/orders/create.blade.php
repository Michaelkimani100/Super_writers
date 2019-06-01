@extends('layouts.dashboard')
@section('content')
<h3>Create a new order</h3>
{!!Form::open(['action'=>'OrdersController@store','method'=>'POST','files'=>'true','enctype'=>'multipart/form-data'])!!}
<div class="form-row">
<div class=" form-group col-md-6">
{{Form::label('title','Title')}}
{{Form::Text('title','',['class'=>'form-control','placeholder'=>'Order Title'])}}
</div>


<div class="form-group col-md-6">
{{Form::label('pages','Pages')}}
{{Form::number('pages','0',['class'=>'form-control','placeholder'=>'Number of Pages','id'=>'pages','required'=>'true','onkeyup'=>'myTotals1()'])}}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
{{Form::label('cpp','Cost Per Page')}}
{{Form::number('cpp','0',['class'=>'form-control','placeholder'=>'Cost Per Page','id'=>'cpp','onkeyup'=>'myTotals1()'])}}
</div>

<div class="form-group col-md-6">
{{Form::label('total','Total Cost')}}
{{Form::number('total','0',['class'=>'form-control','placeholder'=>'Total Cost','id'=>'total'])}}
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
{{Form::label('date','Due Date')}}
{{Form::date('date',\Carbon\Carbon::now(),['class'=>'form-control','placeholder'=>'Select Due Date'])}}

</div>
<div  class="form-group col-md-6">

{{Form::label('user_id', 'Select Writers')}}
{{Form::select('user_id',$users,null)}}
</div>


</div>


<div class="form-group col-sm-10">
{{Form::label('description','Description')}}
{{Form::textarea('description','',['id' => 'article-ckeditor','class'=>'form-control'])}}
</div>
<div class="form-group col-sm-10">
{{Form::label('files','Files')}}
{!! Form::file('files[]', array('multiple'=>true)) !!}
</div>

{{Form::submit('Assign ',['class'=>'btn btn-success float-left'])}}


{!!Form::close()!!}
@endsection