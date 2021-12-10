<?php
function deleteAllTxtFiles()
{
    array_map('unlink', glob("*.txt"));
}
