@foreach (['danger','warning','success','info'])
    @if(session()->has($msg))
        <div class="flash-message">
            <p class="alert alert-{{ $msg }}"></p>
        </div>
    @endif
@endforeach