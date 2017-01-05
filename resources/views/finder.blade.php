@extends('layouts.master')

@section('content')
<header>
    @if($parent!==$path)
        <a href="/finder?repo={{ $repo }}&path={{ $parent }}&branch={{ $branch }}"><h3 class="glyphicon glyphicon-arrow-left"></h3></a>
    @else
        <a href="/"><h3 class="glyphicon glyphicon-arrow-left"></h3></a>
    @endif
</header>
<ul class="list-group">
    @foreach($items as $item)
        <li class="list-group-item">
            @if(isset($item['type']) && $item['type'] == 'file')
                <a href="/edit?repo={{ $repo }}&path={{ $item['path'] }}&branch={{ $branch }}">{{ $item['name'] }}</a>
                <span class="badge">F</span>
            @else
                <a href="/finder?repo={{ $repo }}&path={{ $item['path'] }}&branch={{ $branch }}">{{ $item['name'] }}</a>
                <span class="badge">D</span>
            @endif
        </li>
    @endforeach
</ul>
@endsection

@section('styles')
<style>
    .list-group-item>.badge {
        float: left;
        margin-right: 10px;
    }
</style>
@endsection