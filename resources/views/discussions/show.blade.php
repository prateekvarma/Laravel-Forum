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
            @foreach($discussion->reply()->paginate(3) as $replies)
            <div class="card">
                <div class="card-header">
                <b>Replied by : {{ $replies->user->name }} </b>
                </div>
                <div class="card-body">
                    {{ $replies->content }}
                </div>
            </div>
            @endforeach
            <br>
            {{ $discussion->reply()->paginate(3)->links() }}    
            <br>
            <div class="card">
                <div class="card-header">
                    <b>Add a reply</b>
                </div>

                <div class="card-body">
                @auth
                    <form action="{{ route('reply.store', $discussion->slug) }}" method="post">
                        @csrf 
                        <textarea name="content" id="content" cols="80" rows="10"></textarea>
                        <br>
                        <button class="btn btn-success" type="submit">Post Reply</button>
                    </form>
                @else
                <a href="{{ route('login') }}" class="btn btn-info">Login to reply</a>   
                @endauth 
                </div>
            </div>


@endsection
