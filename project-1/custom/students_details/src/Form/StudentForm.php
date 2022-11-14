<?php
namespace Drupal\students_details\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Database;
use Drupal\Core\Messenger\MessengerTrait;

class StudentForm extends FormBase{
    /**
     * {@inheritdoc}//for form id
     */

    public function getFormId(){
        return 'create_employee';
    }

    /**
     *  {@inheritdoc}
     */

     public function buildForm(array $form, FormStateInterface $form_state){

        $genderOptions = array (
            '0'=>'Select Gender',
            'Male'=>'Male',
            'Female'=>'Female',
            'Other'=>'Other'
        );

        $form['name']=array (
            '#type'=>'textfield',
            '#title'=>t('Name'),
            '#default_value'=>'',
            '#required'=>true,
            '#attributes'=>array(
                'placeholder'=>'Name'
            )

        );

        $form['gender']=array  (
            '#type'=>'select',
            '#title'=>'Gender',
            '#options'=> $genderOptions,
            '#required'=>true
        );

        $form['about_employee']=array (
            '#type'=>'textarea',
            '#title'=>'About Employee',
            '#default_value'=>'',
            '#attributes'=>array(
                'placeholder'=>'About Employee'
            )
        );

        $form['save']= array (
            '#type'=>'submit',
            '#value'=>'Save Employee',
            '#button_type'=>'primary'
        );

        return $form;
    }

}

?>



 <?php

// namespace Drupal\students_details\Form;
// use Drupal\Core\Form\FormBase;
// use Drupal\Core\Form\FormStateInterface;
// use Drupal\Core\Database\Database;
// use Drupal\Core\Messanger\MessengerTrait;

// class StudentForm extends FormBase{
//     /**
//      * {@inheritdoc}
//      */

//     public function getFormId(){
//         return 'create_students';
//     }

//     /**
//      * {@inheritdoc}
//      */

//     public function buildForm(array $form, FormStateInterface $form_state){
//         $form['name'] = array (
//             '#type'=>'textfield',
//             '#title'=>t('name'),
//             '#default_value'=>'',
//             '#required' => true,
//             '#attributes'=> array (
//                 'placeholder' => 'Enter name'
//             )
//         );

//         $form['rollNo'] = [
//             '#type'=>'textfield',
//             '#title'=>t('Roll Number'),
//             '#default_value'=>'',
//             '#required' => true,
//             '#attributes'=> array (
//                 'placeholder' => 'Enter roll number'
//             )
//         ];

//         $form['dob'] = [
//             '#type'=>'date',
//             '#title'=>t('Date of birth'),
//             '#default_value'=>'',
//             '#required' => true,
//             '#attributes'=> array (
//                 'placeholder' => 'Enter Date of Bith'
//             )
//         ];

//         $form['persentage'] = [
//             '#type'=>'textfield',
//             '#title'=>t('Persentage'),
//             '#default_value'=>'',
//             '#required' => true,
//             '#attributes'=> array (
//                 'placeholder' => 'Enter Previous class Persentage'
//             )
//         ];

//         $form['class'] = [
//             '#type'=>'number',
//             '#title'=>t('Class'),
//             '#default_value'=>'',
//             '#required' => true,
//             '#attributes'=> array (
//                 'placeholder' => 'Enter Previous class'
//             )
//         ];

//         $form['save'] = [
//             '#type' =>'submit',
//             '#value' => 'Register student',
//             '#button_type' => 'primary'
//         ];

//         return $form;

        
//     }
// }

?> 
