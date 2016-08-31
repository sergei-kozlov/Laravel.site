@extends('layouts.master')

@section('content')
    @foreach($posts as $post)

        <div class="panel panel-default">

            <div class="panel-heading">{!! $post->name!!}</div>
            <div class="panel-body"><b>{!! $post->subject !!} </b></div>
            <div class="panel-body" align="right">{{ $post->published_at }}</div>

        </div>

        {{--{{Form::open([--}}
                    {{--'method' => 'delete',--}}
                    {{--'route' => ['blog.destroy', $post->id ]])}}--}}
        {{--<div class="panel-body">--}}
            {{--<div class="pull-right">--}}
                {{--<a href="{{route('blog.destroy', $post->id) }}">--}}
                    {{--<button class="btn btn-danger">--}}
                        {{--<i class="glyphicon glyphicon-trash"></i>--}}
                    {{--</button>--}}
                {{--</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--{{Form::close()}}--}}


    @endforeach
    <div class="text-center">
        {!! $posts -> render() !!}

    </div>


    <div class="text-right">Всего сообщений {{$count}}</div>



    {!! Form::open(['route' => 'store'])!!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}

        {!! Form::text('name', null,
        ['placeholder' => 'Введите ваше имя',
        'class' =>"form-control",
        'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}

        {!! Form::email('email', null,
        ['placeholder' => 'Введите ваш email',
        'class' =>"form-control",
        'required']) !!}





    </div>

    <div class="form-group">
        {!! Form::label('subject', 'Subject') !!}
        {!! Form::textarea('subject', null,
        ['placeholder' => 'Введите ваше сообщение',
        'class'=>"form-control",
        'rows'=> '5',
        'cols' => '50',
        'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Добавить' , ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close()!!}




@stop