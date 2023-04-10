<?php
class User 
{
    protected $loggedIn=false;
    protected $data=[
        'username'=>'Harry',
        'passsowrd' =>'pass'
    ];
    public function getData()
    {
        return this->data;

    }
    public function setData($data=5)

    {
        $this->data=$data;

    }
    public function isLoggedIn()
    {
       return $this->loggedIn;
    }
    }

$ref=new ReflectionClass('User');
// print_r(get_class_methods($ref),true);
// return the class name
echo $ref->getName();
//return 1 if class has getData method
echo $ref->hasMethod('getData');
?>