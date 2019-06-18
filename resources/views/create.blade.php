@extends('Base.parent')
@section('title','Create new item')

@section('body')
    <div class="container">
        <form action="{{ route('item.store') }}" style="margin-top: 70px;" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="price" placeholder="price">
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="picture" placeholder="picture">
            </div>
            <div class="form-group">
                <textarea name="text" id="" class="form-control" cols="30" placeholder="text" rows="10"></textarea>
            </div>
        </form>
    </div>

@endsection