<?php

namespace app\lib\base;

use yii\web\Controller;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ApiController extends Controller
{
    public function renderJson($value){
        echo json_encode($value);
        \Yii::$app->end();
    }
}