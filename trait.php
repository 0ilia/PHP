<?php

trait ezcReflectionReturnInfo
{
    function getReturnType()
    {
        echo "getReturnType</br>";
    }

    function getReturnDescription()
    {
        echo "getReturnDescription</br>" ;
    }
}

/*
 * В информатике отражение или рефлексия (холоним интроспекции, англ. reflection) означает процесс, во время которого программа может отслеживать и модифицировать собственную структуру и поведение во время выполнения.
 * */
class ezcReflectionMethod
{
    use ezcReflectionReturnInfo;

    function getReturnType()
    {
        echo "getReturnType Class!!!</br>";
    }
    /* ... */
}

$a = new  ezcReflectionMethod();
$a->getReturnType();
$a->getReturnDescription();
/*
class ezcReflectionFunction extends ReflectionFunction {
    use ezcReflectionReturnInfo;
    /* ... */
