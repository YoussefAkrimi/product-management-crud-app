<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ProductPolicy
{   
public function edit(User $user, Product $product): bool
{
    return $product->company->user->is($user);
}
}
