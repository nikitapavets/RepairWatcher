<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Repair extends Model
{
    public function add($description, $code, $token, $comment, $type){

        $this->insert([
            ['description' => $description,
                'code' => $code,
                'token' => $token,
                'type' => $type,
                'comment' => $comment,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
