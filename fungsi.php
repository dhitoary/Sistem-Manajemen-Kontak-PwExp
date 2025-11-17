<?php
session_start();

$GLOBALS['db_file'] = 'contacts.json';

function require_login() {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        header("Location: index.php");
        exit;
    }
}

function check_logged_in() {
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        header("Location: dashboard.php");
        exit;
    }
}

function get_contacts() {
    global $db_file;
    if (!file_exists($db_file)) {
        file_put_contents($db_file, json_encode([]));
    }
    
    $data_json = file_get_contents($db_file);
    return json_decode($data_json, true);
}

function save_contacts($contacts) {
    global $db_file;
    file_put_contents($db_file, json_encode($contacts, JSON_PRETTY_PRINT));
}

function add_contact($new_contact) {
    $contacts = get_contacts();
    $contacts[] = $new_contact;
    save_contacts($contacts);
}

function get_contact($id) {
    $contacts = get_contacts();
    if (isset($contacts[$id])) {
        return $contacts[$id];
    }
    return null;
}

function update_contact($id, $updated_data) {
    $contacts = get_contacts();
    if (isset($contacts[$id])) {
        $contacts[$id] = $updated_data;
        save_contacts($contacts);
        return true;
    }
    return false;
}

function delete_contact($id) {
    $contacts = get_contacts();
    if (isset($contacts[$id])) {
        unset($contacts[$id]);
        $contacts = array_values($contacts);
        save_contacts($contacts);
        return true;
    }
    return false;
}

?>