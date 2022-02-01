<?php
    require '../model/project.model.php';

    function get_all_project()
    {
        $project = json_decode(get_project());

        return $project;
    } 
?>