@extends('layouts.app')

@section('content')
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discusion</a>   
            </div> 

            @foreach($discussions as $discussion)
            <div class="card">
                <div class="card-header">{{ $discussion->title }} by {{ $discussion->user->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                {{ $discussion->content }}
                    
            </div>
                </div>
            @endforeach
                


@endsection
