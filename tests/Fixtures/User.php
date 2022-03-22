<?php

namespace Willis1776\NovaExcelImport\Tests\Fixtures;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
