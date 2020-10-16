<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    public function in_data($name,$title,$body,$ar_date,$i_name)
    {
        $this->name=$name;
        $this->title=$title;
        $this->body=$body;
        $this->im_name=$i_name;
        $this->b_date=$ar_date;
        $this->save();
    }
}
