<?php
namespace App\Validation;
use App\Models\UsersModel;
class UserRole{

   // the validateUser function it will 
   // - return true if first_name and password match with account in database
   // - return false if first_name and password not match with account in database
   public function validateUser( string $str, string $fields,array $data)
   {
       $model = new UsersModel();
       $user = $model->where('first_name',$data['first_name'])
                     ->first();
       if(!$user)
           return false;

       return password_verify($data['password'],$user['password']);
   }
}