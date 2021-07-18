@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 overflow-hidden offset-3 ">
                    <a href="/profile/{{$post->user->id}}">
                        <img src="/storage/{{$post->image}}" alt="image" style="height: 500px;width: 500px">
                    </a>
                </div>
            </div>

                <div class="row">
                <div class="col-4">
                    <div class="d-flex pt-4">
                            <div class="pr-3">
                                <img src="{{$post->user->profile->profileImage()}}"
                                     class="rounded-circle "
                                     style="width: 70px;height: 70px">
                            </div>
                        <div class="ml-3 ">
                            <p><span class="font-weight-bold">
                            <a href="/profile/{{$post->user->id }}">
                                  <span class="text-dark"> {{$post->user->username}}</span>
                                </a>
                        :</span>{{$post->caption}}</p>

                        </div>
                    </div>
                </div>
            </div>

        @endforeach

            <div class="row">
                <div class="col-6 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
    </div>

@endsection

