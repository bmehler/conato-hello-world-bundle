<?php
namespace bmehler\ContaoHelloWorldBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\CoreBundle\ContaoCoreBundle;
use bmehler\ContaoHelloWorldBundle\ContaoHelloWorldBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoHelloWorldBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}