<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    use HasFactory;
    
    protected $table='payments';
    protected $ﬁllable=['payment_type','payment_student','amount','created_by','academic_year'];
   
}
