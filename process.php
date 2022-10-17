<?php 
 
if ( !empty($_POST) && $_SERVER["REQUEST_METHOD"] === 'POST' && !empty($_POST['action']) && $_POST['action'] === 'registration' ) {
 
   /*@ Perform backend validation */
   $errors = '';
 
   $firstName = $_POST['first_name'];
   if ( empty($_POST['first_name']) ) {
      $errors .= '<li>First Name is required</li>';
   }
 
   $lastName = $_POST['last_name'];
   if ( empty($_POST['last_name']) ) {
      $errors .= '<li>Last Name is required</li>';
   }
 
   $email = $_POST['email'];
   if ( empty($_POST['email']) ) {
      $errors .= '<li>Email is required</li>';
   }
 
   if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
      $errors .= '<li>Invalid E-mail address</li>';
   }
 
   $password = $_POST['password'];
   if ( empty($_POST['password']) ) {
      $errors .= '<li>Password is required</li>';
   }
 
   $confirmPassword = $_POST['confirm_password'];
   if ( empty($_POST['confirm_password']) ) {
      $errors .= '<li>Confirm Password is required</li>';
   }
 
   if ( $password !== $confirmPassword ) {
      $errors .= '<li>Password & Confirm Password does not match</li>';  
   }
 
 
   if ( empty($errors) ) {
 
      /*@ Save your data in database and return respose */
      http_response_code( 200 );
      echo json_encode( [ 'msg' => 'Your registration has successfully done' ] );
 
   } else {
 
      /*@ Return errors */
 
      http_response_code( 406 ); 
      echo json_encode( [ 'msg' => $errors ] );
   }
 
}