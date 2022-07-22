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
