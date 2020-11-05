<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    //
    protected $table = 'db_published_journal';
    public $timestamps = false;
}


// MODEL นี้ใช้สำหรับงาน JournalController
