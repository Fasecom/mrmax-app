<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class statuses extends Model
{
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

}
