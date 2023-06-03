<?php

require_once 'models/pet.php';
require_once 'models/petOwner.php';



$o = new petOwner();
$o->id=1;
$o->name = 'Rosa';
$o->lastName = 'Lopez';
$o->doc = '11222333';
$o->phone = '12345678';
$o->address = 'owner@example.com';

$p=new pet();
$p->id = 1;
$p->name = 'Poppy';
$p->race = 'German Shepherd';
$p->owner = $o;

$p->ShowPetData();