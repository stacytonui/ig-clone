@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col=3 p-5">

            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a7247d6a-142c-47a6-a615-f88f13936642/dbf8j7j-e5b54ac0-3107-4c18-aa16-d34345b90543.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2E3MjQ3ZDZhLTE0MmMtNDdhNi1hNjE1LWY4OGYxMzkzNjY0MlwvZGJmOGo3ai1lNWI1NGFjMC0zMTA3LTRjMTgtYWExNi1kMzQzNDViOTA1NDMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.8XJR-6Cc31727F-QJRZrAwBpGliC2PMJCP94HLLH4Gs" height="70px">
        </div>
        <div class="col-9 p-5">
        <div class="d-flex justify-content-between align-items-baseline">

            <h1>{{ $user ->username}}</h1>
            <a href="/p/create">Add New Post</a>



        </div>
            <div class="d-flex">
                <div class="pr-5 "><strong>{{ $user->posts->count()}} </strong>posts</div>
                <div class="pr-5"><strong>23k </strong>followers</div>
                <div class="pr-5"><strong>212 </strong>following</div>

            </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-5">

        @foreach($user->posts as $post)

        <div class="col-4 pb-4">
            <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" class="w-100">
            </a>
        </div>
        @endforeach
    </div>


</div>
@endsection
