@extends('_layout')

@section('content')
<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
		<div>
	   		<h2 class="text-center">KBK</h2>
			<form method="post" action="/subscribe" class="subscription-form">
				<p class="lead">Subscribe now to KBK</p>
				@if (session('success'))
				<div class="alert alert-success">
					<p>{{ session('success') }}</p>
				</div>
				@endif
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul class="list-unstyled">
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				{{ csrf_field() }}
				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" name="email" id="email" placeholder="Enter email"
					class="form-control form-control-lg" size="48"
					value="{{ old('email') }}" />
				</div>
				<div class="form-group">
					<label for="state_id">State</label>
					<select name="state" id="state_id" class="form-control">
						<option value="">Select a state...</option>

						@foreach ($states as $state)
						<option value="{{ $state->id }}"
							@if (old('state') == $state->id)
							selected="selected"
							@endif
						>{{ $state->name }}</option>
						@endforeach
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-block">Subscribe</button>
			</form> 
		</div>
	</div>
</div>
@endsection
