@extends('Base.parent')
@section('title','Items')

@section('body')
    <div class="container" style="margin-top: 80px;">
        <div class="mb-3"><a href="{{ route('item.create') }}" class="btn btn-sm btn-info">Create new</a></div>
        <table class="table table-hover">
            <tr><th>#</th><th>Name</th><th>Text</th><th>Created-at</th></tr>
            @foreach($kitob as $k)
                <tr><td>{{ $loop->iteration }}</td>
                    <td><a href="{{ route('item.show',['item'=>$k->id]) }}">{{ $k->name }}</a></td>
                    <td>{{ Str::limit($k->text,60) }} <br/> <a href="{{ route('item.show',['item'=>$k->id]) }}" class="btn mt-3 btn-sm btn-primary ">Show more</a> </td>
                    <td>{{ $k->created_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection