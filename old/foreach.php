<?php
$names = ['ahmed', 'mohamed', 'essam'];



foreach ($names as $key => $name){
    echo '<h1>' . ($key + 1 ) .'-' . $name .'</h1>';
}

foreach ($names as $name){ ?>
    <h1>Welcome Mr <span style="color:red"><?= $name ?></span></h1>

<?php
}
