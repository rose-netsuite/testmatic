<div class="alert alert-danger alert-dismissable">
	<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
	<ul>
	@foreach($errors->all() as $error)
	    <li>{{ $error }}</li>
	    @endforeach
	</ul>
</div>