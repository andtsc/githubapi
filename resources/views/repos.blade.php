@extends('layouts.master')

@section('content')
    <link href="css/app.css" rel="stylesheet">
    <div class="list-group">
        @foreach($repos as $repo)
            <div class="list-group-item repos">
                <div class="default">
                    <a href="/finder?repo={{ $repo['name'] }}">
                        <h4 class="list-group-item-heading">{{ $repo['name'] }}</h4>
                    </a>
                    <p class="list-group-item-text"> {{ $repo['description'] }}</p>
                    <br/>
                    <h5 class="list-group-item-heading">List Branch</h5>
                </div>
                <div class="list-group branch">
                    @foreach($repo['branches'] as $branch)
                        <a class="list-group-item" href="/finder?repo={{ $repo['name'] }}&branch={{ $branch['name'] }}">
                            <h4 class="list-group-item-heading">{{ $branch['name'] }}</h4>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

@endsection