@extends('layouts.master')

@section('content')
    <header>
        <a href="/finder?repo={{ $repo }}&path={{ $parent }}&branch={{ $branch }}"><h3 class="glyphicon glyphicon-arrow-left"></h3></a>
    </header>

    <ol class="breadcrumb">
        <li><a href="{{ $file['download_url'] }}" target="_blank">Download</a></li>
        <li><a href="{{ $file['html_url'] }}" target="_blank">View file</a></li>
    </ol>

    {!! Form::open(['url' => '/update', 'method' => 'POST']) !!}
        <input name="path" value="{{ $path }}" type="hidden"/>
        <input name="repo" value="{{ $repo }}" type="hidden"/>
        <input name="branch" value="{{ $branch }}" type="hidden"/>
        <div class="form-group">
            <label for="content">File content:</label>
            <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $content }}</textarea>
        </div>

        <div class="form-group">
            <label for="commit">Commit message:</label>
            <input class="form-control" type="text" id="commit" name="commit" value="{{ $commitMessage }}"/>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-control" value="Submit" />
        </div>
    {!! Form::close() !!}
@endsection
