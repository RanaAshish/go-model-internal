@extends('layouts.app')

<?php
	
	$lang = Lang::locale();

?>


@push('title-bar')

<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Register</h2>
			<span>Keep up to date with the latest news</span>
		</div>

	</div>
</div>
@endpush

@section('content')

<div class="container">
	<div class="submit-page">
		<div class="sixteen columns">
			<div class="seven columns">
			


			
			<div class="form">
				<h5>Vorname</h5>
				<input class="search-field" type="text" placeholder="Vorname" value="">
			</div>
			<div class="form">
				<h5>Geburtstag</h5>
				<div class="two columns">
					
					<select class="search-field">

						<option>Tag</option>

						<?php for ($i = 0 ; $i <= 30; $i++): ?>
						<option><?php echo $i; ?></option>
						<?php endfor ?>
					</select>
					
				</div>
				<div class="two columns">
					<select class="search-field">

						<option>Monach</option>

						<?php for ($i = 0 ; $i <= 30; $i++): ?>
						<option><?php echo $i; ?></option>
						<?php endfor ?>
					</select>
				</div>
				<div class="two columns">
					<select class="search-field">

						<option>Jar</option>

						<?php for ($i = 0 ; $i <= 30; $i++): ?>
						<option><?php echo $i; ?></option>
						<?php endfor ?>
					</select>
				</div>
			</div>
			<div class="form">
				<h5>E-Mail</h5>
				<input class="search-field" type="text" placeholder="E-Mail" value="">
			</div>
			<div class="form">
				<h5>Telefonnummer</h5>
				<input class="search-field" type="text" placeholder="Telefonnummer" value="">
			</div>
		</div>
		<div class="seven columns">
			<div class="form">
				<h5>Nachname</h5>
				<input class="search-field" type="text" placeholder="Nachname" value="">
			</div>
			<div class="form">
				<h5>Geburtstag</h5>
				<input class="search-field" type="text" placeholder="Vorname" value="">
			</div>
			<div class="form">
				<h5>Kategorie</h5>
				<input class="search-field" type="text" placeholder="Kategorie" value="">
			</div>
		</div>

		</div>
		
	</div>

</div>

@endsection