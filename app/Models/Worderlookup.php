<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worderlookup extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'wp_wc_order_product_lookup';
}
