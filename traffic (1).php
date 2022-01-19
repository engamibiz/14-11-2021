<?php
$messages=[
    'green'=>'its ok to go',
    'yellow'=>'get ready',
    'red'=>'stop it is danger'
] ;
$traffic=['green','red','yellow'];

foreach($traffic as $light)
    {
    ?>
    <h1> Light is <?= $light ?> then : 
    <span style='color : <?= $light ?>'> <?= $messages[$light]; ?>  </span>
    </h1>
    <?php }





/*
// $traffic=['green','red','yellow']; ctrl-k + ctrl c for multiple line comment 
// foreach($traffic as $light){
//     echo'<h1>';
//     echo $messages[$light];
//     echo'</h1>';
// }*/
/*
if ($traffic=='red'){
    echo $messages['red'];
}
else if ($traffic=='yellow'){ 
    echo $messages['yellow'];
}
else {echo $messages['green'];

}*/
