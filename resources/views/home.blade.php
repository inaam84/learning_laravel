@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <p>
                        <input type="text" class="datepicker" />
                    </p>

                    <p>
                        <span class="btn btn-xs btn-primary" onclick="testing();">Click Me!</span>
                        <span class="btn btn-xs btn-primary" onclick="testing2();">Click Me!</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('additional_js')
    <script>

//        $("#button-id").on("click",yourCallbackMethod);

    </script>
@endsection
