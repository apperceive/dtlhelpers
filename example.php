<?php

$colb = array(
  'data' => 'b',
  'header' => false,  // cell is a header
  'class' => 'bclass bclass',
  'any-td-attr' => 'bvalue',
);
$cella2 = array(
  'data' => 'a2',
  //'header' => false,  // cell is a header
  'class' => 'aclass aaclass',
  'any-td-attr' => 'avalue',
);
$cols = array('a', $colb, 'c');
$data = array(
array('a1', 'b1', 'c1'), 
array($cella2, 'b2', 'c2'),
array('a3', 'b3', 'c3'), 
array('a4', 'b4', 'c4'),
);
$vars = array(
  'header' => $cols, 
  'rows' => $data,
  'attributes' => array(),
  'caption' => 'caption goes here',
  'colgroups' => array(),
  'sticky' => true,
  'empty' => 'no data dada',
);
drupal_set_message(theme_table($vars));

print theme_table($vars);
