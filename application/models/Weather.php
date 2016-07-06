<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'application/classes/simple_html_dom.php';

/**
 * Description of Weather
 *
 * @author Мова
 */
class Weather extends Model {
 
    public $temperature;
    public $cloudness;
    public $wind;
    public $barp;
    public $hum;
    public $water;

    public function load($data) {
        $html = file_get_html('http://www.gismeteo.ua/city/daily/5093/');

        //Находим элемент формы где написаны данные
        $k = $html->find('.higher',0);
        //Облачность получаем из титула картинки
        $this->cloudness = $k->find('.png',0)->title;
     
        $this->temperature = html_entity_decode($k->find('.temp',0)->find('.c',0)->plaintext); 
        
        $this->wind .= $k->find('.wind',0)->find('.wind8',0)->title.' ';
        $this->wind .= trim($k->find('.ms',0)->plaintext);
         
        $this->barp = trim($k->find('.torr',0)->plaintext);
        
        $this->hum = trim(html_entity_decode($k->find('.hum',0)->plaintext));
        
        $this->water = html_entity_decode($k->find('.water',0)->find('.c',0)->plaintext);
         
    }

}
