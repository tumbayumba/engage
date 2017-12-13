<?php
namespace router;
use router\IRouter;

interface IRouter {
	public function dispatch();
}