<?php
$students=[
    ['name'=>'ahmed','result'=>55],
    ['name'=>'mohamed','result'=>85],
    ['name'=>'essam','result'=>75],
    ['name'=>'ayat','result'=>67],
];
?>
<style>
    table{ width: 100%; border-collapse: collapse;}
    table,td,th{border:1px solid #555;}
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Result</th>
        <th>Grade</th>
    </tr>
    <?php foreach ($students as $student){ ?>
    <tr>
        <td><?= $student['name'] ?></td>
        <td><?= $student['result'] ?></td>
        <td>
            <?php
            if($student['result'] >= 85){
                echo '<span style="color:blue">A</span>';
            }elseif($student['result'] >= 75){
                echo '<span style="color:orange">B</span>';
            }elseif($student['result'] >= 65){
                echo '<span style="color:darkmagenta">C</span>';

            }elseif($student['result'] >= 50) {
                echo '<span style="color:orangered">D</span>';
            }else{
                echo '<span style="color:red">F</span>';
            }
            ?>
        </td>
    </tr>
    <?php } ?>
</table>
