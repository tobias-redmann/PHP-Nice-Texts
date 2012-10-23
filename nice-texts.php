<?php

function _sp($count, $singular, $plural) {
  
  if ($count > 1 || $count == 0) return $count . ' ' . $plural;
  
  return $count . ' ' . $singular;
  
  
}

?>