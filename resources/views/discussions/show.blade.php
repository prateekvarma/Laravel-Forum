@extends('layouts.app')

@section('content')
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discusion</a>   
            </div> 

            <div class="card">
                <div class="card-header">{{ $discussion->title }}</div>

                <div class="card-body">
                    {{ $discussion->content }}
                    <br>
                    <b>Posted by : {{ $discussion->user->name }}</b>
                </div>
            </div>


@endsection