<div class="col-sm-12" wire:ignore>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible bg-body-success fade show" role="alert">
        <strong><i class='fa fa-check-circle fa-3x'></i>
            {!! $message !!}</strong>

    </div>
    @endif
    @if ($message = Session::get('warning'))
    <div class="alert alert-info alert-dismissible bg-body-info fade show" role="alert">
        <strong><i class='fa fa-info-circle fa-3x'></i>
            {!! $message !!}</strong>

    </div>
    @endif
    @if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible bg-body-info fade show" role="alert">
        <strong><i class='fa fa-info-circle fa-3x'></i>
            {!! $message !!}</strong>

    </div>
    @endif
    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible bg-body-danger fade show" role="alert">
        <strong><i class='fa fa-exclamation-triangle fa-3x'></i>
            {!! $message !!}</strong>

    </div>
    @endif
    @if ($message = Session::get('upload_error'))
    <div class="alert alert-danger alert-dismissible bg-body-danger fade show" role="alert">
        <strong><i class='fa fa-exclamation-triangle fa-3x'></i>
            {!! $message !!}</strong>
        <!-- <a href='{{route("error.clear")}}' class="btn btn-primary btn-sm btn-round float-right">
            <i class=' bx bx-x'></i> Got It
        </a> -->

    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible bg-body-danger fade show" role="alert">
        <h4><i class="icon fa fa-ban"></i> Errors !</h4>
        <ol>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ol>

    </div>
    @endif

    @if (count($submission_errors??[]) > 0)
    <div class="alert alert-danger alert-dismissible bg-body-danger fade show" role="alert">
        <h4><i class="icon fa fa-ban"></i> Errors !</h4>
        <ol>
            @foreach ($submission_errors as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
    @endif

    @if (count($submission_success??[]) > 0)
    <div class="alert alert-success alert-dismissible bg-body-success fade show" role="alert">
        <ol>
            @foreach ($submission_success as $msg)
            <li>{{ $msg }}</li>
            @endforeach
        </ol>
    </div>
    @endif

    @if (session('submission_success') && count(session('submission_success')) > 0)
    <div class="alert alert-success alert-dismissible bg-body-success fade show" role="alert">
        <ol>
            @foreach (session('submission_success') as $msg)
            <li>{{ $msg }}</li>
            @endforeach
        </ol>
    </div>
    @endif

    @if (session('submission_errors') && count(session('submission_errors')) > 0)
    <div class="alert alert-danger alert-dismissible bg-body-danger fade show" role="alert">
        <ol>
            @foreach (session('submission_errors') as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
    @endif

</div>