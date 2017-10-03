<?php

namespace frontend\models;

use Yii;
use yii\web\Application;

class EduModule
{
    public $name='Название модуля';
    public $description='Большое или не очень, но описание модуля. Тут может быть совсем несколько слов, а может 
    наооборот - целый реферат. Не известно - будет ли кто-то это читать или нет, но текста однозначно необходим для 
    тестирование вью.';
    public $howto='Инструкция к запуску';
    public $link='Ссылка для скачивания';
    public $sysreq='Linux <-стоит добавить какие-нибуль иконки';
    private $id;
    public $win;
    public $lin;
    public $mac;
    public $libs;

    public function getName(){
        return $this->name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function getHowTo(){
        return $this->howto;
    }

    public function getLink(){
        return $this->link;
    }

    public function getSysReq(){
        return $this->sysreq;
    }

    public function getSys(){
        return ['win' => $this->win, 'lin' => $this->lin, 'mac' => $this->mac];
    }

    public function setData($data_arr){
        $this->name=$data_arr['name'];
        $this->description=$data_arr['description'];
        $this->howto=$data_arr['instruction'];
        $this->link=$data_arr['url'];
        $this->win=$data_arr['win'];
        $this->mac=$data_arr['mac'];
        $this->lin=$data_arr['lin'];
        $this->libs=$data_arr['libs'];
        $this->id=$data_arr['id'];
    }


//  todo загрузка инфы из БД
}