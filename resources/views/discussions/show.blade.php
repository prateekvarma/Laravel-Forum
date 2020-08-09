@extends('layouts.app')

@section('content')
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discusion</a>   
            </div> 

            <div class="card">
                <div class="card-header">{{ $discussion->title }}</div>

                <div class="card-body">
                    {{ $discussion->content }}
                    <hr>
                    <b>Posted by : {{ $discussion->user->name }}</b>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    Add a reply
                </div>

                <div class="card-body">
                @auth
                    <form action="{{ route('reply.store', $discussion->slug) }}" method="post">
                        @csrf 
                        <textarea name="reply" id="reply" cols="80" rows="10"></textarea>
                        <br>
                        <button class="btn btn-success" type="submit">Post Reply</button>
                    </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-info">Login to reply</a>   
                @endauth 
                </div>
            </div>


@endsection
