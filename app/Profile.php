<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

    public function profileImage(){
        $imagePath=($this->image)? $this->image: 'profile/AM7NPsly4STNeYTMeYNwF2nRsUWEvgLpL5xk8kTE.png';
        return '/storage/'.$imagePath;
    }

    public function user(){

       return $this->belongsTo(User::class);
    }
}

