@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-3">
                            <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100"
                                 style="max-width: 60px;">
                        </div>
                        <div>
                            <div class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">{{ $post->user->username }}</span>
                                </a>

                                <a href="/profile/{{ $post->user->id }}" class="pl-3"
                                   style="border-left: 2px solid #000000;">Follow</a>
                            </div>
                        </div>
                    </div>



                    <hr>

                    <p>
                    <span class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </span> {{ $post->caption }}
                    </p>

                    <hr>

                    <div class="d-flex">
                        <div class="pr-5 pl-5"><strong>{{ $post->likers->count() }} Likes </strong></div>
                        <div class="pl-5 "><strong>{{ $post->comments->count() }} comments</strong></div>
                    </div>

                    <like-button user-id="{{ $post->user->id }}" likes="{{ $likes }}"></like-button>
                    <hr>
                    <div>
                        @comments(['model' => $post])
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
