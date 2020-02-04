@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    
        <div class="col=3 p-5">
            
            <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/a7247d6a-142c-47a6-a615-f88f13936642/dbf8j7j-e5b54ac0-3107-4c18-aa16-d34345b90543.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2E3MjQ3ZDZhLTE0MmMtNDdhNi1hNjE1LWY4OGYxMzkzNjY0MlwvZGJmOGo3ai1lNWI1NGFjMC0zMTA3LTRjMTgtYWExNi1kMzQzNDViOTA1NDMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.8XJR-6Cc31727F-QJRZrAwBpGliC2PMJCP94HLLH4Gs" height="70px">
        </div>
        <div class="col-9 p-5">
        <div><h1>{{ $user ->username}}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153 </strong>posts</div>
                <div class="pr-5"><strong>23k </strong>followers</div>
                <div class="pr-5"><strong>212 </strong>following</div>
                
            </div>
           <div class="pt-4 font-weight-bold">btsgram.org</div>
            <div>Go on your path, even if you live for a day.</div>
            <div><a href="#">www.btsgram.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4"> <img src="https://instagram.fmba1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/74656380_425019808422982_2099819317082460889_n.jpg?_nc_ht=instagram.fmba1-1.fna.fbcdn.net&amp;_nc_cat=110&amp;_nc_ohc=1If4gxY3FmAAX_qYTX-&amp;oh=63f8d31bdb826f95b12dffa80e637ec7&amp;oe=5EBA93E9" class="w-100"></div>
        <div class="col-4"><img  src="https://instagram.fmba1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c181.0.718.718a/s640x640/53551271_154867622212691_4928741116196077837_n.jpg?_nc_ht=instagram.fmba1-1.fna.fbcdn.net&amp;_nc_cat=111&amp;_nc_ohc=GoZVnBLUcW4AX9nup-g&amp;oh=b1f18b88d12d1f64cf779842cb44c91f&amp;oe=5E98A6BC" class="w-100"></div>
        <div class="col-4"><img src="https://instagram.fmba1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c135.0.809.809a/s640x640/45375683_1404515566351175_4997110386899791324_n.jpg?_nc_ht=instagram.fmba1-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=euZU4yXeqU8AX9H8XYf&oh=94888a01ef24fa37f9baef7c851ef6de&oe=5EA30689" class="w-100"></div>
    </div>
  
</div>
@endsection
