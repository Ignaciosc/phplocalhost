<?php
    foreach (getallheaders() as $key => $value) {
        echo "$key: $value" . "<br/>";
    }
