<?php
//Criado por Anderson Ismael
//05 de outubro de 2018

function isUrl($url){
    if(filter_var($url, FILTER_VALIDATE_URL)){
        return true;
    }else{
        return false;
    }
}
