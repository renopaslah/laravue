<a href="#">
    @if (env('APP_NAME') == config('constant.cermat'))
        <img src="{{ asset('dist/static/logo-white-cermat.png') }}" alt="" class="navbar-brand-image">
    @endif

    @if (env('APP_NAME') == config('constant.edusantri'))
        <img src="{{ asset('dist/static/logo-white-edusantri.png') }}" alt="" class="navbar-brand-image">
    @endif
</a>
