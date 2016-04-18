<?php if(!defined('KIRBY')) exit ?>

title: Erweiterte Suche – Kategorie
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  categories:
    label: Optionen
    type: structure
    entry: >
      {{title}} [{{description}}]
    fields:
      title:
        label: Titel der Option
        type: text
      description:
        label: Key in der Datenbank
        type: text
        size: large
