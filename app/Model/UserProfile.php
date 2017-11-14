<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    //
    protected $table = "user_profile";
    public $timestamps = false;

    protected $fillable = ['address','first_name','last_name','allow_search','about','facebook','twitter','google_plus','linkedin','phone','email','web_site','road','post_code','country','city','birth_day','height_in_cm','weight_in_kg','dress_size','eye_color','hair_color','skin_color','gender','model_catgory','Piercing','tatoo'];
}
