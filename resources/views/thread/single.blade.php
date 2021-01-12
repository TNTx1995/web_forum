@extends('layouts.front')


@section('content')
    <h4>{{$thread->subject}}</h4>
    <br>
    <div class="thread-details">
        {{$thread->thread}}
    </div>
    <br><br>
    <div class="actions" >
        <a href="{{route('thread.edit',$thread->id)}}" class="btn btn-info btn-xs">Edit</a>
        <form action="{{route('thread.destroy',$thread->id)}}" method="post" class="inline-it">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-xs btn-danger" type="submit" value="Delete">

        </form>
    </div>


@endsection
