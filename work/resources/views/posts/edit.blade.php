@extends('main')
@section('title','|edit')
@section('content')
<div class="row">
    {!! Form::model($posts,['route'=>['posts.update',$posts->id],'method'=>'PUT']) !!}

    <div class="col-md-8">
    {{Form::label('title','Title:')}}
        {{ Form::text('title',null,["class"=>'form-control input-lg']) }}
    {{Form::label('body','Blog:',['style'=>'margin-top:20px'])}}
        {{ Form::textarea('body',null,["class"=>'form-control input-lg']) }}
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

                        <a href="{{route('posts.show',$posts->id)}}" class="btn btn-danger btn-block">Cancel</a>
                        </div>
                        <div class="col-sm-6">
                         <button type="submit" class="btn btn-success btn-block">Save</button>

                        </div>

                        </div>
                    </div>

            </div>
            {!! Form::close() !!}
</div>


@endsection