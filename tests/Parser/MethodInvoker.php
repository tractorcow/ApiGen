<?php

namespace ApiGen\Parser\Tests;

use ReflectionClass;


class MethodInvoker
{

	/**
	 * @param object $object
	 * @param string $method
	 * @param array $args
	 * @return mixed
	 */
	public static function callMethodOnObject($object, $method, array $args = [])
	{
		$classReflection = new ReflectionClass($object);
		$methodReflection = $classReflection->getMethod($method);
		$methodReflection->setAccessible(TRUE);
		return $methodReflection->invokeArgs($object, $args);
	}

}
