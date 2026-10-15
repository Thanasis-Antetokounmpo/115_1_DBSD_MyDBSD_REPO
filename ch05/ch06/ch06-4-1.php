<?php

function printHeader()
{
    echo "<h3>STD: 113181124</h3>";
    echo "<h3>Name: 24</h3>";
    echo "<h3>EX05</h3>";
}

printHeader();

function callFunc1(Closure $closure)
{
    $closure();
}

function callFunc2(callable $callback)
{
    $callback();
}

$hello = function () {
    echo "Hello, World!<br/>";
};

function hi()
{
    echo "Hi, World!<br/>";
}

// callFunc1("hi");
callFunc1($hello);
callFunc2("hi");
callFunc2($hello);