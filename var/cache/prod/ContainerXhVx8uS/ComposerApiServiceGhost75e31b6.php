<?php

namespace ContainerXhVx8uS;

include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).'/src/Eccube/Service/Composer/ComposerApiService.php';
class ComposerApiServiceGhost75e31b6 extends \Eccube\Service\Composer\ComposerApiService implements \Symfony\Component\VarExporter\LazyObjectInterface
{
    use \Symfony\Component\VarExporter\LazyGhostTrait;
    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".'*'."\0".'eccubeConfig' => [parent::class, 'eccubeConfig', null],
        "\0".parent::class."\0".'baseInfoRepository' => [parent::class, 'baseInfoRepository', null],
        "\0".parent::class."\0".'consoleApplication' => [parent::class, 'consoleApplication', null],
        "\0".parent::class."\0".'pluginContext' => [parent::class, 'pluginContext', null],
        "\0".parent::class."\0".'schemaService' => [parent::class, 'schemaService', null],
        "\0".parent::class."\0".'workingDir' => [parent::class, 'workingDir', null],
        'baseInfoRepository' => [parent::class, 'baseInfoRepository', null],
        'consoleApplication' => [parent::class, 'consoleApplication', null],
        'eccubeConfig' => [parent::class, 'eccubeConfig', null],
        'pluginContext' => [parent::class, 'pluginContext', null],
        'schemaService' => [parent::class, 'schemaService', null],
        'workingDir' => [parent::class, 'workingDir', null],
    ];
}
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

if (!\class_exists('ComposerApiServiceGhost75e31b6', false)) {
    \class_alias(__NAMESPACE__.'\\ComposerApiServiceGhost75e31b6', 'ComposerApiServiceGhost75e31b6', false);
}
