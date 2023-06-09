<?php

class MySqlDataProvider extends DataProvider {
    function __construct($source){
       $this->source = $source;
    }
    
public function get_terms() {
    
}

public function get_term($term) {
    
}

public function search_items($search) {

}

public function add_term($term, $definition) {
    $db = $this -> connect();

    if($db == null) {
        return;
    }

    $sql = 'INSERT INTO terms (term, definition) VALUES (:term, :definition)';
    $smt = $db->prepare($sql);

    $smt -> execute([
        ':term' => $term,
        ':definition' => $definition
    ]);

    $smt = null;
    $db = null;

}

public function update_term($original_term, $new_term, $definition){
    
}

public function delete_term($term) {
    
}

private function connect() {
    try {
        return new PDO($this -> source, CONFIG['db_user'], CONFIG['password']);
    } catch (PDOException $e) {
        return null;
    }
}
}