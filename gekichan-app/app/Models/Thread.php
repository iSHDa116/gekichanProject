<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    protected $fillable = [

        "user_id",
        "title",
        "body",
    ];

    //リレーション・・・このモデルとpost/userを紐付け
    public function posts(){

        //postは複数あるため、hasManyで関係を定義
        return $this->hasMany(Post::class);
    }

    //userは、一人一つなので、belongsToを使う
    public function user(){
        return $this->belongsTo(User::class);
    }
}
