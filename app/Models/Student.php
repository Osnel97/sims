<?php
namespace App;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Student extends Model {
    protected $table='students';
    protected $ﬁllable=['ﬁrst_name','last_name','gender','email','academic_year',];
}
