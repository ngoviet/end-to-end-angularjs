<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07/01/2015
 * Time: 9:25 PM
 */

class City extends Eloquent {

    protected $table = 'cities';
    public $timestamps = false;
    protected $fillable = array('name', 'code');

}