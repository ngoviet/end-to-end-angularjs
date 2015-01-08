<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07/01/2015
 * Time: 9:22 PM
 */

class CitiesController extends BaseController {

    public function index(){
        return Response::json(City::get());
    }
}