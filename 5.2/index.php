<?php

require('app/app.php');


$view_bag = [
    'title' => 'Glossary List',
    'heading' => 'Glossary'
];


$data = new FileDataProvider(CONFIG['data_file']);

if (isset($_GET['search'])) {
    $items = $data->search_items($_GET['search']);

    $view_bag['heading'] = 'Search results for '. $_GET['search'];
} else {
    $items = $data->get_terms();
}


view('index', $items);

