<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model {

    protected $guarded = [];

    public function __construct($attributes = [])
    {
        $this->setConnection(session('connection'));
        parent::__construct($attributes);
    }
}
