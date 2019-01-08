<?php
// no direct access
defined('EMONCMS_EXEC') or die('Restricted access');
function find_controller() {
    global $session, $route, $mysqli;
    
    // Default route format
    $route->format = 'json';
    
    // Result can be passed back at the end or part way in the controller
    $result = false;
    
    // Read access API's and pages
    if ($route->action == "") {
        $route->format = 'html';
        return view("Modules/find/Views/intro.php", array());
    }
    if ($route->action == "ok") {
        $route->format = 'html';
        return view("Modules/find/Views/find.php", array());
    }
    
    // Pass back result
    return array('content' => $result);
}
