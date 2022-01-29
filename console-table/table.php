<?php
require __DIR__.'/vendor/autoload.php';

$table = new LucidFrame\Console\ConsoleTable();
$table
    ->addHeader('Id')
    ->addHeader('Name')
    ->addHeader('Email')
    ->addRow()
        ->addColumn('101')
        ->addColumn('himanshi')
        ->addColumn('himanshi@gmail.com')
    ->addRow()
        ->addColumn('102')
        ->addColumn('saurav')
        ->addColumn('saurav@gmail.com')
    ->addRow()
        ->addColumn('103')
        ->addColumn('xyz')
        ->addColumn('xyz@gmail.com')
    ->display()
;