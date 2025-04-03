<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingStrategy extends Model {
    use HasFactory;

    protected $guarded = [];

    protected $table = 'marketing_strategies';
}
