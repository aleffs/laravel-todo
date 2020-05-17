@extends('backend.templates.main')

@section('content')

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">

        	<div class="row">
        		<div class="col-md-6">
        			<div class="card">
					  <div class="card-body">
					  	<h4>Add a new Todo</h4>
					    <form action="{{ route('save-todo') }}" method="post" id="todo-form">
					    	{{ csrf_field() }}
					    	<input id="todo_body" class="form-control" placeholder="What will you be doing today?" minlength="5" required>

					    	<div class="row mt-3">
					    		<div class="col-md-4">
					    			<input type="submit" class="btn btn-info btn-block" value="Save todo">
					    		</div>
					    	</div>
					    </form>
					  </div>
					</div>
        		</div>


        		<div class="col-md-6">
        			<div class="card" style="min-height:300px; overflow-y: auto;">
					  <div class="card-body">
					  	<h4>Current Todos</h4>

					  	<div id="todos">
						  	@foreach( $todos as $todo )

						  	<?php
						  		if( $todo->is_colpleted == 1 ){
						  			$backgroundColod = "background-color: #D4EDDA;";
						  			$status = "Completed";
						  		}else{
						  			$backgroundColod = "background-color: #D9D9D9;";
						  			$status = 'Not Completed';
						  		}
						  	?>


						  	<div class="row mt-3" style="<?php echo($backgroundColod) ?>; padding:1em 0.5em">
						  		<div class="col-md-12">
								  	{{ $todo->id }} - {{ $todo->todo_body }}  
								  	<span style="padding-left:4em;">
								  		{{ $status }}
								  	</span>
								  	<span style="float:right;">

								  		<span style="padding-right:2em; cursor: pointer;">
									  		<a href = "{{ route('mark-done', $todo->id) }}"><i class="fa fa-check text-success"></i></a>
									  	</span>

									  	<span style="padding-right:2em; cursor: pointer;">
									  		<i class="fa fa-edit text-primary"></i>
									  	</span>

									  	<span style="cursor: pointer;">
									  		<i class="fa fa-trash text-danger"></i>
									  	</span>
									</span>
								</div>
						  	</div>
						  	@endforeach
					  	</div>

					  </div>
					</div>
				</div>



        	</div>

        </div>
    </div>
</div>

@endsection