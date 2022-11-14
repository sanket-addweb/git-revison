<?php
namespace Drupal\Students_details\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Code\Database\Database;

//render through controller
// class EmployeeController extends ControllerBase{
//   public function createEmployee(){
//       $form= \Drupal::formBuilder()->getForm('Drupal\employee\Form\EmployeeForm');
//       $renderForm= \Drupal::service('renderer')->render($form);

//       return [
//           '#type'=>'markup',
//           '#markup'=>$renderForm,
//           // '#markup'=>"Hello for check whether form call by contoler is appied or not "
//           '#title'=>'Employee Form'
//       ];
//   }
// }


// render form through employee.html.twig file
class StudentController extends ControllerBase{
  public function createStudents(){
      $form= \Drupal::formBuilder()->getForm('Drupal\students_details\Form\StudentForm');
      // $renderForm= \Drupal::service('renderer')->render($form);

      return [
        //   '#theme'=>'students',
        '#theme' => 'markup',
        //   '#items'=>$form,
          '#markup'=>"Hello for check whether form call by contoler is appied or not ",
          '#title'=>'Student Form'
      ];
  }

}
?>


<?php

// namespace Drupal\students_details\Controller;
// use Drupal\Core\Controller\ControllerBase;
// use Drupal\Core\Database\Database;

// // class StudentController extends ControllerBase{
// //     public function createStudents(){
// //         $form1=\Drupal::formBuilder()->getForm('Drupal\students_details\Form\StudentForm');
// //         $renderForm= \Drupal::service('renderer')->render($form1);
// //         // $renderForm= \Drupal::service('renderer')->render($form);

// //         return [
// //             '#type'=> 'markup',
// //             '#markup'=> $renderForm,
// //             '#title'=> 'Student Registration Form'
// //         ];
        
// //     }
// // }

// class StudentController extends ControllerBase{
//     public function createStudents(){
//         $form1=\Drupal::formBuilder()->getForm('Drupal\students_details\Form\StudentForm');
      

//         return [
//             '#theme'=> 'createForm',
//             '#formData'=> $form1,
//             '#title'=> 'Student Registration Form'
//         ];
        
//     }

// }

?>