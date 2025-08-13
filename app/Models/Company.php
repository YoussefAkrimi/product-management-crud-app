<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;
protected $guarded = [];


 // to find the list of products that the company has we use the next function :
    // $company = App\Models\Company::first() and then
    // $company->products or $company->products[0] or $company->products->first()
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
