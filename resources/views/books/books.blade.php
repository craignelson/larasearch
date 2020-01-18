@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Author search results | <button onclick="location.href='{{ url('home') }}'">
    Back </button></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @include('books.results')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
