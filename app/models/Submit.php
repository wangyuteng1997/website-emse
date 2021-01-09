<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    //
     protected $table = "candidature";
     protected $primaryKey = 'id';
     protected $fillable = ['id','LastName','FirstName','FranceID','sex','birthday','Countryofbirth','Nationality','Homeaddress','Phonenumber','Email','submit_time','photo','Letter'];

    /**
     */
    public $timestamps = false;
}
