@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn4.vectorstock.com/i/1000x1000/81/03/airplane-travel-logo-vector-9318103.jpg" class="img-responsive rounded-circle" width="100%" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>10k</strong> followers</div>
                <div class="pr-4"><strong>50</strong> following</div>
            </div>
            <!-- <div class="pt-4 font-weight-bold">travelgram.universe</div> -->
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <!-- <div>A community that supports millions of people exploring the world through their lenses. Reach out to us for Funding.</div> -->
            <div>{{ $user->profile->description }}</div>
            <!-- <div><a href="#">www.travelgram.universe</a></div> -->
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
                <img src="/storage/{{ $post->image }}" class="img-responsive" width="100%" alt="">
            </a>
        </div>

        @endforeach
        <!-- <div class="col-4">
                <img src="https://images.pexels.com/photos/1371360/pexels-photo-1371360.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-responsive" width="100%" alt="">
            </div>
            <div class="col-4">
                <img src="https://images.pexels.com/photos/3061217/pexels-photo-3061217.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-responsive" width="100%" alt="">
            </div>
            <div class="col-4">
                <img src="https://images.pexels.com/photos/3622573/pexels-photo-3622573.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-responsive" width="100%" alt="">
            </div> -->
    </div>
</div>
@endsection