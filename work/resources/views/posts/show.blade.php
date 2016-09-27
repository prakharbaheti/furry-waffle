@extends('main')
@section('title','|view posts')
@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>{{$posts->title}}</h1>
        <p class="lead">{{$posts->body}}</p>
        <p>{{$posts->categories}}</p>
    </div>


            <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <dt>Created at:</dt>
                            <dd>{{date('M j, Y h:ia',strtotime($posts->created_at))}}</dd>
                        </dl>

                        <dl class="dl-horizontal">
                                        <dt>Last updated:</dt>
                                        <dd>{{date('M j, Y h:ia',strtotime($posts->updated_at))}}</dd>
                        </dl>
                        <hr>
                        <div class="row">
                        <div class="col-sm-6">

                        <a href="{{route('posts.edit',$posts->id)}}" class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-sm-6">

                        {!! Form::open(array('route' => array('posts.destroy', $posts->id), 'method' => 'delete')) !!}
                                            <button class='btn btn-danger btn-block' type="submit">Delete</button>
                                        {!! Form::close() !!}



                        </div>

                        </div>
                        <div class="row">
                        <div class="col-sm-6">

                        <a href="{{route('posts.index')}}" class="btn btn-default btn-block " style="text-align: center;margin: 20px 80px"> << See all Posts </a>


                        </div>
                        </div>

                    </div>

            </div>


</div>

@endsection



