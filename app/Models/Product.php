<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $table = 'products';
    protected $guarded = []; //this is less secure!!!!!! but better then having to repeat fillable so many times!!


    // if i have a product and i need info aboout the company we use the next function : 
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
     
}
