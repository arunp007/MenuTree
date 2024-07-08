<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThirdMenu extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'main_menu_id', 'sub_menu_id'];

    public function subMenus(){
        return $this->belongsTo(SubMenu::class);
    }

    public function mainMenus(){
        return $this->belongsTo(MainMenu::class);
    }
}
