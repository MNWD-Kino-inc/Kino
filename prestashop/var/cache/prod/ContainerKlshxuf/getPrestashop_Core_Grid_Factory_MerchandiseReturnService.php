<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.factory.merchandise_return' shared service.

return $this->services['prestashop.core.grid.factory.merchandise_return'] = new \PrestaShop\PrestaShop\Core\Grid\GridFactory(${($_ = isset($this->services['prestashop.core.grid.definition.factory.merchandise_return']) ? $this->services['prestashop.core.grid.definition.factory.merchandise_return'] : $this->load('getPrestashop_Core_Grid_Definition_Factory_MerchandiseReturnService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.data_provider.merchandise_return']) ? $this->services['prestashop.core.grid.data_provider.merchandise_return'] : $this->load('getPrestashop_Core_Grid_DataProvider_MerchandiseReturnService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.grid.filter.merchandise_return_form_factory']) ? $this->services['prestashop.core.grid.filter.merchandise_return_form_factory'] : $this->load('getPrestashop_Core_Grid_Filter_MerchandiseReturnFormFactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});
