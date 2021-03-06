@extends('layouts.master')
@section('title', $title)
@endsection

@section('content')
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<?php echo \Phalcon\Tag::form(["login","method" => "post","class" => "form"]) ?>
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="text" name="tc" id="inputEmail" class="form-control" placeholder="Email address">
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
			<div class="checkbox">
			  <label>
			    <input type="checkbox" value="remember-me"> Remember me
			  </label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
</div>
	
@endsection
