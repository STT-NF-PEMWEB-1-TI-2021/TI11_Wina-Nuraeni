<!DOCTYPE html>
<html>
    <body>
<?php
     $tims = ["erwin","heru","ali","zaki"];
     array_pop($tims);
     foreach($tims as $person){
         echo $person. '<br/>';
     }
    ?>
</br>

<?php
     $tims = ["erwin","heru","ali","zaki"];
     array_push($tims,"wati");
     foreach($tims as $person){
         echo $person. '<br/>';
     }
    ?>
</br>

<?php
     $tims = ["erwin","heru","ali","zaki"];
     array_shift($tims);
     foreach($tims as $person){
         echo $person. '<br/>';
     }
    ?>
</br>

<?php
     $tims = ["erwin","heru","ali","zaki"];
     array_unshift($tims,"joko","wati");
     foreach($tims as $person){
         echo $person. '<br/>';
     }
    ?> 
    </body>
    </html>
    