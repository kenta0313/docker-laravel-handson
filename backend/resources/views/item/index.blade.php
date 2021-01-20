@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{url('/item')}}" method="GET">
            @csrf
            <p><input type="text" name="keyword" value="{{$keyword}}"></p>
            <p><input type="submit" value="検索"></p>
        </form>
        @if($items->count())

        <table border="1">
            <tr>
                <th>title</th>
                <th>author</th>
            </tr>
            @foreach ($items as $item)
            <tr>
                <td><a href="/item/{{$item->id}}">{{ $item->name }}</a></td>
                <td>{{ $item->amount }}</td>
            </tr>
            @endforeach
        </table>

        @else
        <p>見つかりませんでした。</p>
        @endif
@endsection
