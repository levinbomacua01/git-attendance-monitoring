@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="right">
                    <a href="{{ url('/home') }}" class="btn btn-primary"> {{ __('Back to Home') }} </a>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ url('students/store') }}">

                        @csrf

                        @include('students/form')

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Save Student') }}
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
