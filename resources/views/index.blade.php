@extends('layout.master')


@section('title','blog |Home')


@section('content')

    <a href="{{route('admin.login')}}">Admin</a>

    <section class="quotes">

        <h1>ALL Quotes</h1>

        @for($i=0; $i<count($quote); $i++)
        <div class="alert alert-success quote">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{$quote[$i]->quote}}
            <div class="info">created by<a href="#">   {{$quote[$i]->author->name}}</a>  on   {{$quote[$i]->author->created_at}}</div>
        </div>

            @endfor


        <div class="pagination">

            @if($quote->currentPage()!==1)

                <a href="{{$quote->previousPageUrl()}}"><span><i class="fa fa-angle-left menu-ic" aria-hidden="true"></i></span></a>

            @endif


            @if($quote->currentPage()!== $quote->lastPage() && $quote->hasPages())

                <a href="{{$quote->nextPageUrl()}}"><span><i class="fa fa-angle-right menu-ic" aria-hidden="true"></i></span></a>

            @endif

        </div>

    </section>


    <section class="edit-quotes">

            <h1>Add a Quote</h1>
           {!! Form::open(['method'=>'POST','action'=>'mastercontroller@store']) !!}

               <div class="form-group one">

                   {!! Form::label('name','Your Name:',['class'=>'center']) !!}
                   {!! Form::text('name','Add Author Name',['class'=>'form-control']) !!}

               </div>


                <div class="form-group one">

                    {!! Form::label('Email','Email:',['class'=>'center']) !!}
                    {!! Form::text('email','Enter Your Email Address',['class'=>'form-control']) !!}

                </div>



        <div class="form-group">

                    {!! Form::label('name','Your Quote:',['class'=>'center']) !!}
                    {!! Form::textarea('quote','Add Your Quote',['class'=>'form-control input2' ,'rows'=>'4']) !!}
                </div>

               <div class="form-group">

                   {!! Form::submit('Add Quote',['class'=>'btn btn-primary']) !!}
               </div>


               {!! Form::close() !!}



    </section>





