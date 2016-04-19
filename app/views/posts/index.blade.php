@extends('layouts.layout_base')
 
@section('title')
    posts
@stop


@section('head')
    @parent
        <style>
            .espacio{
                margin-top: 60px;
            }
        </style>    

@stop

@section('content')

	

<div class="list-group espacio">

   {{ Form::open(array('method' 
                            => 'get', 'route' => array('posts.create'))) }}
                            {{ Form::submit('New Post', array('class'
                        => 'btn btn-success')) }}
                        {{ Form::close() }}

    @forelse ($posts as $post)
        <a href="{{ route('posts.show', $post->id) }}" class="list-group-item">
            <h4 class="list-group-item-heading">{{{ $post->body }}}</h4>
            <div class="meta">
                <i class="fa fa-calendar"></i> <span class="timeago">{{ $post->created_at }}</span>
                <i class="fa fa-user"></i> <h4>{{{ $post->user->first_name }}}</h4>
            </div>
        </a>
    @empty
        {{ lang('There are nothing here!') }}
    @endforelse

    </div>




@stop