<?php

$colb = array(
  'data' => 'b',
  //'header' => FLASE,  // cell is a header, true if present, even if set to FALSE, ouputs th instead of td
  'class' => 'bclass bclass',
  'any-td-attr' => 'bvalue',
);
$cella2 = array(
  'data' => 'a2',
  //'header' => FLASE,  // cell is a header, true if present, even if set to FALSE, ouputs th instead of td
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

/* output

<table class="sticky-enabled">
<caption>caption goes here</caption>
 <thead><tr><th>a</th><th class="bclass bclass" any-td-attr="bvalue">b</th><th>c</th> </tr></thead>
<tbody>
 <tr class="odd"><td>a1</td><td>b1</td><td>c1</td> </tr>
 <tr class="even"><td class="aclass aaclass" any-td-attr="avalue">a2</td><td>b2</td><td>c2</td> </tr>
 <tr class="odd"><td>a3</td><td>b3</td><td>c3</td> </tr>
 <tr class="even"><td>a4</td><td>b4</td><td>c4</td> </tr>
</tbody>
</table>

*/



