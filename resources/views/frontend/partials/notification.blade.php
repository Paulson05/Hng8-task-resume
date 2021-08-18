
@if(Session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@elseif(Session('errors'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{Session('errors')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif
