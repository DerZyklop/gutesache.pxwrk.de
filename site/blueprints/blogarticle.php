<?php if(!defined('KIRBY')) exit ?>

title: Blogarticle
pages: true
files: true
templates: false
fields:
  title:
    label: Title
    type:  text
  egname:
    label: Genossenschaft
    type:  select
    options: query
    query:
      page: register
      fetch: children
      value: '{{uid}}'
      text: '{{title}}'
  tag:
    label: Typ des Artikels
    type:  tags
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
