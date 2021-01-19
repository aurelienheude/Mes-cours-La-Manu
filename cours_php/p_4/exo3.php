<?php

    function param_text($param1, $param2)
    {
        $result = $param1.$param2;
        return$result;
    }

    echo param_text("coucou", "jean");
?>