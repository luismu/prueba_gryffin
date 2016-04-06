@extends('layouts.layout_base')
 
@section('title')
    Home
@stop


@section('head')
    @parent
    	<style>
            .user{
                margin-top: 100px;
            }
        </style>	
@stop


@section('content')


Hola que hace

<div class='container '>

	<div></div>
<?php foreach ($paginacion as $row): ?> 


          
<div class="row col-lg-8">

            <!-- Blog Post Content Column -->
            <div class="">

            

                <!-- Title -->
                

                <!-- Author -->
                <h3><p class="lead">
                    by <a href="#">{{$row->user_id}}</a>
                </p></h3>

              


                <hr>

                               <!-- Post Content -->
                <p class="lead">{{$row->body}} </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> {{$row->created_at}}</p>
               
			</div>
</div>


<?php endforeach; ?>



<div>{{$paginacion -> links()}}</div>




        </div>

       


@stop