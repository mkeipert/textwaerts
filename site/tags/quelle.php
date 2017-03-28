<?php

kirbytext::$tags['quelle'] = array(
  'html' => function($tag) {
    return '<div class="quelle">' . $tag->attr('quelle') . '</div>';
  }
);