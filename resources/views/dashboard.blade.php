@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        @if(count($posts) > 0)
                            <h3>Your Posts</h3>
                            <table class="table table-stripped">
                                <tr>
                                    <th>Title</th> 
                                    <th colspan="2" style="text-align: center">Action</th>
                                </tr>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td> 
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a></td> 
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST','class'=> 'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td> 
                                </tr>
                                @endforeach
                            </table> 
                        @endif 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
