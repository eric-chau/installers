<?php
namespace Composer\Installers;

/**
 * @author e.chau <eriic.chau@gmail.com>
 */
class BackBeeInstaller extends BaseInstaller
{
    protected $locations = array(
        'package' => '{$name}/'
    );
}
