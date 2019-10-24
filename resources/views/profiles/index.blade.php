@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PMS  {{ $user->username }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                        {{ $user->profile->title ?? 'N/A' }}
                        {{ $user->profile->url ?? 'N/A' }}

                    <div>
                        {{ $user->post->count() }}
                    </div>

                    <div class="div">
{{--                        <follow-button user-id="{{ $user->id }}"></follow-button>--}}
                    </div>

                    <div>
                        <a href="{{route('posts.create')}}">add new project</a>
                    </div>

                    <div class="pt-4 pb-4">
                        @foreach($user->post as $post)

                            <a href="/posts/{{ $post->id }}">
                                <img src="/storage/{{ $post->image }}" class="img-fluid pb-4" />
                            </a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
