<?php
$array = ['a', 'b', 'c', 1, 2, 3];

function recherche($recherche) {
     global $array;
     $i = 0;
     foreach($array as $value) {
         if($value == $recherche) {
             return "La position de $value est $i";
         }
         $i++;
     }
     return "No result!";
}
     
function select($name, $options, $option_vide = false) {
    $select = '<select name="' . $name . '" class="custom-select">';
        if ($option_vide)
            $select .= '<option value=""></option>';
            foreach($options as $key => $value) 
                 $select .= '<option value="'. $value .'">'. $key .' </option>';
                 $select .= '</select>';

                 return $select;
}