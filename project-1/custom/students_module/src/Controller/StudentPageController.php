<?php

namespace Drupal\students_module\Controller;
use Drupal\Core\Controller\ControllerBase;

class StudentPageController extends ControllerBase{
    public function studentInfo(){
        return[
            '#title'=>'Student Information',
            '#markup'=>'<h3>Now you can see student detail</h3>'
        ];
    }
}