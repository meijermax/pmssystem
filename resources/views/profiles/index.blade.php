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
                        <a href="">test</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
