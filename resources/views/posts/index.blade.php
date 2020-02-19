@extends('layouts.app')

@section('content')
    <div class="font-weight-bold text-center "> New posts</div>
    <div class="container">
        @foreach($posts as $post)
            <div class="row pt-4">
                <div class="col-6 offset-3">
                    <div class="pr-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100 "
                             style="max-width: 60px;">
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                            </a>
                        </span>
                    </div>
                    <div>
                        <p>
                            {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-4 ">
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-50">
                    </a>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
