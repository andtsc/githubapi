@extends('layouts.master')

@section('content')
<link rel="stylesheet" type="text/css" href="css/app.css" />
    <div class="list-group">
        @foreach($repos as $repo)
            <div class="list-group-item repos">
                <a class="list-group-item default" href="/finder?repo={{ $repo['name'] }}">
                    <h4 class="list-group-item-heading">{{ $repo['name'] }}</h4>
                    <p class="list-group-item-text">{{ $repo['description'] }}</p>
                </a>
                <div class="list-group branches">
                    @foreach($repo['branches'] as $branch)
                        <a href="/finder?repo={{ $repo['name'] }}&branch={{ $branch['name'] }}" class="list-group-item">{{ $branch['name'] }}</a>
                    @endforeach
                </div>
            </div>
            
        @endforeach
    </div>

@endsection