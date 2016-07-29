@extends('news.app')

@section('title','From ประกาศ ภาควิชาอายุรศาสตร์')

@section('content')

<h3>ประกาศ ภาควิชาอายุรศาสตร์</h3>
<hr/>

{!! Form::open(['url' => url('news')])!!}
	@include('news._form')
	{!! Form::submit('บันทึกประกาศ!!!')!!}
{!! Form::close()!!}

@endsection