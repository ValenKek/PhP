<?php
function createAllFiles(){
    if(!file_exists("2.txt")){
        createFile("2.txt");
    }
    if(!file_exists("3.txt") ){
        createFile("3.txt");
    }
    if(!file_exists("4.txt")){
        createFile("4.txt");
    }
    if(!file_exists("5.txt")){
        createFile("5.txt");
    }
}
function createFile($fileName){
    $countOfVotes = 0;
    $votes = fopen($fileName, "w");
    fwrite($votes, $countOfVotes);
    fclose($votes);
}
