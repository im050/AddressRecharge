<?php

namespace Daling\Balance\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Recharge extends Model
{
   const WAIT_PAY = 1; //充值中
   const PAYED = 2; //充值成功

    protected $table = 'recharges';
    protected $guarded = ['id'];
}
