<?php
include("User.php");
$ref=new ReflectionMethod('User','getData');
// return class name
echo $ref->getShortName();
//return 1 if getData method is public
echo $ref->isPublic();
echo $ref->isPrivate();
$refproperty=new ReflectionProperty('User','data');
//return all the predefined methods
echo '<pre>'.print_r(get_class_methods($refproperty),true);
echo $refproperty->getName();
$user=new User();
$refproperty->setAccessible(true);
print_r($refproperty->getValue($user));
$refpara=new ReflectionParameter(['User','setData'],0);
echo $refpara->isOptional();
$refobj=new ReflectionObject($user);
echo $refobj->getShortName();
//return the path of file
echo $refobj->getFileName();

?>