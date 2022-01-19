<?php
echo 'hello world';
$name='ahmed';  // string
$integer = -5 ; // integer
$float = 4.6;
$boolean = true ; // true / false
?>

<h1><?= $name ?></h1>
<?php
if($integer > 0){
    echo '<h1>positve</h1>';
}else if ($integer < 0 ){
    echo '<h1>negative</h1>';
}else{
    echo '<h1>zero</h1>';
}