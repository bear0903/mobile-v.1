<?php
namespace Home\Controller;
use Think\Controller;

class HomeController extends Controller {
    public function _initialize(){
        
    	if (ismobile()) {
            //设置默认默认主题为 Mobile
    		//C('DEFAULT_CONTROOLER','MobileController');
            C('DEFAULT_V_LAYER','Mobile');
            //C('DEFAULT_MODULE','ModileIndex');
            //$this->theme('MobileIndex');
        }
    }
}