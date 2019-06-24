<?php

namespace {

// Complete with class alias invoking Alt+Enter on completion list

    use TheNamespace\MyClass as MyClassAlias;

    $a = new MyClassAlias();
}

namespace TheNamespace {
    class MyClass
    {
    }
}