<?php

interface Publicacao{    
    function abrir();
    function fechar();
    function folhear($pag);
    function avancarPag();
    function voltarPag();
}