@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pt-5">
            <img class=" rounded-circle w-100" src="{{$user->profile->profileImage()}}"
            style="height: 250px;width: 250px" alt="image">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-items-center pb-3">
                   <div class="h2">{{$user->name}}</div>


                  <follow-button user-id="{{$user->id}}" follows="{{$follows}}">

                  </follow-button>


               </div>
                @can('update',$user->profile)
                <a href="/p/create" class="btn btn-primary ">Add New Post</a>
                <a href="/profile/{{$user->id}}/edit" class="btn btn-danger ">Edit Profile</a>
                @endcan

            </div>
            <div class="d-flex ">
                <div class="pr-4"><strong>{{$postCount}}</strong> Posts</div>
                <div class="pr-4"><strong>{{$followerCount}}</strong> Followers</div>
                <div><strong>{{$followingCount}}</strong> Following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div> {{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5 ">
        @foreach($user->posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt = "image" class="w-100" style="height: 400px"/>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
