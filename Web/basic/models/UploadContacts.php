<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use app\models\FuContacts;
class UploadContacts extends Model
{
    /**
     * @var UploadedFile
     */
    public $txtFile;

    public function rules()
    {
        return [
            [['txtFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'txt, csv'],
        ];
    }
    
    private function _getKeymaps($fields, $segs)
    {
        $keymap = array();
        for($i=0; $i < count($fields); $i++){
            $keymap[$fields[$i]] = $segs[$i];
        }
        return $keymap;   
    }
    public function upload()
    {
        if ($this->validate()) {
            $filepath = rtrim('uploads/' . $this->txtFile->baseName . '.' . $this->txtFile->extension);
            $this->txtFile->saveAs($filepath);
            $model = new FuContacts();
            echo $filepath."<br>";
            $file = fopen($filepath,"r");
            $fields = explode("\t", fgets($file));
            var_dump($fields);  
            while(! feof($file)){
                echo "ahah";    
                $line = fgets($file);
                echo $line;
                $segs = explode("\t",$line);
                $keymap = $this->_getKeymaps($fields, $segs);
                var_dump($keymap);
            }
            fclose($file);
            return true;
        } else {
            return false;
        }
    }
}