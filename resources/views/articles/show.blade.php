@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        <div class= "col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header">
                    <span>
                        Article by Kei

                        <small>
                            <a href="/articles/{{ $article->id }}/edit"> Edit</a>
                        </small>
                    </span>

                    <span class="float-right">
                        {{ $article->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="card-body">
                    {{ $article->content }}
                </div>
            </div>
        </div>
    </div>
@endsection