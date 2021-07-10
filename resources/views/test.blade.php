@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Testing</div>

                    <div class="card-body">
                        <table class="table table-bordered table-condensed">
                            <tr>
                                <th>Country</th>
{{--                                <th>City</th>--}}
                                <th>Employees</th>
                            </tr>
                            @foreach($countries AS $country)
                                <tr>
                                    <td>{{ $country->name }}</td>
{{--                                    <td>{{ $shop->city->name }}</td>--}}
                                    <td>{{ $country->employees_count }}</td>
                                </tr>
                            @endforeach
                        </table>
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
