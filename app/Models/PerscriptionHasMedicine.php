<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerscriptionHasMedicine extends Model
{
    protected $table = ('perscriptions');
    protected $primaryKey = 'perscription_id';
}
