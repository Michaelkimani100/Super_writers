
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.dashboard')
@section('content')
<div class="jumbotron text-center">
<div class="container">
<h1 class="text-muted">Welcome </h1>
<p class="lead">Please upload a copy of your national Id, and a minimum of 3 essay samples that you have written yourself</p>
<article id="main-content" role="main">  
    <section class="container text-center">
       <div class="row">
          
      <div class="col-md-8">
        <form method="POST" action="/store" enctype="multipart/form-data">
         @csrf
        <h3 class="text-info">National ID</h3>
        
        <!--file input example -->
        <span class="control-fileupload">
          <label for="file">Choose a file :</label>
          <input type="file" id="file" name="trial" required>
        </span>
        <div class="form-row pull-right">
                        <button type="submit" class="btn btn-primary">
                           {{ __('Submit') }}
                            </button>

                    </div>
        </form>       
      </div>
      </div>
  </section>
</article>

</div>
</div>
@endsection