<?php

namespace sturtznetwork\humhub\modules\hashtags\controllers;

use humhub\components\Controller;

class IndexController extends Controller
{

    public $subLayout = "@hashtags/views/layouts/default";

    /**
     * Renders the index view for the module
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

