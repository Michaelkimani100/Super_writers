@extends('layouts.writerdash')
@section('content')
<h3>Update Order</h3>
{!! Form::open() !!}
<div class="form-row">
<div class=" form-group col-md-6">
{{Form::label('title','Title')}}
{{Form::Text('title',$order->title,['class'=>'form-control','placeholder'=>'Order Title','readonly'=>'true'])}}
</div>


<div class="form-group col-md-6">
{{Form::label('pages','Pages')}}
{{Form::number('pages',$order->pages,['class'=>'form-control','placeholder'=>'Number of Pages','id'=>'pages','required'=>'true','onkeyup'=>'myTotals1()','readonly'=>'true'])}}
</div>
</div>

<div class="form-row">
<div class="form-group col-md-6">
{{Form::label('cpp','Cost Per Page')}}
{{Form::number('cpp',$order->cpp,['class'=>'form-control','placeholder'=>'Cost Per Page','id'=>'cpp','onkeyup'=>'myTotals1()','readonly'=>'true'])}}
</div>

<div class="form-group col-md-6">
{{Form::label('total','Total Cost')}}
{{Form::number('total',$order->pages*$order->cpp,['class'=>'form-control','placeholder'=>'Total Cost','id'=>'total','readonly'=>'true'])}}
</div>
</div>

<div class="form-group col-sm-10">
{{Form::label('description','Description')}}
{{Form::textarea('description',$order->description,['id' => 'article-ckeditor','class'=>'form-control','readonly'=>'true'])}}
</div>

{{Form::submit('Upload ',['class'=>'btn btn-success float-left'])}}
{{Form::hidden('_method','PUT')}}


{!!Form::close()!!}
@endsection