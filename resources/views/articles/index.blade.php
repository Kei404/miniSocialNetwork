@extends('layouts.app')

@section('content')
    <div class="row justify-content-md-center">
        @forelse($articles as $article)
            <div class= "col-md-6 col-md-offset-4" style="margin: 10px;">
                <div class="card">
                    <div class="card-header">
                        <span> KEi404 </span>
                        <span class="float-right">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>
                    <div class="card-body">
                         {{ $article->shortContent }}

                        <a href="/articles/{{ $article->id }}">Read more</a>

                    </div>
                    <div class="card-footer clearfix" style="background-color: white">
                        
                        @if($article->user_id == Auth::id())
                            <form action="/articles/{{ $article->id }}" method="POST" class="float-right" style="margin-left: 25px">
                                
                                {{ csrf_field() }}

                                {{ method_field('DELETE') }}
                                
                                <button class="btn btn-danger bt-sm">
                                    Delete
                                </button>             
                            </form>
                        @endif

                        <i class="fa fa-heart float-right"></i>
                    </div>
                </div>
            </div>
        @empty
            No articles.
        @endforelse
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-8 col-md-offset-4">
            {{ $articles->links() }}
        </div>
    </div>

@endsection