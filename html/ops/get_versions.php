#! /usr/bin/env php
<?php

// get XML client version list from BOINC server

file_put_contents(
    "../user/versions.xml",
    file_get_contents("http://boinc.berkeley.edu/download_all.php?xml=1")
);
?>
