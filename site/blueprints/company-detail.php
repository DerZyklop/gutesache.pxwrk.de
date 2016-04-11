<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Firma Detail
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  city:
    label: Stadt
    type:  text
  text:
    label: Text
    type:  textarea
    size:  large
    buttons:
      - h1
      - h2
      - h3
      - bold
      - italic
      - email
      - link
