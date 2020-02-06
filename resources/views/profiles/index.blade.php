@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5 ">
           <img src="{{ $user->profile->profileImage() }}" alt="logo"
           class="rounded-circle mw-100">

       </div>
       <div class="col-9 pt-5 pr-5">
           <div class="d-flex justify-content-between align-items-baseline  ">
               <div class="d-flex align-items-center">

                   <div class="h4">{{ $user->username }}</div>

                   <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>

               </div>
                   <a href="/p/create">Add New Post</a>

           </div>

               <a href="/profile/{{ $user->id }}/edit"> Edit Profile</a>


           <div class="d-flex">
               <div class="pr-5" ><strong>{{ $postCount }}</strong> posts</div>
               <div class="pr-5" ><strong>{{ $followersCount }}</strong> followers</div>
               <div class="pr-5"><strong>{{ $followingCount }}</strong> followings</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#">{{$user->profile->url}}</a></div>

       </div>
   </div>

    <div class="row pt-3">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
