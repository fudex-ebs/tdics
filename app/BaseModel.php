<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Validator;

class BaseModel extends Model
{
    public $timestamps = true;
    protected $softDelete = true;
    protected $rules = [];
    protected $messages = [];
    protected $errors;
    public function validate($data)
    {
        $v = Validator::make($data, $this->rules, $this->messages);

        if ($v->fails()) {
            $this->errors = $v->messages();

            return false;
        }

        return true;
    }
    public function errors($returnArray = true)
    {
        return $returnArray ? $this->errors->toArray() : $this->errors;
    }
}
