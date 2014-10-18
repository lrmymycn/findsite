<?php
/**
 * Created by PhpStorm.
 * User: Huisan
 * Date: 12/10/14
 * Time: 5:14 PM
 */

namespace FindSite\Controller;


class SiteController extends BaseController{

    function __construct(){
        parent::__construct();
    }

    public function indexAction(){
        $this->render('Site/index');
    }

    public function listAction(){
        $this->render('Site/list');
    }

    public function detailAction(){
        $this->render('Site/detail');
    }

    public function addAction(){
        if($this->app->request->isGet()){
            $this->render('Site/add');
        }else{

        }
    }
}