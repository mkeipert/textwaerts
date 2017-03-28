<?php

echo page('textwaerts')->children()->visible()->flip()->limit(10)->feed(array(
  'title'       => 'Mario Keipert > textwärts',
  'description' => 'Texte und Notizen von Mario Keipert',
  'link'        => 'textwaerts'
));