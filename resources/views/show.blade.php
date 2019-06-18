@extends('Base.parent')
@section('title','item')

@section('body')
    <div class="container">
        <div class="card mx-auto" style="margin-top: 60px; width: 70%;">
        <img src="{{ $kitob->picture }}" class="card-img" alt="yuklanmadi">
        <div class="card-body">
            <p class="card-text">{{ $kitob->text }}</p>
            <p>{{ $kitob->created_at }}</p>
            <div class="row">
                <div class="col">
                    <a href="{{ route('item.update',['item'=>$kitob->id]) }}" class="btn btn-primary">Update</a>
                </div>
                <div class="col">
                    <a href="{{ route('item.destroy',['item'=>$kitob->id]) }}" class="btn btn-danger mr-auto">Delete</a>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection