@extends('layouts.app')

@section('content')
    <div class="container" id="posts-container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header"> ID: {{ $project->id }} ---- {{ $project->slug }}</h5>
                    <div class="card-body">
                        <h5 class="card-title">
                            Title: {{ $project->title }}
                            Slug: {{ $project->slug }}
                        </h5>
                        <p class="card-text">
                            {{ $project->description }}
                        <p><strong>{{ $project->date }}</strong></p>
                        <a href="#">{{ $project->link }}</a>
                        </p>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-success">
                            Edit
                        </a>
                        <a href="" class="btn btn-sm btn-warning">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
