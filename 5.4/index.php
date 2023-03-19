<?php

require('app/app.php');


$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];



if (isset($_GET['search'])) {
    $items = Data::search_term($_GET['search']);

    $view_bag['heading'] = 'Search results for '. $_GET['search'];
} else {
    $items = Data::get_terms();
}


view(
    name:'index',
    model:$items
);

