<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worder extends Model
{
    use HasFactory;
    protected $connection = 'mysql2';
    protected $table = 'wp_woocommerce_order_items';

}
