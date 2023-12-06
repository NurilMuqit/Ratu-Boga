<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['customer_id', 'menu_id', 'order_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
