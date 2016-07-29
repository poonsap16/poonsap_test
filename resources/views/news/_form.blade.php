
{!! Form::label('title', 'ชื่อเรื่อง : ') !!}
{!! Form::input('text', 'title') !!}<br><br>

{!! Form::label('news_type', 'ประเภทประกาศ : ') !!}
{!! Form::select('news_type', $newsType) !!}<br><br>

{!! Form::label('news_detail', 'รายละเอียด : ') !!}<br>
{!! Form::textarea('textarea', null, ['rows' => 5, 'cols' => 50]) !!}<br><br>

{!! Form::label('name_create', 'ผู้ประกาศ : ') !!}
{!! Form::input('text', 'name_create') !!}<br><br>

{!! Form::label('news_at', 'ผู้ประกาศ : ') !!}
{!! Form::input('text', 'news_at') !!}<br><br>