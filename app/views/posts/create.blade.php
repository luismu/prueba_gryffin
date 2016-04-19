@extends('layouts.layout_base')
 
@section('title')
    crear roles
@stop

@section('head')
    @parent
    	<style>
            .user{
                margin-top: 60px;
            }
        </style>	
@stop

@section('content')
<div class="container user">
    <div class="">
        {{ Form::open(array('method' => 'POST', 'route' => array('posts.store'), 'class' => 'form-horizontal  col-md-6')) }}
        
        <div class="form-group">
            {{Form::label('body', 'body');}}
            {{Form::textarea('body', '',array('class' => 'form-control'));}}
        <br>
            {{Form::select('privacy', array('public' => 'Public', 'private' => 'Private', 'custom' => 'Custom'));}}

        </div>

            {{ Form::submit('Crear', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}
    </div>
</div>