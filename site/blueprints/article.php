<?php if(!defined('KIRBY')) exit ?>

title: Beitrag
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  teaser:
  	label: Teaser
  	type: textarea
  text:
    label: Text
    type:  textarea
  tags:
  	label: Tags
  	type: tags
  date:
  	label: Datum
  	type: date