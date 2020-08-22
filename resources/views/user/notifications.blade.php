@extends('layouts.app')

@section('content')
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('discussions.create') }}" class="btn btn-success">Add Discusion</a>   
            </div> 

            <div class="card">
                <div class="card-header">{{ __('Notifications') }}</div>

                <div class="card-body">
                    @foreach($notifications as $notification)
                        <ul>
                            <li>
                                @if($notification->type == 'App\Notifications\NewReplyAdded')
                                    A new reply was added to your discussion
                                @endif
                            </li>
                        </ul>
                    @endforeach
                </div>
            </div>


@endsection
