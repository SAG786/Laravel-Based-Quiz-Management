@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h4>Name: {{auth()->user()->name}} </h4>
                    <div class="row">
                        <div class="col-md-8 float-left">
                        <h4>Email: {{auth()->user()->email}} </h4>
                        </div>
                    <div class="col-md-4 float-right">
                        <a href="startQuiz" class="btn btn-primary float-right">Start Quiz </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
