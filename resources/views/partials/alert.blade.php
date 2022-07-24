@if (session()->has('success'))
<div class="alert alert-success">
    <i class="fas fa-exclamation-circle"></i>
    {{ session()->get('success') }}!
</div>
@endif


@if(session()->has('error'))
<div class="alert alert-danger">
    <i class="fas fa-exclamation-circle"></i>
    {{ session()->get('error') }}!
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissible fade show">
    <ul class="{{ count($errors) == 1 ? 'list-unstyled' : '' }}">
		@foreach($errors->all() as $error)
		<li>
            <b>{{$error}}</b>
        </li>
		@endforeach
	</ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
    </button>
</div>
@endif
