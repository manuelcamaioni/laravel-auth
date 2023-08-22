@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">

                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( as )
                            <tr>
                                <th>

                                </th>
                                <td>
                                    <strong>

                                    </strong>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>



            </div>
        </div>
    </div>
@endsection
