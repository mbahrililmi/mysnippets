{{-- alert biru --}}
@if (session()->has('success'))
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="alert alert-primary alert-dismissible fade show text-center"
            role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

{{-- alert kuning --}}
@if (session()->has('warning'))
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="alert alert-warning alert-dismissible fade show text-center"
            role="alert">
            {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif

{{-- alert merah --}}
@if (session()->has('danger'))
<div class="row">
    <div class="col-lg-12 mx-auto">
        <div class="alert alert-danger alert-dismissible fade show text-center"
            role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    </div>
</div>
@endif