@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  
                        <div class="alert alert-success">
                            {{ session('status') }}
                            You are logged in!
                            
                        </div>
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
