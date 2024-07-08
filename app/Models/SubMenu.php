<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function mainMenus(){
        return $this->belongsTo(MainMenu::class);
    }

    public function thirdMenus(){
        return $this->hasMany(ThirdMenu::class);
    }
}
