<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.routing.loader.annot_file' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\config\\FileLocator.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\Config\\FileLocator.php';

@trigger_error('The "sensio_framework_extra.routing.loader.annot_file" service is deprecated since version 5.2', E_USER_DEPRECATED);

return $this->privates['sensio_framework_extra.routing.loader.annot_file'] = new \Symfony\Component\Routing\Loader\AnnotationFileLoader(($this->privates['file_locator'] ?? $this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel')), ($this->targetDirs[3].'\\src/Resources'), array(0 => ($this->targetDirs[3].'\\src')))), ($this->privates['sensio_framework_extra.routing.loader.annot_class'] ?? $this->load('getSensioFrameworkExtra_Routing_Loader_AnnotClassService.php')));
