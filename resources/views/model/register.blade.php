@extends('layouts.app')

<?php
	
	$lang = Lang::locale();

?>


@push('title-bar')

<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Model Registeration</h2>
		</div>

	</div>
</div>
@endpush

@section('content')

<div class="container">
@if ($errors->any())
	<div class="notification error closeable">
		@foreach ($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
@endif
@if (Session::has('success'))
	<div class="notification success closeable">
		<p><span>Success!</span> {{session('success')}}</p>
	</div>
@endif
<div class="my-account">
	<form method="post" class="register">
	{{ csrf_field() }}
		<p class="form-row form-row-wide">
			<label for="username2">Username:
				<i class="ln ln-icon-Male"></i>
				<input type="text" class="input-text" name="username" id="username2" value="">
			</label>
		</p>
			
		<p class="form-row form-row-wide">
			<label for="email2">Email Address:
				<i class="ln ln-icon-Mail"></i>
				<input type="text" class="input-text" name="email" id="email2" value="">
			</label>
		</p>

		<p class="form-row form-row-wide">
			<label for="password1">Password:
				<i class="ln ln-icon-Lock-2"></i>
				<input class="input-text" type="password" name="password1" id="password1">
			</label>
		</p>

		<p class="form-row form-row-wide">
			<label for="password2">Repeat Password:
				<i class="ln ln-icon-Lock-2"></i>
				<input class="input-text" type="password" name="password2" id="password2">
			</label>
		</p>

		<p class="form-row">
			<input type="submit" class="button border fw margin-top-10" name="register" value="Register">
		</p>

	</form>
	</div>
</div>
</div>

@endsection