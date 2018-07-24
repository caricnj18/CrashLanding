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

                    You are logged in!
                    <br>
                    <div class="panel-body">
                        <br>
                        <a href="/posts/create" class ="btn btn-primary">Create Review</a>
                        <br>
                            <h3>Your Review Posts</h3>
                            
                        @if(count($posts) > 0)
                            <table class="table table-striped">
                             <tr>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                 </tr>
                    @foreach($posts as $post)
                     <tr>
                        <td>{{$posts->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                        <td>{!!Form::open(['action' =>['PostsController@destroy', $post->id], 'method' =>'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
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
</div>
@endsection
