<?php
namespace Unamatasanatarai\PhpFunctionChain;

class ☞{
	private $_;

	public function __construct(&$_){
		$this->_ = &$_;
	}

	public function __call($name, $args){
		$this->_ = $name(...$args);
		return $this;
	}
}