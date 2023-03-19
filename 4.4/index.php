<?php

require('app/app.php');


$view_bag = [
    'title' => 'Glossary List'
];
$view_bag['title'] = 'This is the title';



view('index', get_terms());

