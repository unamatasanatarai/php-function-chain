<?php

namespace {

    use Unamatasanatarai\PhpFunctionChain\PhpFunctionChain;

    function c(&$_ = null)
    {
        return new PhpFunctionChain($_);
    }
}
