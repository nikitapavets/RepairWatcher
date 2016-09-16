<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function getAdmins(){

        $admins = $this->admins()->get();

        return $admins;
    }

    public function scopeAdmins($query){

        $query->where('rang', '=', 'admin');
    }

    public function getUsers(){

        $users = $this->users()->get();

        return $users;
    }

    public function scopeUsers($query){

        $query->where('rang', '=', 'user');
    }
}
