<?php
$persons =[
    ['name'=>'ahmed','age'=>28,'color'=>'red'],
    ['name'=>'hadzy','age'=>25,'color'=>'blue'],
    ['name'=>'wael','age'=>27,'color'=>'orange'],
];



foreach ($persons as $person){ ?>
    <h1>This Is <span style="color: <?= $person['color'] ?>"><?= $person['name'] ?></span>
        whos age is <span><?= $person['age'] ?></span></h1>
<?php
}