<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/4/28
 * Time: 9:44
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WagesTemplate extends Model{
    protected $fillable = ['name','content'];
}