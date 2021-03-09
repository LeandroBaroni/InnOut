<?php

function loadModel($modelName){
    require_once(MODEL_PATH . "/{$modelName}.php");
}

function loadView($viewName, $params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH . "/{$viewName}.php");
}

function loadTemplateView($viewName, $params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }

<<<<<<< HEAD
    require_once(TEMPLATE_PATH . "/header.php");
    require_once(TEMPLATE_PATH . "/left.php");
    require_once(VIEW_PATH . "/{$viewName}.php");
    require_once(TEMPLATE_PATH . "/footer.php");
=======
    require_once(VIEW_PATH . "/{$viewName}.php");
>>>>>>> 1b1d713b6aad9122cdd5f44e6393890299e429d5
}