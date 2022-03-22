<?php

namespace Willis1776\NovaExcelImport\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
