<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\User;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name',
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
