@extends('layouts.app')

@section('content')
    @foreach ($students as $student )
        <div>
            {{$student->name}};
        </div>
    @endforeach
@endsection
