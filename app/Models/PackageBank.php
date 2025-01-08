<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageBank extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bank_name',
        'bank_account_name',
        'bank_account_number',
        'logo',
    ];
}
