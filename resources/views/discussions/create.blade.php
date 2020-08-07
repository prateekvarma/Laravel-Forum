@extends('layouts.app')

@section('content')
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('discussion.create') }}" class="btn btn-success">Add Discusion</a>   
            </div> 

            <div class="card">
                <div class="card-header">Add a Discussion</div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="">
                    </div>

                    <div class="form group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>    
                    </div>

                    <div class="form-group">
                        <label for="channeñ">Channel</label>
                        <select name="channel" id="channel" class="form-control">
                            @foreach($channels as $channel)
                            <option value="{{$channel->id}}">{{ $channel->name }}</option>
                            @endforeach 
                        </select>
                    </div>

                    <button class="btn btn-success" type="submit">Create Discussion</button>

                </div>
            </div>


@endsection
