@extends('layouts.app')

@section('content')
    <div class="container" id="posts-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf


                </form>
            </div>
        </div>
    </div>
@endsection
