@extends('layouts.base')
@section('base.content')

    <div class="main-wrapper main-wrapper-1">
        @include('layouts.partial.topbar')
        @include('layouts.partial.sidebar')
        @yield('content')
        @include('layouts.partial.footer')
    </div>

@stop
