@extends('articles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 mt-2 mb-2">
        <div class="pull-left">
            <h2>Articles</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('articles.create')}}">Create New Article</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table border="1px solid black">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price
        <th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td> {{ $article->name }} </td>
        <td> {{ $article->description }} </td>
        <td> {{ $article->price }} </td>
        <td>
            <a href="{{ route('articles.show', $article->id) }}">Show</a>
            <a href="{{ route('articles.edit', $article->id) }}">Edit</a>
            <form action="{{ route('articles.destroy', $article->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection