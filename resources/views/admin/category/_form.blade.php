{!! Form::open(['route' => 'category.store', 'method' => 'post']) !!}
{!! Form::hidden('parent_id', $category->id) !!}

{{ Form::text('name', null, array('class' => 'form-control')) }}

{{Form::submit('submit')}}

{!! Form::close() !!}