<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command_loader' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\CommandLoader\\CommandLoaderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\CommandLoader\\ContainerCommandLoader.php';

return $this->services['console.command_loader'] = new \Symfony\Component\Console\CommandLoader\ContainerCommandLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('console.command.about' => function (): \Symfony\Bundle\FrameworkBundle\Command\AboutCommand {
    return ($this->privates['console.command.about'] ?? $this->load('getConsole_Command_AboutService.php'));
}, 'console.command.assets_install' => function (): \Symfony\Bundle\FrameworkBundle\Command\AssetsInstallCommand {
    return ($this->privates['console.command.assets_install'] ?? $this->load('getConsole_Command_AssetsInstallService.php'));
}, 'console.command.cache_clear' => function (): \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand {
    return ($this->privates['console.command.cache_clear'] ?? $this->load('getConsole_Command_CacheClearService.php'));
}, 'console.command.cache_pool_clear' => function (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolClearCommand {
    return ($this->privates['console.command.cache_pool_clear'] ?? $this->load('getConsole_Command_CachePoolClearService.php'));
}, 'console.command.cache_pool_delete' => function (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolDeleteCommand {
    return ($this->privates['console.command.cache_pool_delete'] ?? $this->load('getConsole_Command_CachePoolDeleteService.php'));
}, 'console.command.cache_pool_prune' => function (): \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand {
    return ($this->privates['console.command.cache_pool_prune'] ?? $this->load('getConsole_Command_CachePoolPruneService.php'));
}, 'console.command.cache_warmup' => function (): \Symfony\Bundle\FrameworkBundle\Command\CacheWarmupCommand {
    return ($this->privates['console.command.cache_warmup'] ?? $this->load('getConsole_Command_CacheWarmupService.php'));
}, 'console.command.config_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\ConfigDebugCommand {
    return ($this->privates['console.command.config_debug'] ?? $this->load('getConsole_Command_ConfigDebugService.php'));
}, 'console.command.config_dump_reference' => function (): \Symfony\Bundle\FrameworkBundle\Command\ConfigDumpReferenceCommand {
    return ($this->privates['console.command.config_dump_reference'] ?? $this->load('getConsole_Command_ConfigDumpReferenceService.php'));
}, 'console.command.container_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\ContainerDebugCommand {
    return ($this->privates['console.command.container_debug'] ?? $this->load('getConsole_Command_ContainerDebugService.php'));
}, 'console.command.debug_autowiring' => function (): \Symfony\Bundle\FrameworkBundle\Command\DebugAutowiringCommand {
    return ($this->privates['console.command.debug_autowiring'] ?? $this->load('getConsole_Command_DebugAutowiringService.php'));
}, 'console.command.event_dispatcher_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\EventDispatcherDebugCommand {
    return ($this->privates['console.command.event_dispatcher_debug'] ?? $this->load('getConsole_Command_EventDispatcherDebugService.php'));
}, 'console.command.form_debug' => function (): \Symfony\Component\Form\Command\DebugCommand {
    return ($this->privates['console.command.form_debug'] ?? $this->load('getConsole_Command_FormDebugService.php'));
}, 'console.command.router_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\RouterDebugCommand {
    return ($this->privates['console.command.router_debug'] ?? $this->load('getConsole_Command_RouterDebugService.php'));
}, 'console.command.router_match' => function (): \Symfony\Bundle\FrameworkBundle\Command\RouterMatchCommand {
    return ($this->privates['console.command.router_match'] ?? $this->load('getConsole_Command_RouterMatchService.php'));
}, 'console.command.translation_debug' => function (): \Symfony\Bundle\FrameworkBundle\Command\TranslationDebugCommand {
    return ($this->privates['console.command.translation_debug'] ?? $this->load('getConsole_Command_TranslationDebugService.php'));
}, 'console.command.translation_update' => function (): \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand {
    return ($this->privates['console.command.translation_update'] ?? $this->load('getConsole_Command_TranslationUpdateService.php'));
}, 'console.command.xliff_lint' => function (): \Symfony\Bundle\FrameworkBundle\Command\XliffLintCommand {
    return ($this->privates['console.command.xliff_lint'] ?? $this->load('getConsole_Command_XliffLintService.php'));
}, 'console.command.yaml_lint' => function (): \Symfony\Bundle\FrameworkBundle\Command\YamlLintCommand {
    return ($this->privates['console.command.yaml_lint'] ?? $this->load('getConsole_Command_YamlLintService.php'));
}, 'doctrine.cache_clear_metadata_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearMetadataCacheDoctrineCommand {
    return ($this->privates['doctrine.cache_clear_metadata_command'] ?? $this->load('getDoctrine_CacheClearMetadataCommandService.php'));
}, 'doctrine.cache_clear_query_cache_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearQueryCacheDoctrineCommand {
    return ($this->privates['doctrine.cache_clear_query_cache_command'] ?? $this->load('getDoctrine_CacheClearQueryCacheCommandService.php'));
}, 'doctrine.cache_clear_result_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ClearResultCacheDoctrineCommand {
    return ($this->privates['doctrine.cache_clear_result_command'] ?? $this->load('getDoctrine_CacheClearResultCommandService.php'));
}, 'doctrine.cache_collection_region_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CollectionRegionDoctrineCommand {
    return ($this->privates['doctrine.cache_collection_region_command'] ?? $this->load('getDoctrine_CacheCollectionRegionCommandService.php'));
}, 'doctrine.clear_entity_region_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EntityRegionCacheDoctrineCommand {
    return ($this->privates['doctrine.clear_entity_region_command'] ?? $this->load('getDoctrine_ClearEntityRegionCommandService.php'));
}, 'doctrine.clear_query_region_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\QueryRegionCacheDoctrineCommand {
    return ($this->privates['doctrine.clear_query_region_command'] ?? $this->load('getDoctrine_ClearQueryRegionCommandService.php'));
}, 'doctrine.database_create_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand {
    return ($this->privates['doctrine.database_create_command'] ?? $this->load('getDoctrine_DatabaseCreateCommandService.php'));
}, 'doctrine.database_drop_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand {
    return ($this->privates['doctrine.database_drop_command'] ?? $this->load('getDoctrine_DatabaseDropCommandService.php'));
}, 'doctrine.database_import_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ImportDoctrineCommand {
    return ($this->privates['doctrine.database_import_command'] ?? $this->load('getDoctrine_DatabaseImportCommandService.php'));
}, 'doctrine.ensure_production_settings_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\EnsureProductionSettingsDoctrineCommand {
    return ($this->privates['doctrine.ensure_production_settings_command'] ?? $this->load('getDoctrine_EnsureProductionSettingsCommandService.php'));
}, 'doctrine.generate_entities_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\GenerateEntitiesDoctrineCommand {
    return ($this->privates['doctrine.generate_entities_command'] ?? $this->load('getDoctrine_GenerateEntitiesCommandService.php'));
}, 'doctrine.mapping_convert_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ConvertMappingDoctrineCommand {
    return ($this->privates['doctrine.mapping_convert_command'] ?? $this->load('getDoctrine_MappingConvertCommandService.php'));
}, 'doctrine.mapping_import_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\ImportMappingDoctrineCommand {
    return ($this->privates['doctrine.mapping_import_command'] ?? $this->load('getDoctrine_MappingImportCommandService.php'));
}, 'doctrine.mapping_info_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\InfoDoctrineCommand {
    return ($this->privates['doctrine.mapping_info_command'] ?? $this->load('getDoctrine_MappingInfoCommandService.php'));
}, 'doctrine.query_dql_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunDqlDoctrineCommand {
    return ($this->privates['doctrine.query_dql_command'] ?? $this->load('getDoctrine_QueryDqlCommandService.php'));
}, 'doctrine.query_sql_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\RunSqlDoctrineCommand {
    return ($this->privates['doctrine.query_sql_command'] ?? $this->load('getDoctrine_QuerySqlCommandService.php'));
}, 'doctrine.schema_create_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand {
    return ($this->privates['doctrine.schema_create_command'] ?? $this->load('getDoctrine_SchemaCreateCommandService.php'));
}, 'doctrine.schema_drop_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\DropSchemaDoctrineCommand {
    return ($this->privates['doctrine.schema_drop_command'] ?? $this->load('getDoctrine_SchemaDropCommandService.php'));
}, 'doctrine.schema_update_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\UpdateSchemaDoctrineCommand {
    return ($this->privates['doctrine.schema_update_command'] ?? $this->load('getDoctrine_SchemaUpdateCommandService.php'));
}, 'doctrine.schema_validate_command' => function (): \Doctrine\Bundle\DoctrineBundle\Command\Proxy\ValidateSchemaCommand {
    return ($this->privates['doctrine.schema_validate_command'] ?? $this->load('getDoctrine_SchemaValidateCommandService.php'));
}, 'maker.auto_command.make_auth' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_auth'] ?? $this->load('getMaker_AutoCommand_MakeAuthService.php'));
}, 'maker.auto_command.make_command' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_command'] ?? $this->load('getMaker_AutoCommand_MakeCommandService.php'));
}, 'maker.auto_command.make_controller' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_controller'] ?? $this->load('getMaker_AutoCommand_MakeControllerService.php'));
}, 'maker.auto_command.make_crud' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_crud'] ?? $this->load('getMaker_AutoCommand_MakeCrudService.php'));
}, 'maker.auto_command.make_entity' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_entity'] ?? $this->load('getMaker_AutoCommand_MakeEntityService.php'));
}, 'maker.auto_command.make_fixtures' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_fixtures'] ?? $this->load('getMaker_AutoCommand_MakeFixturesService.php'));
}, 'maker.auto_command.make_form' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_form'] ?? $this->load('getMaker_AutoCommand_MakeFormService.php'));
}, 'maker.auto_command.make_functional_test' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_functional_test'] ?? $this->load('getMaker_AutoCommand_MakeFunctionalTestService.php'));
}, 'maker.auto_command.make_migration' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_migration'] ?? $this->load('getMaker_AutoCommand_MakeMigrationService.php'));
}, 'maker.auto_command.make_serializer_encoder' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_serializer_encoder'] ?? $this->load('getMaker_AutoCommand_MakeSerializerEncoderService.php'));
}, 'maker.auto_command.make_subscriber' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_subscriber'] ?? $this->load('getMaker_AutoCommand_MakeSubscriberService.php'));
}, 'maker.auto_command.make_twig_extension' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_twig_extension'] ?? $this->load('getMaker_AutoCommand_MakeTwigExtensionService.php'));
}, 'maker.auto_command.make_unit_test' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_unit_test'] ?? $this->load('getMaker_AutoCommand_MakeUnitTestService.php'));
}, 'maker.auto_command.make_validator' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_validator'] ?? $this->load('getMaker_AutoCommand_MakeValidatorService.php'));
}, 'maker.auto_command.make_voter' => function (): \Symfony\Bundle\MakerBundle\Command\MakerCommand {
    return ($this->privates['maker.auto_command.make_voter'] ?? $this->load('getMaker_AutoCommand_MakeVoterService.php'));
}, 'security.command.user_password_encoder' => function (): \Symfony\Bundle\SecurityBundle\Command\UserPasswordEncoderCommand {
    return ($this->privates['security.command.user_password_encoder'] ?? $this->load('getSecurity_Command_UserPasswordEncoderService.php'));
}, 'swiftmailer.command.debug' => function (): \Symfony\Bundle\SwiftmailerBundle\Command\DebugCommand {
    return ($this->privates['swiftmailer.command.debug'] ?? $this->load('getSwiftmailer_Command_DebugService.php'));
}, 'swiftmailer.command.new_email' => function (): \Symfony\Bundle\SwiftmailerBundle\Command\NewEmailCommand {
    return ($this->privates['swiftmailer.command.new_email'] ?? $this->load('getSwiftmailer_Command_NewEmailService.php'));
}, 'swiftmailer.command.send_email' => function (): \Symfony\Bundle\SwiftmailerBundle\Command\SendEmailCommand {
    return ($this->privates['swiftmailer.command.send_email'] ?? $this->load('getSwiftmailer_Command_SendEmailService.php'));
}, 'twig.command.debug' => function (): \Symfony\Bridge\Twig\Command\DebugCommand {
    return ($this->privates['twig.command.debug'] ?? $this->load('getTwig_Command_DebugService.php'));
}, 'twig.command.lint' => function (): \Symfony\Bundle\TwigBundle\Command\LintCommand {
    return ($this->privates['twig.command.lint'] ?? $this->load('getTwig_Command_LintService.php'));
}, 'var_dumper.command.server_dump' => function (): \Symfony\Component\VarDumper\Command\ServerDumpCommand {
    return ($this->privates['var_dumper.command.server_dump'] ?? $this->load('getVarDumper_Command_ServerDumpService.php'));
}, 'web_server.command.server_log' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerLogCommand {
    return ($this->privates['web_server.command.server_log'] ?? $this->load('getWebServer_Command_ServerLogService.php'));
}, 'web_server.command.server_run' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerRunCommand {
    return ($this->privates['web_server.command.server_run'] ?? $this->load('getWebServer_Command_ServerRunService.php'));
}, 'web_server.command.server_start' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStartCommand {
    return ($this->privates['web_server.command.server_start'] ?? $this->load('getWebServer_Command_ServerStartService.php'));
}, 'web_server.command.server_status' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStatusCommand {
    return ($this->privates['web_server.command.server_status'] ?? $this->load('getWebServer_Command_ServerStatusService.php'));
}, 'web_server.command.server_stop' => function (): \Symfony\Bundle\WebServerBundle\Command\ServerStopCommand {
    return ($this->privates['web_server.command.server_stop'] ?? $this->load('getWebServer_Command_ServerStopService.php'));
})), array('about' => 'console.command.about', 'assets:install' => 'console.command.assets_install', 'cache:clear' => 'console.command.cache_clear', 'cache:pool:clear' => 'console.command.cache_pool_clear', 'cache:pool:prune' => 'console.command.cache_pool_prune', 'cache:pool:delete' => 'console.command.cache_pool_delete', 'cache:warmup' => 'console.command.cache_warmup', 'debug:config' => 'console.command.config_debug', 'config:dump-reference' => 'console.command.config_dump_reference', 'debug:container' => 'console.command.container_debug', 'debug:autowiring' => 'console.command.debug_autowiring', 'debug:event-dispatcher' => 'console.command.event_dispatcher_debug', 'debug:router' => 'console.command.router_debug', 'router:match' => 'console.command.router_match', 'debug:translation' => 'console.command.translation_debug', 'translation:update' => 'console.command.translation_update', 'lint:xliff' => 'console.command.xliff_lint', 'lint:yaml' => 'console.command.yaml_lint', 'debug:form' => 'console.command.form_debug', 'debug:twig' => 'twig.command.debug', 'lint:twig' => 'twig.command.lint', 'debug:swiftmailer' => 'swiftmailer.command.debug', 'swiftmailer:email:send' => 'swiftmailer.command.new_email', 'swiftmailer:spool:send' => 'swiftmailer.command.send_email', 'security:encode-password' => 'security.command.user_password_encoder', 'doctrine:database:create' => 'doctrine.database_create_command', 'doctrine:database:drop' => 'doctrine.database_drop_command', 'doctrine:generate:entities' => 'doctrine.generate_entities_command', 'doctrine:mapping:import' => 'doctrine.mapping_import_command', 'doctrine:cache:clear-metadata' => 'doctrine.cache_clear_metadata_command', 'doctrine:cache:clear-query' => 'doctrine.cache_clear_query_cache_command', 'doctrine:cache:clear-result' => 'doctrine.cache_clear_result_command', 'doctrine:cache:clear-collection-region' => 'doctrine.cache_collection_region_command', 'doctrine:mapping:convert' => 'doctrine.mapping_convert_command', 'doctrine:schema:create' => 'doctrine.schema_create_command', 'doctrine:schema:drop' => 'doctrine.schema_drop_command', 'doctrine:ensure-production-settings' => 'doctrine.ensure_production_settings_command', 'doctrine:cache:clear-entity-region' => 'doctrine.clear_entity_region_command', 'doctrine:database:import' => 'doctrine.database_import_command', 'doctrine:mapping:info' => 'doctrine.mapping_info_command', 'doctrine:cache:clear-query-region' => 'doctrine.clear_query_region_command', 'doctrine:query:dql' => 'doctrine.query_dql_command', 'doctrine:query:sql' => 'doctrine.query_sql_command', 'doctrine:schema:update' => 'doctrine.schema_update_command', 'doctrine:schema:validate' => 'doctrine.schema_validate_command', 'server:dump' => 'var_dumper.command.server_dump', 'server:run' => 'web_server.command.server_run', 'server:start' => 'web_server.command.server_start', 'server:stop' => 'web_server.command.server_stop', 'server:status' => 'web_server.command.server_status', 'server:log' => 'web_server.command.server_log', 'make:auth' => 'maker.auto_command.make_auth', 'make:command' => 'maker.auto_command.make_command', 'make:controller' => 'maker.auto_command.make_controller', 'make:crud' => 'maker.auto_command.make_crud', 'make:entity' => 'maker.auto_command.make_entity', 'make:fixtures' => 'maker.auto_command.make_fixtures', 'make:form' => 'maker.auto_command.make_form', 'make:functional-test' => 'maker.auto_command.make_functional_test', 'make:serializer:encoder' => 'maker.auto_command.make_serializer_encoder', 'make:subscriber' => 'maker.auto_command.make_subscriber', 'make:twig-extension' => 'maker.auto_command.make_twig_extension', 'make:unit-test' => 'maker.auto_command.make_unit_test', 'make:validator' => 'maker.auto_command.make_validator', 'make:voter' => 'maker.auto_command.make_voter', 'make:migration' => 'maker.auto_command.make_migration'));
