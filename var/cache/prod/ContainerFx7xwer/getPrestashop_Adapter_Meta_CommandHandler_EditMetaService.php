<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.meta.command_handler.edit_meta' shared service.

return $this->services['prestashop.adapter.meta.command_handler.edit_meta'] = new \PrestaShop\PrestaShop\Adapter\Meta\CommandHandler\EditMetaHandler(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->load('getValidatorService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.meta.data_provider']) ? $this->services['prestashop.adapter.meta.data_provider'] : ($this->services['prestashop.adapter.meta.data_provider'] = new \PrestaShop\PrestaShop\Adapter\Meta\MetaDataProvider())) && false ?: '_'});
