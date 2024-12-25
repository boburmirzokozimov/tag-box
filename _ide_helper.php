<?php

declare(strict_types=1);

/* @noinspection ALL */
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 11.36.1.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades {use ;use Ably\AblyRest;use App\Containers\User\Models\User;use BackedEnum;use BadMethodCallException;use Carbon\CarbonInterval;use Carbon\Exceptions\InvalidFormatException;use Closure;use Countable;use DateInterval;use DateTimeInterface;use DateTimeZone;use ErrorException;use Exception;use Generator;use GuzzleHttp\Client;use GuzzleHttp\HandlerStack;use GuzzleHttp\Promise\PromiseInterface;use GuzzleHttp\Psr7\RequestInterface;use Illuminate\Auth\Access\AuthorizationException;use Illuminate\Auth\Access\iterable;use Illuminate\Auth\AuthenticationException;use Illuminate\Auth\AuthManager;use Illuminate\Auth\Passwords\PasswordBrokerManager;use Illuminate\Auth\Passwords\TokenRepositoryInterface;use Illuminate\Auth\SessionGuard;use Illuminate\Auth\TokenGuard;use Illuminate\Broadcasting\Broadcasters\Broadcaster;use Illuminate\Broadcasting\BroadcastManager;use Illuminate\Broadcasting\PendingBroadcast;use Illuminate\Bus\Batch;use Illuminate\Bus\PendingBatch;use Illuminate\Cache\array;use Illuminate\Cache\CacheManager;use Illuminate\Cache\DatabaseStore;use Illuminate\Cache\TaggedCache;use Illuminate\Cache\TCacheValue;use Illuminate\Concurrency\ConcurrencyManager;use Illuminate\Concurrency\ForkDriver;use Illuminate\Concurrency\ProcessDriver;use Illuminate\Concurrency\SyncDriver;use Illuminate\Console\Scheduling\CallbackEvent;use Illuminate\Console\Scheduling\PendingEventAttributes;use Illuminate\Contracts\Auth\Authenticatable;use Illuminate\Contracts\Auth\CanResetPassword;use Illuminate\Contracts\Auth\Guard;use Illuminate\Contracts\Auth\PasswordBroker;use Illuminate\Contracts\Auth\StatefulGuard;use Illuminate\Contracts\Auth\UserProvider;use Illuminate\Contracts\Broadcasting\HasBroadcastChannel;use Illuminate\Contracts\Cache\Lock;use Illuminate\Contracts\Container\BindingResolutionException;use Illuminate\Contracts\Container\CircularDependencyException;use Illuminate\Contracts\Container\Container;use Illuminate\Contracts\Container\ContextualBindingBuilder;use Illuminate\Contracts\Cookie\QueueingFactory;use Illuminate\Contracts\Database\ModelIdentifier;use Illuminate\Contracts\Database\Query\Expression;use Illuminate\Contracts\Encryption\DecryptException;use Illuminate\Contracts\Encryption\EncryptException;use Illuminate\Contracts\Events\Dispatcher;use Illuminate\Contracts\Filesystem\Cloud;use Illuminate\Contracts\Filesystem\FileNotFoundException;use Illuminate\Contracts\Foundation\Application;use Illuminate\Contracts\Foundation\MaintenanceMode;use Illuminate\Contracts\Mail\Mailable;use Illuminate\Contracts\Process\ProcessResult;use Illuminate\Contracts\Queue\Job;use Illuminate\Contracts\Support\Arrayable;use Illuminate\Contracts\Support\Htmlable;use Illuminate\Contracts\Support\Jsonable;use Illuminate\Contracts\Translation\Loader;use Illuminate\Contracts\Translation\Translator;use Illuminate\Contracts\View\Engine;use Illuminate\Cookie\CookieJar;use Illuminate\Database\Connection;use Illuminate\Database\ConnectionInterface;use Illuminate\Database\DatabaseManager;use Illuminate\Database\DatabaseTransactionsManager;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\ModelNotFoundException;use Illuminate\Database\Grammar;use Illuminate\Database\MultipleColumnsSelectedException;use Illuminate\Database\PostgresConnection;use Illuminate\Database\Query\Builder;use Illuminate\Database\Query\Processors\Processor;use Illuminate\Database\Schema\PostgresBuilder;use Illuminate\Database\Schema\PostgresSchemaState;use Illuminate\Database\TGrammar;use Illuminate\Encryption\Encrypter;use Illuminate\Events\classuse;use Illuminate\Filesystem\FilesystemManager;use Illuminate\Filesystem\LocalFilesystemAdapter;use Illuminate\Filesystem\TUnlessParameter;use Illuminate\Filesystem\TUnlessReturnType;use Illuminate\Filesystem\TWhenParameter;use Illuminate\Filesystem\TWhenReturnType;use Illuminate\Foundation\Bus\PendingChain;use Illuminate\Foundation\Bus\PendingDispatch;use Illuminate\Foundation\Configuration\ApplicationBuilder;use Illuminate\Foundation\Console\ClosureCommand;use Illuminate\Foundation\Console\Kernel;use Illuminate\Foundation\ViteException;use Illuminate\Hashing\Argon2IdHasher;use Illuminate\Hashing\ArgonHasher;use Illuminate\Hashing\BcryptHasher;use Illuminate\Hashing\HashManager;use Illuminate\Http\classuse;use Illuminate\Http\Client\ResponseSequence;use Illuminate\Http\JsonResponse;use Illuminate\Http\never;use Illuminate\Http\RedirectResponse;use Illuminate\Http\TEnum;use Illuminate\Http\UploadedFile;use Illuminate\Log\Context\Repository;use Illuminate\Log\Logger;use Illuminate\Log\LogManager;use Illuminate\Mail\Mailer;use Illuminate\Mail\MailManager;use Illuminate\Mail\PendingMail;use Illuminate\Mail\SentMessage;use Illuminate\Notifications\ChannelManager;use Illuminate\Process\FakeProcessDescription;use Illuminate\Process\FakeProcessResult;use Illuminate\Process\FakeProcessSequence;use Illuminate\Process\InvokedProcess;use Illuminate\Process\PendingProcess;use Illuminate\Process\Pool;use Illuminate\Process\ProcessPoolResults;use Illuminate\Queue\DatabaseQueue;use Illuminate\Queue\Jobs\DatabaseJob;use Illuminate\Queue\Jobs\DatabaseJobRecord;use Illuminate\Queue\QueueManager;use Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException;use Illuminate\Routing\Exceptions\StreamedResponseException;use Illuminate\Routing\Exceptions\UrlGenerationException;use Illuminate\Routing\PendingResourceRegistration;use Illuminate\Routing\PendingSingletonResourceRegistration;use Illuminate\Routing\Redirector;use Illuminate\Routing\ResponseFactory;use Illuminate\Routing\RouteCollection;use Illuminate\Routing\RouteCollectionInterface;use Illuminate\Routing\Router;use Illuminate\Routing\RouteRegistrar;use Illuminate\Routing\UrlGenerator;use Illuminate\Session\SessionManager;use Illuminate\Session\Store;use Illuminate\Support\Carbon;use Illuminate\Support\Collection;use Illuminate\Support\DateFactory;use Illuminate\Support\Defer\DeferredCallback;use Illuminate\Support\Fluent;use Illuminate\Support\HigherOrderTapProxy;use Illuminate\Support\HtmlString;use Illuminate\Support\LazyCollection;use Illuminate\Support\ServiceProvider;use Illuminate\Support\Stringable;use Illuminate\Support\Testing\Fakes\BusFake;use Illuminate\Support\Testing\Fakes\ChainedBatchTruthTest;use Illuminate\Support\Testing\Fakes\EventFake;use Illuminate\Support\Testing\Fakes\MailFake;use Illuminate\Support\Testing\Fakes\NotificationFake;use Illuminate\Support\Testing\Fakes\QueueFake;use Illuminate\Support\Timebox;use Illuminate\Support\Uri;use Illuminate\Translation\MessageSelector;use Illuminate\Validation\PresenceVerifierInterface;use Illuminate\Validation\ValidationException;use Illuminate\View\Compilers\BladeCompiler;use Illuminate\View\Component;use Illuminate\View\Engines\EngineResolver;use Illuminate\View\Factory;use Illuminate\View\ViewFinderInterface;use InvalidArgumentException;use League\Flysystem\DirectoryListing;use League\Flysystem\FilesystemAdapter;use League\Flysystem\FilesystemOperator;use LogicException;use PDO;use PDOStatement;use Psr\Http\Message\StreamInterface;use Psr\Log\LoggerInterface;use Pusher\Pusher;use ReflectionAttribute;use ReflectionException;use RuntimeException;use SessionHandlerInterface;use SplFileInfo;use stdClass;use Symfony\Component\Console\Command\Command;use Symfony\Component\Console\Exception\CommandNotFoundException;use Symfony\Component\Console\Input\InputInterface;use Symfony\Component\Console\Output\OutputInterface;use Symfony\Component\HttpFoundation\BinaryFileResponse;use Symfony\Component\HttpFoundation\callable;use Symfony\Component\HttpFoundation\InputBag;use Symfony\Component\HttpFoundation\intuse;use Symfony\Component\HttpFoundation\StreamedResponse;use Symfony\Component\HttpKernel\Exception\HttpException;use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;use Symfony\Component\Mailer\Transport\TransportInterface;use Symfony\Component\Routing\Exception\RouteNotFoundException;use Symfony\Component\Translation\TranslatorInterface;use Throwable;use Traversable;use TypeError;use UnitEnum; Illuminate\Filesystem\Filesystem; Illuminate\Http\Client\PendingRequest; Symfony\Component\HttpFoundation\StreamedJsonResponse;
    /**
     * @see \Illuminate\Foundation\Application
     */ final class App
    {
        /**
         * Begin configuring a new Laravel application instance.
         *
         * @param  string|null                                             $basePath
         * @return ApplicationBuilder
         * @static
         */ public static function configure($basePath = null)
        {
            return \Illuminate\Foundation\Application::configure($basePath);
        }
        /**
         * Infer the application's base directory from the environment.
         *
         * @return string
         * @static
         */ public static function inferBasePath()
        {
            return \Illuminate\Foundation\Application::inferBasePath();
        }
        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */ public static function version()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->version();
        }
        /**
         * Run the given array of bootstrap classes.
         *
         * @param string[] $bootstrappers
         * @static
         */ public static function bootstrapWith($bootstrappers): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bootstrapWith($bootstrappers);
        }
        /**
         * Register a callback to run after loading the environment.
         *
         * @param Closure $callback
         * @static
         */ public static function afterLoadingEnvironment($callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterLoadingEnvironment($callback);
        }
        /**
         * Register a callback to run before a bootstrapper.
         *
         * @param string   $bootstrapper
         * @param Closure $callback
         * @static
         */ public static function beforeBootstrapping($bootstrapper, $callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeBootstrapping($bootstrapper, $callback);
        }
        /**
         * Register a callback to run after a bootstrapper.
         *
         * @param string   $bootstrapper
         * @param Closure $callback
         * @static
         */ public static function afterBootstrapping($bootstrapper, $callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterBootstrapping($bootstrapper, $callback);
        }
        /**
         * Determine if the application has been bootstrapped before.
         *
         * @return bool
         * @static
         */ public static function hasBeenBootstrapped()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasBeenBootstrapped();
        }
        /**
         * Set the base path for the application.
         *
         * @param  string                             $basePath
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function setBasePath($basePath)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->setBasePath($basePath);
        }
        /**
         * Get the path to the application "app" directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function path($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->path($path);
        }
        /**
         * Set the application directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useAppPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useAppPath($path);
        }
        /**
         * Get the base path of the Laravel installation.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function basePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->basePath($path);
        }
        /**
         * Get the path to the bootstrap directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function bootstrapPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bootstrapPath($path);
        }
        /**
         * Get the path to the service provider list in the bootstrap directory.
         *
         * @return string
         * @static
         */ public static function getBootstrapProvidersPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBootstrapProvidersPath();
        }
        /**
         * Set the bootstrap file directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useBootstrapPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useBootstrapPath($path);
        }
        /**
         * Get the path to the application configuration files.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function configPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configPath($path);
        }
        /**
         * Set the configuration directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useConfigPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useConfigPath($path);
        }
        /**
         * Get the path to the database directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function databasePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->databasePath($path);
        }
        /**
         * Set the database directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useDatabasePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useDatabasePath($path);
        }
        /**
         * Get the path to the language files.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function langPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->langPath($path);
        }
        /**
         * Set the language file directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useLangPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useLangPath($path);
        }
        /**
         * Get the path to the public / web directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function publicPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->publicPath($path);
        }
        /**
         * Set the public / web directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function usePublicPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->usePublicPath($path);
        }
        /**
         * Get the path to the storage directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function storagePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->storagePath($path);
        }
        /**
         * Set the storage directory.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useStoragePath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useStoragePath($path);
        }
        /**
         * Get the path to the resources directory.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function resourcePath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resourcePath($path);
        }
        /**
         * Get the path to the views directory.
         *
         * This method returns the first configured path in the array of view paths.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function viewPath($path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->viewPath($path);
        }
        /**
         * Join the given paths together.
         *
         * @param  string $basePath
         * @param  string $path
         * @return string
         * @static
         */ public static function joinPaths($basePath, $path = '')
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->joinPaths($basePath, $path);
        }
        /**
         * Get the path to the environment file directory.
         *
         * @return string
         * @static
         */ public static function environmentPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentPath();
        }
        /**
         * Set the directory for the environment file.
         *
         * @param  string                             $path
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function useEnvironmentPath($path)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->useEnvironmentPath($path);
        }
        /**
         * Set the environment file to be loaded during bootstrapping.
         *
         * @param  string                             $file
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function loadEnvironmentFrom($file)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->loadEnvironmentFrom($file);
        }
        /**
         * Get the environment file the application is using.
         *
         * @return string
         * @static
         */ public static function environmentFile()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFile();
        }
        /**
         * Get the fully qualified path to the environment file.
         *
         * @return string
         * @static
         */ public static function environmentFilePath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environmentFilePath();
        }
        /**
         * Get or check the current application environment.
         *
         * @param  array|string $environments
         * @return bool|string
         * @static
         */ public static function environment(...$environments)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->environment(...$environments);
        }
        /**
         * Determine if the application is in the local environment.
         *
         * @return bool
         * @static
         */ public static function isLocal()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocal();
        }
        /**
         * Determine if the application is in the production environment.
         *
         * @return bool
         * @static
         */ public static function isProduction()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isProduction();
        }
        /**
         * Detect the application's current environment.
         *
         * @param  Closure $callback
         * @return string
         * @static
         */ public static function detectEnvironment($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->detectEnvironment($callback);
        }
        /**
         * Determine if the application is running in the console.
         *
         * @return bool
         * @static
         */ public static function runningInConsole()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningInConsole();
        }
        /**
         * Determine if the application is running any of the given console commands.
         *
         * @param  array|string $commands
         * @return bool
         * @static
         */ public static function runningConsoleCommand(...$commands)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningConsoleCommand(...$commands);
        }
        /**
         * Determine if the application is running unit tests.
         *
         * @return bool
         * @static
         */ public static function runningUnitTests()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->runningUnitTests();
        }
        /**
         * Determine if the application is running with debug mode enabled.
         *
         * @return bool
         * @static
         */ public static function hasDebugModeEnabled()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasDebugModeEnabled();
        }
        /**
         * Register a new registered listener.
         *
         * @param callable $callback
         * @static
         */ public static function registered($callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registered($callback);
        }
        /**
         * Register all of the configured providers.
         *
         * @static
         */ public static function registerConfiguredProviders(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerConfiguredProviders();
        }
        /**
         * Register a service provider with the application.
         *
         * @param  ServiceProvider|string $provider
         * @param  bool                                       $force
         * @return ServiceProvider
         * @static
         */ public static function register($provider, $force = false)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->register($provider, $force);
        }
        /**
         * Get the registered service provider instance if it exists.
         *
         * @param  ServiceProvider|string $provider
         * @return ServiceProvider|null
         * @static
         */ public static function getProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProvider($provider);
        }
        /**
         * Get the registered service provider instances if any exist.
         *
         * @param  ServiceProvider|string $provider
         * @return array
         * @static
         */ public static function getProviders($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getProviders($provider);
        }
        /**
         * Resolve a service provider instance from the class name.
         *
         * @param  string                              $provider
         * @return ServiceProvider
         * @static
         */ public static function resolveProvider($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveProvider($provider);
        }
        /**
         * Load and boot all of the remaining deferred providers.
         *
         * @static
         */ public static function loadDeferredProviders(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProviders();
        }
        /**
         * Load the provider for a deferred service.
         *
         * @param string $service
         * @static
         */ public static function loadDeferredProvider($service): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->loadDeferredProvider($service);
        }
        /**
         * Register a deferred provider and service.
         *
         * @param string      $provider
         * @param string|null $service
         * @static
         */ public static function registerDeferredProvider($provider, $service = null): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerDeferredProvider($provider, $service);
        }
        /**
         * Resolve the given type from the container.
         *
         * @param  string                                                     $abstract
         * @param  array                                                      $parameters
         * @throws BindingResolutionException
         * @static
         */ public static function make($abstract, $parameters = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->make($abstract, $parameters);
        }
        /**
         * Determine if the given abstract type has been bound.
         *
         * @param  string $abstract
         * @return bool
         * @static
         */ public static function bound($abstract)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->bound($abstract);
        }
        /**
         * Determine if the application has booted.
         *
         * @return bool
         * @static
         */ public static function isBooted()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isBooted();
        }
        /**
         * Boot the application's service providers.
         *
         * @static
         */ public static function boot(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->boot();
        }
        /**
         * Register a new boot listener.
         *
         * @param callable $callback
         * @static
         */ public static function booting($callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booting($callback);
        }
        /**
         * Register a new "booted" listener.
         *
         * @param callable $callback
         * @static
         */ public static function booted($callback): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->booted($callback);
        }
        /**
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function handle($request, $type = 1, $catch = true)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handle($request, $type, $catch);
        }
        /**
         * Handle the incoming HTTP request and send the response to the browser.
         *
         * @param \Illuminate\Http\Request $request
         * @static
         */ public static function handleRequest($request): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->handleRequest($request);
        }
        /**
         * Handle the incoming Artisan command.
         *
         * @param  InputInterface $input
         * @return int
         * @static
         */ public static function handleCommand($input)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->handleCommand($input);
        }
        /**
         * Determine if the framework's base configuration should be merged.
         *
         * @return bool
         * @static
         */ public static function shouldMergeFrameworkConfiguration()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldMergeFrameworkConfiguration();
        }
        /**
         * Indicate that the framework's base configuration should not be merged.
         *
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function dontMergeFrameworkConfiguration()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->dontMergeFrameworkConfiguration();
        }
        /**
         * Determine if middleware has been disabled for the application.
         *
         * @return bool
         * @static
         */ public static function shouldSkipMiddleware()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->shouldSkipMiddleware();
        }
        /**
         * Get the path to the cached services.php file.
         *
         * @return string
         * @static
         */ public static function getCachedServicesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedServicesPath();
        }
        /**
         * Get the path to the cached packages.php file.
         *
         * @return string
         * @static
         */ public static function getCachedPackagesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedPackagesPath();
        }
        /**
         * Determine if the application configuration is cached.
         *
         * @return bool
         * @static
         */ public static function configurationIsCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->configurationIsCached();
        }
        /**
         * Get the path to the configuration cache file.
         *
         * @return string
         * @static
         */ public static function getCachedConfigPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedConfigPath();
        }
        /**
         * Determine if the application routes are cached.
         *
         * @return bool
         * @static
         */ public static function routesAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->routesAreCached();
        }
        /**
         * Get the path to the routes cache file.
         *
         * @return string
         * @static
         */ public static function getCachedRoutesPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedRoutesPath();
        }
        /**
         * Determine if the application events are cached.
         *
         * @return bool
         * @static
         */ public static function eventsAreCached()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->eventsAreCached();
        }
        /**
         * Get the path to the events cache file.
         *
         * @return string
         * @static
         */ public static function getCachedEventsPath()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getCachedEventsPath();
        }
        /**
         * Add new prefix to list of absolute path prefixes.
         *
         * @param  string                             $prefix
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function addAbsoluteCachePathPrefix($prefix)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->addAbsoluteCachePathPrefix($prefix);
        }
        /**
         * Get an instance of the maintenance mode manager implementation.
         *
         * @return MaintenanceMode
         * @static
         */ public static function maintenanceMode()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->maintenanceMode();
        }
        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */ public static function isDownForMaintenance()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDownForMaintenance();
        }
        /**
         * Throw an HttpException with the given data.
         *
         * @param  int                                                           $code
         * @param  string                                                        $message
         * @param  array                                                         $headers
         * @throws HttpException
         * @throws NotFoundHttpException
         * @return \Illuminate\Foundation\never
         * @static
         */ public static function abort($code, $message = '', $headers = [])
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->abort($code, $message, $headers);
        }
        /**
         * Register a terminating callback with the application.
         *
         * @param  callable|string                    $callback
         * @return \Illuminate\Foundation\Application
         * @static
         */ public static function terminating($callback)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->terminating($callback);
        }
        /**
         * Terminate the application.
         *
         * @static
         */ public static function terminate(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->terminate();
        }
        /**
         * Get the service providers that have been loaded.
         *
         * @return array<string, bool>
         * @static
         */ public static function getLoadedProviders()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLoadedProviders();
        }
        /**
         * Determine if the given service provider is loaded.
         *
         * @param  string $provider
         * @return bool
         * @static
         */ public static function providerIsLoaded($provider)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->providerIsLoaded($provider);
        }
        /**
         * Get the application's deferred services.
         *
         * @return array
         * @static
         */ public static function getDeferredServices()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getDeferredServices();
        }
        /**
         * Set the application's deferred services.
         *
         * @param array $services
         * @static
         */ public static function setDeferredServices($services): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setDeferredServices($services);
        }
        /**
         * Determine if the given service is a deferred service.
         *
         * @param  string $service
         * @return bool
         * @static
         */ public static function isDeferredService($service)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isDeferredService($service);
        }
        /**
         * Add an array of services to the application's deferred services.
         *
         * @param array $services
         * @static
         */ public static function addDeferredServices($services): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addDeferredServices($services);
        }
        /**
         * Remove an array of services from the application's deferred services.
         *
         * @param array $services
         * @static
         */ public static function removeDeferredServices($services): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->removeDeferredServices($services);
        }
        /**
         * Configure the real-time facade namespace.
         *
         * @param string $namespace
         * @static
         */ public static function provideFacades($namespace): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->provideFacades($namespace);
        }
        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */ public static function getLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getLocale();
        }
        /**
         * Get the current application locale.
         *
         * @return string
         * @static
         */ public static function currentLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->currentLocale();
        }
        /**
         * Get the current application fallback locale.
         *
         * @return string
         * @static
         */ public static function getFallbackLocale()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getFallbackLocale();
        }
        /**
         * Set the current application locale.
         *
         * @param string $locale
         * @static
         */ public static function setLocale($locale): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setLocale($locale);
        }
        /**
         * Set the current application fallback locale.
         *
         * @param string $fallbackLocale
         * @static
         */ public static function setFallbackLocale($fallbackLocale): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->setFallbackLocale($fallbackLocale);
        }
        /**
         * Determine if the application locale is the given locale.
         *
         * @param  string $locale
         * @return bool
         * @static
         */ public static function isLocale($locale)
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isLocale($locale);
        }
        /**
         * Register the core class aliases in the container.
         *
         * @static
         */ public static function registerCoreContainerAliases(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->registerCoreContainerAliases();
        }
        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @static
         */ public static function flush(): void
        {
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->flush();
        }
        /**
         * Get the application namespace.
         *
         * @throws RuntimeException
         * @return string
         * @static
         */ public static function getNamespace()
        {
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getNamespace();
        }
        /**
         * Define a contextual binding.
         *
         * @param  array|string                                             $concrete
         * @return ContextualBindingBuilder
         * @static
         */ public static function when($concrete)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->when($concrete);
        }
        /**
         * Define a contextual binding based on an attribute.
         *
         * @param string   $attribute
         * @param Closure $handler
         * @static
         */ public static function whenHasAttribute($attribute, $handler): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->whenHasAttribute($attribute, $handler);
        }
        /**
         * Returns true if the container can return an entry for the given identifier.
         *
         * Returns false otherwise.
         *
         * `has($id)` returning true does not mean that `get($id)` will not throw an exception.
         * It does however mean that `get($id)` will not throw a `NotFoundExceptionInterface`.
         *
         * @param  string $id Identifier of the entry to look for.
         * @return bool
         * @return bool
         * @static
         */ public static function has($id)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->has($id);
        }
        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param  string $abstract
         * @return bool
         * @static
         */ public static function resolved($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolved($abstract);
        }
        /**
         * Determine if a given type is shared.
         *
         * @param  string $abstract
         * @return bool
         * @static
         */ public static function isShared($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isShared($abstract);
        }
        /**
         * Determine if a given string is an alias.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function isAlias($name)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->isAlias($name);
        }
        /**
         * Register a binding with the container.
         *
         * @param  string               $abstract
         * @param  Closure|string|null $concrete
         * @param  bool                 $shared
         * @throws TypeError
         * @static
         */ public static function bind($abstract, $concrete = null, $shared = false): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bind($abstract, $concrete, $shared);
        }
        /**
         * Determine if the container has a method binding.
         *
         * @param  string $method
         * @return bool
         * @static
         */ public static function hasMethodBinding($method)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->hasMethodBinding($method);
        }
        /**
         * Bind a callback to resolve with Container::call.
         *
         * @param array|string $method
         * @param Closure     $callback
         * @static
         */ public static function bindMethod($method, $callback): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindMethod($method, $callback);
        }
        /**
         * Get the method binding for the given method.
         *
         * @param string $method
         * @static
         */ public static function callMethodBinding($method, $instance)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->callMethodBinding($method, $instance);
        }
        /**
         * Add a contextual binding to the container.
         *
         * @param string          $concrete
         * @param string          $abstract
         * @param Closure|string $implementation
         * @static
         */ public static function addContextualBinding($concrete, $abstract, $implementation): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->addContextualBinding($concrete, $abstract, $implementation);
        }
        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string               $abstract
         * @param Closure|string|null $concrete
         * @param bool                 $shared
         * @static
         */ public static function bindIf($abstract, $concrete = null, $shared = false): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->bindIf($abstract, $concrete, $shared);
        }
        /**
         * Register a shared binding in the container.
         *
         * @param string               $abstract
         * @param Closure|string|null $concrete
         * @static
         */ public static function singleton($abstract, $concrete = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singleton($abstract, $concrete);
        }
        /**
         * Register a shared binding if it hasn't already been registered.
         *
         * @param string               $abstract
         * @param Closure|string|null $concrete
         * @static
         */ public static function singletonIf($abstract, $concrete = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->singletonIf($abstract, $concrete);
        }
        /**
         * Register a scoped binding in the container.
         *
         * @param string               $abstract
         * @param Closure|string|null $concrete
         * @static
         */ public static function scoped($abstract, $concrete = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scoped($abstract, $concrete);
        }
        /**
         * Register a scoped binding if it hasn't already been registered.
         *
         * @param string               $abstract
         * @param Closure|string|null $concrete
         * @static
         */ public static function scopedIf($abstract, $concrete = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->scopedIf($abstract, $concrete);
        }
        /**
         * "Extend" an abstract type in the container.
         *
         * @param  string                    $abstract
         * @param  Closure                  $closure
         * @throws InvalidArgumentException
         * @static
         */ public static function extend($abstract, $closure): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->extend($abstract, $closure);
        }
        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @static
         */ public static function instance($abstract, $instance)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->instance($abstract, $instance);
        }
        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed  $tags
         * @static
         */ public static function tag($abstracts, $tags): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->tag($abstracts, $tags);
        }
        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param  string                         $tag
         * @return \Illuminate\Container\iterable
         * @static
         */ public static function tagged($tag)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->tagged($tag);
        }
        /**
         * Alias a type to a different name.
         *
         * @param  string          $abstract
         * @param  string          $alias
         * @throws LogicException
         * @static
         */ public static function alias($abstract, $alias): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->alias($abstract, $alias);
        }
        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string   $abstract
         * @param Closure $callback
         * @static
         */ public static function rebinding($abstract, $callback)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->rebinding($abstract, $callback);
        }
        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param string $method
         * @static
         */ public static function refresh($abstract, $target, $method)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->refresh($abstract, $target, $method);
        }
        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param  Closure $callback
         * @param  array    $parameters
         * @return Closure
         * @static
         */ public static function wrap($callback, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->wrap($callback, $parameters);
        }
        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param  callable|string           $callback
         * @param  array<string, mixed>      $parameters
         * @param  string|null               $defaultMethod
         * @throws InvalidArgumentException
         * @static
         */ public static function call($callback, $parameters = [], $defaultMethod = null)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->call($callback, $parameters, $defaultMethod);
        }
        /**
         * Get a closure to resolve the given type from the container.
         *
         * @param  string   $abstract
         * @return Closure
         * @static
         */ public static function factory($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->factory($abstract);
        }
        /**
         * An alias function name for make().
         *
         * @param  callable|string                                            $abstract
         * @param  array                                                      $parameters
         * @throws BindingResolutionException
         * @static
         */ public static function makeWith($abstract, $parameters = [])
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->makeWith($abstract, $parameters);
        }
        /**
         * Finds an entry of the container by its identifier and returns it.
         *
         * @param  string                      $id Identifier of the entry to look for.
         * @throws NotFoundExceptionInterface  No entry was found for **this** identifier.
         * @throws ContainerExceptionInterface Error while retrieving the entry.
         * @return mixed                       Entry.
         * @static
         */ public static function get($id)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->get($id);
        }
        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param  Closure|string                                             $concrete
         * @throws BindingResolutionException
         * @throws CircularDependencyException
         * @static
         */ public static function build($concrete)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->build($concrete);
        }
        /**
         * Resolve a dependency based on an attribute.
         *
         * @param ReflectionAttribute $attribute
         * @static
         */ public static function resolveFromAttribute($attribute)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->resolveFromAttribute($attribute);
        }
        /**
         * Register a new before resolving callback for all types.
         *
         * @param Closure|string $abstract
         * @param Closure|null   $callback
         * @static
         */ public static function beforeResolving($abstract, $callback = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->beforeResolving($abstract, $callback);
        }
        /**
         * Register a new resolving callback.
         *
         * @param Closure|string $abstract
         * @param Closure|null   $callback
         * @static
         */ public static function resolving($abstract, $callback = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->resolving($abstract, $callback);
        }
        /**
         * Register a new after resolving callback for all types.
         *
         * @param Closure|string $abstract
         * @param Closure|null   $callback
         * @static
         */ public static function afterResolving($abstract, $callback = null): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolving($abstract, $callback);
        }
        /**
         * Register a new after resolving attribute callback for all types.
         *
         * @param string   $attribute
         * @param Closure $callback
         * @static
         */ public static function afterResolvingAttribute($attribute, $callback): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->afterResolvingAttribute($attribute, $callback);
        }
        /**
         * Fire all of the after resolving attribute callbacks.
         *
         * @param ReflectionAttribute[] $attributes
         * @static
         */ public static function fireAfterResolvingAttributeCallbacks($attributes, $object): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->fireAfterResolvingAttributeCallbacks($attributes, $object);
        }
        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */ public static function getBindings()
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getBindings();
        }
        /**
         * Get the alias for an abstract if available.
         *
         * @param  string $abstract
         * @return string
         * @static
         */ public static function getAlias($abstract)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->getAlias($abstract);
        }
        /**
         * Remove all of the extender callbacks for a given type.
         *
         * @param string $abstract
         * @static
         */ public static function forgetExtenders($abstract): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetExtenders($abstract);
        }
        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @static
         */ public static function forgetInstance($abstract): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstance($abstract);
        }
        /**
         * Clear all of the instances from the container.
         *
         * @static
         */ public static function forgetInstances(): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetInstances();
        }
        /**
         * Clear all of the scoped instances from the container.
         *
         * @static
         */ public static function forgetScopedInstances(): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->forgetScopedInstances();
        }
        /**
         * Get the globally available instance of the container.
         *
         * @return static
         * @static
         */ public static function getInstance()
        {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::getInstance();
        }
        /**
         * Set the shared instance of the container.
         *
         * @param  Container|null   $container
         * @return Container|static
         * @static
         */ public static function setInstance($container = null)
        {            //Method inherited from \Illuminate\Container\Container
            return \Illuminate\Foundation\Application::setInstance($container);
        }
        /**
         * Determine if a given offset exists.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function offsetExists($key)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetExists($key);
        }
        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @static
         */ public static function offsetGet($key)
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            return $instance->offsetGet($key);
        }
        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @static
         */ public static function offsetSet($key, $value): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetSet($key, $value);
        }
        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @static
         */ public static function offsetUnset($key): void
        {            //Method inherited from \Illuminate\Container\Container
            /** @var \Illuminate\Foundation\Application $instance */
            $instance->offsetUnset($key);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Foundation\Application::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Foundation\Application::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Foundation\Application::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Foundation\Application::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Foundation\Console\Kernel
     */ final class Artisan
    {
        /**
         * Re-route the Symfony command events to their Laravel counterparts.
         *
         * @internal
         * @return Kernel
         * @static
         */ public static function rerouteSymfonyCommandEvents()
        {
            /** @var Kernel $instance */
            return $instance->rerouteSymfonyCommandEvents();
        }
        /**
         * Run the console application.
         *
         * @param  InputInterface        $input
         * @param  OutputInterface|null $output
         * @return int
         * @static
         */ public static function handle($input, $output = null)
        {
            /** @var Kernel $instance */
            return $instance->handle($input, $output);
        }
        /**
         * Terminate the application.
         *
         * @param InputInterface $input
         * @param int                                             $status
         * @static
         */ public static function terminate($input, $status): void
        {
            /** @var Kernel $instance */
            $instance->terminate($input, $status);
        }
        /**
         * Register a callback to be invoked when the command lifecycle duration exceeds a given amount of time.
         *
         * @param CarbonInterval|DateTimeInterface|float|int $threshold
         * @param callable                                            $handler
         * @static
         */ public static function whenCommandLifecycleIsLongerThan($threshold, $handler): void
        {
            /** @var Kernel $instance */
            $instance->whenCommandLifecycleIsLongerThan($threshold, $handler);
        }
        /**
         * When the command being handled started.
         *
         * @return Carbon|null
         * @static
         */ public static function commandStartedAt()
        {
            /** @var Kernel $instance */
            return $instance->commandStartedAt();
        }
        /**
         * Resolve a console schedule instance.
         *
         * @return \Illuminate\Console\Scheduling\Schedule
         * @static
         */ public static function resolveConsoleSchedule()
        {
            /** @var Kernel $instance */
            return $instance->resolveConsoleSchedule();
        }
        /**
         * Register a Closure based command with the application.
         *
         * @param  string                                        $signature
         * @param  Closure                                      $callback
         * @return ClosureCommand
         * @static
         */ public static function command($signature, $callback)
        {
            /** @var Kernel $instance */
            return $instance->command($signature, $callback);
        }
        /**
         * Register the given command with the console application.
         *
         * @param Command $command
         * @static
         */ public static function registerCommand($command): void
        {
            /** @var Kernel $instance */
            $instance->registerCommand($command);
        }
        /**
         * Run an Artisan console command by name.
         *
         * @param  string                                                        $command
         * @param  array                                                         $parameters
         * @param  OutputInterface|null        $outputBuffer
         * @throws CommandNotFoundException
         * @return int
         * @static
         */ public static function call($command, $parameters = [], $outputBuffer = null)
        {
            /** @var Kernel $instance */
            return $instance->call($command, $parameters, $outputBuffer);
        }
        /**
         * Queue the given console command.
         *
         * @param  string                                     $command
         * @param  array                                      $parameters
         * @return PendingDispatch
         * @static
         */ public static function queue($command, $parameters = [])
        {
            /** @var Kernel $instance */
            return $instance->queue($command, $parameters);
        }
        /**
         * Get all of the commands registered with the console.
         *
         * @return array
         * @static
         */ public static function all()
        {
            /** @var Kernel $instance */
            return $instance->all();
        }
        /**
         * Get the output for the last run command.
         *
         * @return string
         * @static
         */ public static function output()
        {
            /** @var Kernel $instance */
            return $instance->output();
        }
        /**
         * Bootstrap the application for artisan commands.
         *
         * @static
         */ public static function bootstrap(): void
        {
            /** @var Kernel $instance */
            $instance->bootstrap();
        }
        /**
         * Bootstrap the application without booting service providers.
         *
         * @static
         */ public static function bootstrapWithoutBootingProviders(): void
        {
            /** @var Kernel $instance */
            $instance->bootstrapWithoutBootingProviders();
        }
        /**
         * Set the Artisan application instance.
         *
         * @param \Illuminate\Console\Application|null $artisan
         * @static
         */ public static function setArtisan($artisan): void
        {
            /** @var Kernel $instance */
            $instance->setArtisan($artisan);
        }
        /**
         * Set the Artisan commands provided by the application.
         *
         * @param  array                                 $commands
         * @return Kernel
         * @static
         */ public static function addCommands($commands)
        {
            /** @var Kernel $instance */
            return $instance->addCommands($commands);
        }
        /**
         * Set the paths that should have their Artisan commands automatically discovered.
         *
         * @param  array                                 $paths
         * @return Kernel
         * @static
         */ public static function addCommandPaths($paths)
        {
            /** @var Kernel $instance */
            return $instance->addCommandPaths($paths);
        }
        /**
         * Set the paths that should have their Artisan "routes" automatically discovered.
         *
         * @param  array                                 $paths
         * @return Kernel
         * @static
         */ public static function addCommandRoutePaths($paths)
        {
            /** @var Kernel $instance */
            return $instance->addCommandRoutePaths($paths);
        }
    }
    /**
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Auth\SessionGuard
     */ final class Auth
    {
        /**
         * Attempt to get the guard from the local cache.
         *
         * @param  string|null                                                               $name
         * @return Guard|StatefulGuard
         * @static
         */ public static function guard($name = null)
        {
            /** @var AuthManager $instance */
            return $instance->guard($name);
        }
        /**
         * Create a session based authentication guard.
         *
         * @param  string                        $name
         * @param  array                         $config
         * @return SessionGuard
         * @static
         */ public static function createSessionDriver($name, $config)
        {
            /** @var AuthManager $instance */
            return $instance->createSessionDriver($name, $config);
        }
        /**
         * Create a token based authentication guard.
         *
         * @param  string                      $name
         * @param  array                       $config
         * @return TokenGuard
         * @static
         */ public static function createTokenDriver($name, $config)
        {
            /** @var AuthManager $instance */
            return $instance->createTokenDriver($name, $config);
        }
        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var AuthManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @static
         */ public static function shouldUse($name): void
        {
            /** @var AuthManager $instance */
            $instance->shouldUse($name);
        }
        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var AuthManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Register a new callback based request guard.
         *
         * @param  string                       $driver
         * @param  callable                     $callback
         * @return AuthManager
         * @static
         */ public static function viaRequest($driver, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->viaRequest($driver, $callback);
        }
        /**
         * Get the user resolver callback.
         *
         * @return Closure
         * @static
         */ public static function userResolver()
        {
            /** @var AuthManager $instance */
            return $instance->userResolver();
        }
        /**
         * Set the callback to be used to resolve users.
         *
         * @param  Closure                     $userResolver
         * @return AuthManager
         * @static
         */ public static function resolveUsersUsing($userResolver)
        {
            /** @var AuthManager $instance */
            return $instance->resolveUsersUsing($userResolver);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                       $driver
         * @param  Closure                     $callback
         * @return AuthManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Register a custom provider creator Closure.
         *
         * @param  string                       $name
         * @param  Closure                     $callback
         * @return AuthManager
         * @static
         */ public static function provider($name, $callback)
        {
            /** @var AuthManager $instance */
            return $instance->provider($name, $callback);
        }
        /**
         * Determines if any guards have already been resolved.
         *
         * @return bool
         * @static
         */ public static function hasResolvedGuards()
        {
            /** @var AuthManager $instance */
            return $instance->hasResolvedGuards();
        }
        /**
         * Forget all of the resolved guard instances.
         *
         * @return AuthManager
         * @static
         */ public static function forgetGuards()
        {
            /** @var AuthManager $instance */
            return $instance->forgetGuards();
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return AuthManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var AuthManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Create the user provider implementation for the driver.
         *
         * @param  string|null                                  $provider
         * @throws InvalidArgumentException
         * @return UserProvider|null
         * @static
         */ public static function createUserProvider($provider = null)
        {
            /** @var AuthManager $instance */
            return $instance->createUserProvider($provider);
        }
        /**
         * Get the default user provider name.
         *
         * @return string
         * @static
         */ public static function getDefaultUserProvider()
        {
            /** @var AuthManager $instance */
            return $instance->getDefaultUserProvider();
        }
        /**
         * Get the currently authenticated user.
         *
         * @return User|null
         * @static
         */ public static function user()
        {
            /** @var SessionGuard $instance */
            return $instance->user();
        }
        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null
         * @static
         */ public static function id()
        {
            /** @var SessionGuard $instance */
            return $instance->id();
        }
        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param  array $credentials
         * @return bool
         * @static
         */ public static function once($credentials = [])
        {
            /** @var SessionGuard $instance */
            return $instance->once($credentials);
        }
        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @return User|false
         * @static
         */ public static function onceUsingId($id)
        {
            /** @var SessionGuard $instance */
            return $instance->onceUsingId($id);
        }
        /**
         * Validate a user's credentials.
         *
         * @param  array $credentials
         * @return bool
         * @static
         */ public static function validate($credentials = [])
        {
            /** @var SessionGuard $instance */
            return $instance->validate($credentials);
        }
        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param  string                                                            $field
         * @param  array                                                             $extraConditions
         * @throws UnauthorizedHttpException
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */ public static function basic($field = 'email', $extraConditions = [])
        {
            /** @var SessionGuard $instance */
            return $instance->basic($field, $extraConditions);
        }
        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param  string                                                            $field
         * @param  array                                                             $extraConditions
         * @throws UnauthorizedHttpException
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */ public static function onceBasic($field = 'email', $extraConditions = [])
        {
            /** @var SessionGuard $instance */
            return $instance->onceBasic($field, $extraConditions);
        }
        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param  array $credentials
         * @param  bool  $remember
         * @return bool
         * @static
         */ public static function attempt($credentials = [], $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->attempt($credentials, $remember);
        }
        /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param  array               $credentials
         * @param  array|callable|null $callbacks
         * @param  bool                $remember
         * @return bool
         * @static
         */ public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->attemptWhen($credentials, $callbacks, $remember);
        }
        /**
         * Log the given user ID into the application.
         *
         * @param  bool                   $remember
         * @return User|false
         * @static
         */ public static function loginUsingId($id, $remember = false)
        {
            /** @var SessionGuard $instance */
            return $instance->loginUsingId($id, $remember);
        }
        /**
         * Log a user into the application.
         *
         * @param Authenticatable $user
         * @param bool                                       $remember
         * @static
         */ public static function login($user, $remember = false): void
        {
            /** @var SessionGuard $instance */
            $instance->login($user, $remember);
        }
        /**
         * Log the user out of the application.
         *
         * @static
         */ public static function logout(): void
        {
            /** @var SessionGuard $instance */
            $instance->logout();
        }
        /**
         * Log the user out of the application on their current device only.
         *
         * This method does not cycle the "remember" token.
         *
         * @static
         */ public static function logoutCurrentDevice(): void
        {
            /** @var SessionGuard $instance */
            $instance->logoutCurrentDevice();
        }
        /**
         * Invalidate other sessions for the current user.
         *
         * The application must be using the AuthenticateSession middleware.
         *
         * @param  string                                   $password
         * @return User|null
         * @static
         *@throws AuthenticationException
         */ public static function logoutOtherDevices($password)
        {
            /** @var SessionGuard $instance */
            return $instance->logoutOtherDevices($password);
        }
        /**
         * Register an authentication attempt event listener.
         *
         * @static
         */ public static function attempting($callback): void
        {
            /** @var SessionGuard $instance */
            $instance->attempting($callback);
        }
        /**
         * Get the last user we attempted to authenticate.
         *
         * @return User
         * @static
         */ public static function getLastAttempted()
        {
            /** @var SessionGuard $instance */
            return $instance->getLastAttempted();
        }
        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */ public static function getName()
        {
            /** @var SessionGuard $instance */
            return $instance->getName();
        }
        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */ public static function getRecallerName()
        {
            /** @var SessionGuard $instance */
            return $instance->getRecallerName();
        }
        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */ public static function viaRemember()
        {
            /** @var SessionGuard $instance */
            return $instance->viaRemember();
        }
        /**
         * Set the number of minutes the remember me cookie should be valid for.
         *
         * @param  int                           $minutes
         * @return SessionGuard
         * @static
         */ public static function setRememberDuration($minutes)
        {
            /** @var SessionGuard $instance */
            return $instance->setRememberDuration($minutes);
        }
        /**
         * Get the cookie creator instance used by the guard.
         *
         * @throws RuntimeException
         * @return QueueingFactory
         * @static
         */ public static function getCookieJar()
        {
            /** @var SessionGuard $instance */
            return $instance->getCookieJar();
        }
        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param QueueingFactory $cookie
         * @static
         */ public static function setCookieJar($cookie): void
        {
            /** @var SessionGuard $instance */
            $instance->setCookieJar($cookie);
        }
        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher
         * @static
         */ public static function getDispatcher()
        {
            /** @var SessionGuard $instance */
            return $instance->getDispatcher();
        }
        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @static
         */ public static function setDispatcher($events): void
        {
            /** @var SessionGuard $instance */
            $instance->setDispatcher($events);
        }
        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */ public static function getSession()
        {
            /** @var SessionGuard $instance */
            return $instance->getSession();
        }
        /**
         * Return the currently cached user.
         *
         * @return User|null
         * @static
         */ public static function getUser()
        {
            /** @var SessionGuard $instance */
            return $instance->getUser();
        }
        /**
         * Set the current user.
         *
         * @param  Authenticatable $user
         * @return SessionGuard
         * @static
         */ public static function setUser($user)
        {
            /** @var SessionGuard $instance */
            return $instance->setUser($user);
        }
        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */ public static function getRequest()
        {
            /** @var SessionGuard $instance */
            return $instance->getRequest();
        }
        /**
         * Set the current request instance.
         *
         * @param  \Symfony\Component\HttpFoundation\Request $request
         * @return SessionGuard
         * @static
         */ public static function setRequest($request)
        {
            /** @var SessionGuard $instance */
            return $instance->setRequest($request);
        }
        /**
         * Get the timebox instance used by the guard.
         *
         * @return Timebox
         * @static
         */ public static function getTimebox()
        {
            /** @var SessionGuard $instance */
            return $instance->getTimebox();
        }
        /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return User
         * @static
         *@throws AuthenticationException
         */ public static function authenticate()
        {
            /** @var SessionGuard $instance */
            return $instance->authenticate();
        }
        /**
         * Determine if the guard has a user instance.
         *
         * @return bool
         * @static
         */ public static function hasUser()
        {
            /** @var SessionGuard $instance */
            return $instance->hasUser();
        }
        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */ public static function check()
        {
            /** @var SessionGuard $instance */
            return $instance->check();
        }
        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */ public static function guest()
        {
            /** @var SessionGuard $instance */
            return $instance->guest();
        }
        /**
         * Forget the current user.
         *
         * @return SessionGuard
         * @static
         */ public static function forgetUser()
        {
            /** @var SessionGuard $instance */
            return $instance->forgetUser();
        }
        /**
         * Get the user provider used by the guard.
         *
         * @return UserProvider
         * @static
         */ public static function getProvider()
        {
            /** @var SessionGuard $instance */
            return $instance->getProvider();
        }
        /**
         * Set the user provider used by the guard.
         *
         * @param UserProvider $provider
         * @static
         */ public static function setProvider($provider): void
        {
            /** @var SessionGuard $instance */
            $instance->setProvider($provider);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            SessionGuard::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            SessionGuard::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return SessionGuard::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            SessionGuard::flushMacros();
        }
    }
    /**
     * @see \Illuminate\View\Compilers\BladeCompiler
     */ final class Blade
    {
        /**
         * Compile the view at the given path.
         *
         * @param string|null $path
         * @static
         */ public static function compile($path = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->compile($path);
        }
        /**
         * Get the path currently being compiled.
         *
         * @return string
         * @static
         */ public static function getPath()
        {
            /** @var BladeCompiler $instance */
            return $instance->getPath();
        }
        /**
         * Set the path currently being compiled.
         *
         * @param string $path
         * @static
         */ public static function setPath($path): void
        {
            /** @var BladeCompiler $instance */
            $instance->setPath($path);
        }
        /**
         * Compile the given Blade template contents.
         *
         * @param  string $value
         * @return string
         * @static
         */ public static function compileString($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->compileString($value);
        }
        /**
         * Evaluate and render a Blade string to HTML.
         *
         * @param  string $string
         * @param  array  $data
         * @param  bool   $deleteCachedView
         * @return string
         * @static
         */ public static function render($string, $data = [], $deleteCachedView = false)
        {
            return BladeCompiler::render($string, $data, $deleteCachedView);
        }
        /**
         * Render a component instance to HTML.
         *
         * @param  Component $component
         * @return string
         * @static
         */ public static function renderComponent($component)
        {
            return BladeCompiler::renderComponent($component);
        }
        /**
         * Strip the parentheses from the given expression.
         *
         * @param  string $expression
         * @return string
         * @static
         */ public static function stripParentheses($expression)
        {
            /** @var BladeCompiler $instance */
            return $instance->stripParentheses($expression);
        }
        /**
         * Register a custom Blade compiler.
         *
         * @param callable $compiler
         * @static
         */ public static function extend($compiler): void
        {
            /** @var BladeCompiler $instance */
            $instance->extend($compiler);
        }
        /**
         * Get the extensions used by the compiler.
         *
         * @return array
         * @static
         */ public static function getExtensions()
        {
            /** @var BladeCompiler $instance */
            return $instance->getExtensions();
        }
        /**
         * Register an "if" statement directive.
         *
         * @param string   $name
         * @param callable $callback
         * @static
         */ public static function if($name, $callback): void
        {
            /** @var BladeCompiler $instance */
            $instance->if($name, $callback);
        }
        /**
         * Check the result of a condition.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function check($name, ...$parameters)
        {
            /** @var BladeCompiler $instance */
            return $instance->check($name, ...$parameters);
        }
        /**
         * Register a class-based component alias directive.
         *
         * @param string      $class
         * @param string|null $alias
         * @param string      $prefix
         * @static
         */ public static function component($class, $alias = null, $prefix = ''): void
        {
            /** @var BladeCompiler $instance */
            $instance->component($class, $alias, $prefix);
        }
        /**
         * Register an array of class-based components.
         *
         * @param array  $components
         * @param string $prefix
         * @static
         */ public static function components($components, $prefix = ''): void
        {
            /** @var BladeCompiler $instance */
            $instance->components($components, $prefix);
        }
        /**
         * Get the registered class component aliases.
         *
         * @return array
         * @static
         */ public static function getClassComponentAliases()
        {
            /** @var BladeCompiler $instance */
            return $instance->getClassComponentAliases();
        }
        /**
         * Register a new anonymous component path.
         *
         * @param string      $path
         * @param string|null $prefix
         * @static
         */ public static function anonymousComponentPath($path, $prefix = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->anonymousComponentPath($path, $prefix);
        }
        /**
         * Register an anonymous component namespace.
         *
         * @param string      $directory
         * @param string|null $prefix
         * @static
         */ public static function anonymousComponentNamespace($directory, $prefix = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->anonymousComponentNamespace($directory, $prefix);
        }
        /**
         * Register a class-based component namespace.
         *
         * @param string $namespace
         * @param string $prefix
         * @static
         */ public static function componentNamespace($namespace, $prefix): void
        {
            /** @var BladeCompiler $instance */
            $instance->componentNamespace($namespace, $prefix);
        }
        /**
         * Get the registered anonymous component paths.
         *
         * @return array
         * @static
         */ public static function getAnonymousComponentPaths()
        {
            /** @var BladeCompiler $instance */
            return $instance->getAnonymousComponentPaths();
        }
        /**
         * Get the registered anonymous component namespaces.
         *
         * @return array
         * @static
         */ public static function getAnonymousComponentNamespaces()
        {
            /** @var BladeCompiler $instance */
            return $instance->getAnonymousComponentNamespaces();
        }
        /**
         * Get the registered class component namespaces.
         *
         * @return array
         * @static
         */ public static function getClassComponentNamespaces()
        {
            /** @var BladeCompiler $instance */
            return $instance->getClassComponentNamespaces();
        }
        /**
         * Register a component alias directive.
         *
         * @param string      $path
         * @param string|null $alias
         * @static
         */ public static function aliasComponent($path, $alias = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->aliasComponent($path, $alias);
        }
        /**
         * Register an include alias directive.
         *
         * @param string      $path
         * @param string|null $alias
         * @static
         */ public static function include($path, $alias = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->include($path, $alias);
        }
        /**
         * Register an include alias directive.
         *
         * @param string      $path
         * @param string|null $alias
         * @static
         */ public static function aliasInclude($path, $alias = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->aliasInclude($path, $alias);
        }
        /**
         * Register a handler for custom directives, binding the handler to the compiler.
         *
         * @param  string                    $name
         * @param  callable                  $handler
         * @throws InvalidArgumentException
         * @static
         */ public static function bindDirective($name, $handler): void
        {
            /** @var BladeCompiler $instance */
            $instance->bindDirective($name, $handler);
        }
        /**
         * Register a handler for custom directives.
         *
         * @param  string                    $name
         * @param  callable                  $handler
         * @param  bool                      $bind
         * @throws InvalidArgumentException
         * @static
         */ public static function directive($name, $handler, $bind = false): void
        {
            /** @var BladeCompiler $instance */
            $instance->directive($name, $handler, $bind);
        }
        /**
         * Get the list of custom directives.
         *
         * @return array
         * @static
         */ public static function getCustomDirectives()
        {
            /** @var BladeCompiler $instance */
            return $instance->getCustomDirectives();
        }
        /**
         * Indicate that the following callable should be used to prepare strings for compilation.
         *
         * @param  callable                                 $callback
         * @return BladeCompiler
         * @static
         */ public static function prepareStringsForCompilationUsing($callback)
        {
            /** @var BladeCompiler $instance */
            return $instance->prepareStringsForCompilationUsing($callback);
        }
        /**
         * Register a new precompiler.
         *
         * @param callable $precompiler
         * @static
         */ public static function precompiler($precompiler): void
        {
            /** @var BladeCompiler $instance */
            $instance->precompiler($precompiler);
        }
        /**
         * Set the echo format to be used by the compiler.
         *
         * @param string $format
         * @static
         */ public static function setEchoFormat($format): void
        {
            /** @var BladeCompiler $instance */
            $instance->setEchoFormat($format);
        }
        /**
         * Set the "echo" format to double encode entities.
         *
         * @static
         */ public static function withDoubleEncoding(): void
        {
            /** @var BladeCompiler $instance */
            $instance->withDoubleEncoding();
        }
        /**
         * Set the "echo" format to not double encode entities.
         *
         * @static
         */ public static function withoutDoubleEncoding(): void
        {
            /** @var BladeCompiler $instance */
            $instance->withoutDoubleEncoding();
        }
        /**
         * Indicate that component tags should not be compiled.
         *
         * @static
         */ public static function withoutComponentTags(): void
        {
            /** @var BladeCompiler $instance */
            $instance->withoutComponentTags();
        }
        /**
         * Get the path to the compiled version of a view.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function getCompiledPath($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var BladeCompiler $instance */
            return $instance->getCompiledPath($path);
        }
        /**
         * Determine if the view at the given path is expired.
         *
         * @param  string          $path
         * @throws ErrorException
         * @return bool
         * @static
         */ public static function isExpired($path)
        {            //Method inherited from \Illuminate\View\Compilers\Compiler
            /** @var BladeCompiler $instance */
            return $instance->isExpired($path);
        }
        /**
         * Get a new component hash for a component name.
         *
         * @param  string $component
         * @return string
         * @static
         */ public static function newComponentHash($component)
        {
            return BladeCompiler::newComponentHash($component);
        }
        /**
         * Compile a class component opening.
         *
         * @param  string $component
         * @param  string $alias
         * @param  string $data
         * @param  string $hash
         * @return string
         * @static
         */ public static function compileClassComponentOpening($component, $alias, $data, $hash)
        {
            return BladeCompiler::compileClassComponentOpening($component, $alias, $data, $hash);
        }
        /**
         * Compile the end-component statements into valid PHP.
         *
         * @return string
         * @static
         */ public static function compileEndComponentClass()
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEndComponentClass();
        }
        /**
         * Sanitize the given component attribute value.
         *
         * @static
         */ public static function sanitizeComponentAttribute($value)
        {
            return BladeCompiler::sanitizeComponentAttribute($value);
        }
        /**
         * Compile an end-once block into valid PHP.
         *
         * @return string
         * @static
         */ public static function compileEndOnce()
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEndOnce();
        }
        /**
         * Add a handler to be executed before echoing a given class.
         *
         * @param callable|string $class
         * @param callable|null   $handler
         * @static
         */ public static function stringable($class, $handler = null): void
        {
            /** @var BladeCompiler $instance */
            $instance->stringable($class, $handler);
        }
        /**
         * Compile Blade echos into valid PHP.
         *
         * @param  string $value
         * @return string
         * @static
         */ public static function compileEchos($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->compileEchos($value);
        }
        /**
         * Apply the echo handler for the value if it exists.
         *
         * @param  string $value
         * @return string
         * @static
         */ public static function applyEchoHandler($value)
        {
            /** @var BladeCompiler $instance */
            return $instance->applyEchoHandler($value);
        }
    }
    /**
     * @method static mixed                                             auth(\Illuminate\Http\Request $request)
     * @method static mixed                                             validAuthenticationResponse(\Illuminate\Http\Request $request, mixed $result)
     * @method static void                                              broadcast(array $channels, string $event, array $payload = [])
     * @method static array|null                                        resolveAuthenticatedUser(\Illuminate\Http\Request $request)
     * @method static void                                              resolveAuthenticatedUserUsing(Closure $callback)
     * @method static Broadcaster channel(HasBroadcastChannel|string $channel, callable|string $callback, array $options = [])
     * @method static Collection                    getChannels()
     * @see \Illuminate\Broadcasting\BroadcastManager
     * @see \Illuminate\Broadcasting\Broadcasters\Broadcaster
     */ final class Broadcast
    {
        /**
         * Register the routes for handling broadcast channel authentication and sockets.
         *
         * @param array|null $attributes
         * @static
         */ public static function routes($attributes = null): void
        {
            /** @var BroadcastManager $instance */
            $instance->routes($attributes);
        }
        /**
         * Register the routes for handling broadcast user authentication.
         *
         * @param array|null $attributes
         * @static
         */ public static function userRoutes($attributes = null): void
        {
            /** @var BroadcastManager $instance */
            $instance->userRoutes($attributes);
        }
        /**
         * Register the routes for handling broadcast authentication and sockets.
         *
         * Alias of "routes" method.
         *
         * @param array|null $attributes
         * @static
         */ public static function channelRoutes($attributes = null): void
        {
            /** @var BroadcastManager $instance */
            $instance->channelRoutes($attributes);
        }
        /**
         * Get the socket ID for the given request.
         *
         * @param  \Illuminate\Http\Request|null $request
         * @return string|null
         * @static
         */ public static function socket($request = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->socket($request);
        }
        /**
         * Begin sending an anonymous broadcast to the given channels.
         *
         * @static
         */ public static function on($channels)
        {
            /** @var BroadcastManager $instance */
            return $instance->on($channels);
        }
        /**
         * Begin sending an anonymous broadcast to the given private channels.
         *
         * @static
         */ public static function private($channel)
        {
            /** @var BroadcastManager $instance */
            return $instance->private($channel);
        }
        /**
         * Begin sending an anonymous broadcast to the given presence channels.
         *
         * @static
         */ public static function presence($channel)
        {
            /** @var BroadcastManager $instance */
            return $instance->presence($channel);
        }
        /**
         * Begin broadcasting an event.
         *
         * @param  mixed|null                                $event
         * @return PendingBroadcast
         * @static
         */ public static function event($event = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->event($event);
        }
        /**
         * Queue the given event for broadcast.
         *
         * @static
         */ public static function queue($event): void
        {
            /** @var BroadcastManager $instance */
            $instance->queue($event);
        }
        /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @static
         */ public static function connection($driver = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->connection($driver);
        }
        /**
         * Get a driver instance.
         *
         * @param string|null $name
         * @static
         */ public static function driver($name = null)
        {
            /** @var BroadcastManager $instance */
            return $instance->driver($name);
        }
        /**
         * Get a Pusher instance for the given configuration.
         *
         * @param  array          $config
         * @return Pusher
         * @static
         */ public static function pusher($config)
        {
            /** @var BroadcastManager $instance */
            return $instance->pusher($config);
        }
        /**
         * Get an Ably instance for the given configuration.
         *
         * @param  array          $config
         * @return AblyRest
         * @static
         */ public static function ably($config)
        {
            /** @var BroadcastManager $instance */
            return $instance->ably($config);
        }
        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var BroadcastManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var BroadcastManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {
            /** @var BroadcastManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                                    $driver
         * @param  Closure                                  $callback
         * @return BroadcastManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var BroadcastManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */ public static function getApplication()
        {
            /** @var BroadcastManager $instance */
            return $instance->getApplication();
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return BroadcastManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var BroadcastManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Forget all of the resolved driver instances.
         *
         * @return BroadcastManager
         * @static
         */ public static function forgetDrivers()
        {
            /** @var BroadcastManager $instance */
            return $instance->forgetDrivers();
        }
    }
    /**
     * @see \Illuminate\Bus\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\BusFake
     */ final class Bus
    {
        /**
         * Dispatch a command to its appropriate handler.
         *
         * @static
         */ public static function dispatch($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatch($command);
        }
        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * Queueable jobs will be dispatched to the "sync" queue.
         *
         * @static
         */ public static function dispatchSync($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchSync($command, $handler);
        }
        /**
         * Dispatch a command to its appropriate handler in the current process without using the synchronous queue.
         *
         * @static
         */ public static function dispatchNow($command, $handler = null)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchNow($command, $handler);
        }
        /**
         * Attempt to find the batch with the given ID.
         *
         * @param  string                     $batchId
         * @return Batch|null
         * @static
         */ public static function findBatch($batchId)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->findBatch($batchId);
        }
        /**
         * Create a new batch of queueable jobs.
         *
         * @param  array|Collection|mixed $jobs
         * @return PendingBatch
         * @static
         */ public static function batch($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->batch($jobs);
        }
        /**
         * Create a new chain of queueable jobs.
         *
         * @param  array|Collection    $jobs
         * @return PendingChain
         * @static
         */ public static function chain($jobs)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->chain($jobs);
        }
        /**
         * Determine if the given command has a handler.
         *
         * @return bool
         * @static
         */ public static function hasCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->hasCommandHandler($command);
        }
        /**
         * Retrieve the handler for a command.
         *
         * @return bool|mixed
         * @static
         */ public static function getCommandHandler($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->getCommandHandler($command);
        }
        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @throws RuntimeException
         * @static
         */ public static function dispatchToQueue($command)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->dispatchToQueue($command);
        }
        /**
         * Dispatch a command to its appropriate handler after the current process.
         *
         * @static
         */ public static function dispatchAfterResponse($command, $handler = null): void
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            $instance->dispatchAfterResponse($command, $handler);
        }
        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param  array                      $pipes
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */ public static function pipeThrough($pipes)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->pipeThrough($pipes);
        }
        /**
         * Map a command to a handler.
         *
         * @param  array                      $map
         * @return \Illuminate\Bus\Dispatcher
         * @static
         */ public static function map($map)
        {
            /** @var \Illuminate\Bus\Dispatcher $instance */
            return $instance->map($map);
        }
        /**
         * Specify the jobs that should be dispatched instead of faked.
         *
         * @param  array|string                              $jobsToDispatch
         * @return BusFake
         * @static
         */ public static function except($jobsToDispatch)
        {
            /** @var BusFake $instance */
            return $instance->except($jobsToDispatch);
        }
        /**
         * Assert if a job was dispatched based on a truth-test callback.
         *
         * @param Closure|string   $command
         * @param callable|int|null $callback
         * @static
         */ public static function assertDispatched($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatched($command, $callback);
        }
        /**
         * Assert if a job was pushed a number of times.
         *
         * @param Closure|string $command
         * @param int             $times
         * @static
         */ public static function assertDispatchedTimes($command, $times = 1): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedTimes($command, $times);
        }
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param Closure|string $command
         * @param callable|null   $callback
         * @static
         */ public static function assertNotDispatched($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatched($command, $callback);
        }
        /**
         * Assert that no jobs were dispatched.
         *
         * @static
         */ public static function assertNothingDispatched(): void
        {
            /** @var BusFake $instance */
            $instance->assertNothingDispatched();
        }
        /**
         * Assert if a job was explicitly dispatched synchronously based on a truth-test callback.
         *
         * @param Closure|string   $command
         * @param callable|int|null $callback
         * @static
         */ public static function assertDispatchedSync($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedSync($command, $callback);
        }
        /**
         * Assert if a job was pushed synchronously a number of times.
         *
         * @param Closure|string $command
         * @param int             $times
         * @static
         */ public static function assertDispatchedSyncTimes($command, $times = 1): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedSyncTimes($command, $times);
        }
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param Closure|string $command
         * @param callable|null   $callback
         * @static
         */ public static function assertNotDispatchedSync($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatchedSync($command, $callback);
        }
        /**
         * Assert if a job was dispatched after the response was sent based on a truth-test callback.
         *
         * @param Closure|string   $command
         * @param callable|int|null $callback
         * @static
         */ public static function assertDispatchedAfterResponse($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedAfterResponse($command, $callback);
        }
        /**
         * Assert if a job was pushed after the response was sent a number of times.
         *
         * @param Closure|string $command
         * @param int             $times
         * @static
         */ public static function assertDispatchedAfterResponseTimes($command, $times = 1): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedAfterResponseTimes($command, $times);
        }
        /**
         * Determine if a job was dispatched based on a truth-test callback.
         *
         * @param Closure|string $command
         * @param callable|null   $callback
         * @static
         */ public static function assertNotDispatchedAfterResponse($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertNotDispatchedAfterResponse($command, $callback);
        }
        /**
         * Assert if a chain of jobs was dispatched.
         *
         * @param array $expectedChain
         * @static
         */ public static function assertChained($expectedChain): void
        {
            /** @var BusFake $instance */
            $instance->assertChained($expectedChain);
        }
        /**
         * Assert no chained jobs was dispatched.
         *
         * @static
         */ public static function assertNothingChained(): void
        {
            /** @var BusFake $instance */
            $instance->assertNothingChained();
        }
        /**
         * Assert if a job was dispatched with an empty chain based on a truth-test callback.
         *
         * @param Closure|string $command
         * @param callable|null   $callback
         * @static
         */ public static function assertDispatchedWithoutChain($command, $callback = null): void
        {
            /** @var BusFake $instance */
            $instance->assertDispatchedWithoutChain($command, $callback);
        }
        /**
         * Create a new assertion about a chained batch.
         *
         * @param  Closure                                                $callback
         * @return ChainedBatchTruthTest
         * @static
         */ public static function chainedBatch($callback)
        {
            /** @var BusFake $instance */
            return $instance->chainedBatch($callback);
        }
        /**
         * Assert if a batch was dispatched based on a truth-test callback.
         *
         * @param callable $callback
         * @static
         */ public static function assertBatched($callback): void
        {
            /** @var BusFake $instance */
            $instance->assertBatched($callback);
        }
        /**
         * Assert the number of batches that have been dispatched.
         *
         * @param int $count
         * @static
         */ public static function assertBatchCount($count): void
        {
            /** @var BusFake $instance */
            $instance->assertBatchCount($count);
        }
        /**
         * Assert that no batched jobs were dispatched.
         *
         * @static
         */ public static function assertNothingBatched(): void
        {
            /** @var BusFake $instance */
            $instance->assertNothingBatched();
        }
        /**
         * Assert that no jobs were dispatched, chained, or batched.
         *
         * @static
         */ public static function assertNothingPlaced(): void
        {
            /** @var BusFake $instance */
            $instance->assertNothingPlaced();
        }
        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param  string                         $command
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function dispatched($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatched($command, $callback);
        }
        /**
         * Get all of the jobs dispatched synchronously matching a truth-test callback.
         *
         * @param  string                         $command
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function dispatchedSync($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatchedSync($command, $callback);
        }
        /**
         * Get all of the jobs dispatched after the response was sent matching a truth-test callback.
         *
         * @param  string                         $command
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function dispatchedAfterResponse($command, $callback = null)
        {
            /** @var BusFake $instance */
            return $instance->dispatchedAfterResponse($command, $callback);
        }
        /**
         * Get all of the pending batches matching a truth-test callback.
         *
         * @param  callable                       $callback
         * @return Collection
         * @static
         */ public static function batched($callback)
        {
            /** @var BusFake $instance */
            return $instance->batched($callback);
        }
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param  string $command
         * @return bool
         * @static
         */ public static function hasDispatched($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatched($command);
        }
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param  string $command
         * @return bool
         * @static
         */ public static function hasDispatchedSync($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatchedSync($command);
        }
        /**
         * Determine if there are any stored commands for a given class.
         *
         * @param  string $command
         * @return bool
         * @static
         */ public static function hasDispatchedAfterResponse($command)
        {
            /** @var BusFake $instance */
            return $instance->hasDispatchedAfterResponse($command);
        }
        /**
         * Dispatch an empty job batch for testing.
         *
         * @param  string                $name
         * @return Batch
         * @static
         */ public static function dispatchFakeBatch($name = '')
        {
            /** @var BusFake $instance */
            return $instance->dispatchFakeBatch($name);
        }
        /**
         * Record the fake pending batch dispatch.
         *
         * @param  PendingBatch $pendingBatch
         * @return Batch
         * @static
         */ public static function recordPendingBatch($pendingBatch)
        {
            /** @var BusFake $instance */
            return $instance->recordPendingBatch($pendingBatch);
        }
        /**
         * Specify if commands should be serialized and restored when being batched.
         *
         * @param  bool                                      $serializeAndRestore
         * @return BusFake
         * @static
         */ public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var BusFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }
        /**
         * Get the batches that have been dispatched.
         *
         * @return array
         * @static
         */ public static function dispatchedBatches()
        {
            /** @var BusFake $instance */
            return $instance->dispatchedBatches();
        }
    }
    /**
     * @see \Illuminate\Cache\CacheManager
     * @see \Illuminate\Cache\Repository
     */ final class Cache
    {
        /**
         * Get a cache store instance by name, wrapped in a repository.
         *
         * @param  string|null                            $name
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */ public static function store($name = null)
        {
            /** @var CacheManager $instance */
            return $instance->store($name);
        }
        /**
         * Get a cache driver instance.
         *
         * @param  string|null                            $driver
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */ public static function driver($driver = null)
        {
            /** @var CacheManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Resolve the given store.
         *
         * @param  string                                 $name
         * @throws InvalidArgumentException
         * @return \Illuminate\Contracts\Cache\Repository
         * @static
         */ public static function resolve($name)
        {
            /** @var CacheManager $instance */
            return $instance->resolve($name);
        }
        /**
         * Build a cache repository with the given configuration.
         *
         * @param  array                        $config
         * @return \Illuminate\Cache\Repository
         * @static
         */ public static function build($config)
        {
            /** @var CacheManager $instance */
            return $instance->build($config);
        }
        /**
         * Create a new cache repository with the given implementation.
         *
         * @param  \Illuminate\Contracts\Cache\Store $store
         * @param  array                             $config
         * @return \Illuminate\Cache\Repository
         * @static
         */ public static function repository($store, $config = [])
        {
            /** @var CacheManager $instance */
            return $instance->repository($store, $config);
        }
        /**
         * Re-set the event dispatcher on all resolved cache repositories.
         *
         * @static
         */ public static function refreshEventDispatcher(): void
        {
            /** @var CacheManager $instance */
            $instance->refreshEventDispatcher();
        }
        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var CacheManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var CacheManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Unset the given driver instances.
         *
         * @param  array|string|null              $name
         * @return CacheManager
         * @static
         */ public static function forgetDriver($name = null)
        {
            /** @var CacheManager $instance */
            return $instance->forgetDriver($name);
        }
        /**
         * Disconnect the given driver and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {
            /** @var CacheManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                         $driver
         * @param  Closure                       $callback
         * @return CacheManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var CacheManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return CacheManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var CacheManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Determine if an item exists in the cache.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function has($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->has($key);
        }
        /**
         * Determine if an item doesn't exist in the cache.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function missing($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->missing($key);
        }
        /**
         * Retrieve an item from the cache by key.
         *
         * @param array|string $key
         * @static
         */ public static function get($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->get($key, $default);
        }
        /**
         * Retrieve multiple items from the cache by key.
         *
         * Items not found in the cache will have a null value.
         *
         * @param  array $keys
         * @return array
         * @static
         */ public static function many($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->many($keys);
        }
        /**
         * Obtains multiple cache items by their unique keys.
         *
         * @param  \Psr\SimpleCache\iterable<string>         $keys    A list of keys that can be obtained in a single operation.
         * @param  mixed                                     $default Default value to return for keys that do not exist.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $keys is neither an array nor a Traversable,
         *                                                   or if any of the $keys are not a legal value.
         * @return \Illuminate\Cache\iterable
         * @return \Psr\SimpleCache\iterable<string, mixed>  A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
         * @static
         */ public static function getMultiple($keys, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getMultiple($keys, $default);
        }
        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param array|string $key
         * @static
         */ public static function pull($key, $default = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->pull($key, $default);
        }
        /**
         * Store an item in the cache.
         *
         * @param  array|string                              $key
         * @param  DateInterval|DateTimeInterface|int|null $ttl
         * @return bool
         * @static
         */ public static function put($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->put($key, $value, $ttl);
        }
        /**
         * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
         *
         * @param  string                                    $key   The key of the item to store.
         * @param  mixed                                     $value The value of the item to store, must be serializable.
         * @param  DateInterval|int|null                    $ttl   Optional. The TTL value of this item. If no value is sent and
         *                                                          the driver supports TTL then the library may set a default value
         *                                                          for it or let the driver take care of that.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if the $key string is not a legal value.
         * @return bool
         * @return bool                                      True on success and false on failure.
         * @static
         */ public static function set($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->set($key, $value, $ttl);
        }
        /**
         * Store multiple items in the cache for a given number of seconds.
         *
         * @param  array                                     $values
         * @param  DateInterval|DateTimeInterface|int|null $ttl
         * @return bool
         * @static
         */ public static function putMany($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->putMany($values, $ttl);
        }
        /**
         * Persists a set of key => value pairs in the cache, with an optional TTL.
         *
         * @param  \Psr\SimpleCache\iterable                 $values A list of key => value pairs for a multiple-set operation.
         * @param  DateInterval|int|null                    $ttl    Optional. The TTL value of this item. If no value is sent and
         *                                                           the driver supports TTL then the library may set a default value
         *                                                           for it or let the driver take care of that.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $values is neither an array nor a Traversable,
         *                                                   or if any of the $values are not a legal value.
         * @return bool
         * @return bool                                      True on success and false on failure.
         * @static
         */ public static function setMultiple($values, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setMultiple($values, $ttl);
        }
        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param  string                                    $key
         * @param  DateInterval|DateTimeInterface|int|null $ttl
         * @return bool
         * @static
         */ public static function add($key, $value, $ttl = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->add($key, $value, $ttl);
        }
        /**
         * Increment the value of an item in the cache.
         *
         * @param  string   $key
         * @return bool|int
         * @static
         */ public static function increment($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->increment($key, $value);
        }
        /**
         * Decrement the value of an item in the cache.
         *
         * @param  string   $key
         * @return bool|int
         * @static
         */ public static function decrement($key, $value = 1)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->decrement($key, $value);
        }
        /**
         * Store an item in the cache indefinitely.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function forever($key, $value)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forever($key, $value);
        }
        /**
         * Get an item from the cache, or execute the given Closure and store the result.
         *
         * @template TCacheValue
         * @param  string                                             $key
         * @param  Closure|DateInterval|DateTimeInterface|int|null $ttl
         * @param  Closure():  TCacheValue                           $callback
         * @return TCacheValue
         * @static
         */ public static function remember($key, $ttl, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->remember($key, $ttl, $callback);
        }
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param  string                        $key
         * @param  Closure():  TCacheValue      $callback
         * @return TCacheValue
         * @static
         */ public static function sear($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->sear($key, $callback);
        }
        /**
         * Get an item from the cache, or execute the given Closure and store the result forever.
         *
         * @template TCacheValue
         * @param  string                        $key
         * @param  Closure():  TCacheValue      $callback
         * @return TCacheValue
         * @static
         */ public static function rememberForever($key, $callback)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->rememberForever($key, $callback);
        }
        /**
         * Retrieve an item from the cache by key, refreshing it in the background if it is stale.
         *
         * @template TCacheValue
         * @param string $key
         * @param array{  0: DateTimeInterface|DateInterval|int, 1: DateTimeInterface|DateInterval|int }  $ttl
         * @param (callable(): TCacheValue) $callback
         * @param array{  seconds?: int, owner?: string }|null  $lock
         * @return TCacheValue
         * @static
         */ public static function flexible($key, $ttl, $callback, $lock = null)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->flexible($key, $ttl, $callback, $lock);
        }
        /**
         * Remove an item from the cache.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function forget($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->forget($key);
        }
        /**
         * Delete an item from the cache by its unique key.
         *
         * @param  string                                    $key The unique cache key of the item to delete.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if the $key string is not a legal value.
         * @return bool
         * @return bool                                      True if the item was successfully removed. False if there was an error.
         * @static
         */ public static function delete($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->delete($key);
        }
        /**
         * Deletes multiple cache items in a single operation.
         *
         * @param  \Psr\SimpleCache\iterable<string>         $keys A list of string-based keys to be deleted.
         * @throws \Psr\SimpleCache\InvalidArgumentException
         *                                                   MUST be thrown if $keys is neither an array nor a Traversable,
         *                                                   or if any of the $keys are not a legal value.
         * @return bool
         * @return bool                                      True if the items were successfully removed. False if there was an error.
         * @static
         */ public static function deleteMultiple($keys)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->deleteMultiple($keys);
        }
        /**
         * Wipes clean the entire cache's keys.
         *
         * @return bool
         * @return bool True on success and false on failure.
         * @static
         */ public static function clear()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->clear();
        }
        /**
         * Begin executing a new tags operation if the store supports it.
         *
         * @param  array|mixed                   $names
         * @throws BadMethodCallException
         * @return TaggedCache
         * @static
         */ public static function tags($names)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->tags($names);
        }
        /**
         * Determine if the current store supports tags.
         *
         * @return bool
         * @static
         */ public static function supportsTags()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->supportsTags();
        }
        /**
         * Get the default cache time.
         *
         * @return int|null
         * @static
         */ public static function getDefaultCacheTime()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getDefaultCacheTime();
        }
        /**
         * Set the default cache time in seconds.
         *
         * @param  int|null                     $seconds
         * @return \Illuminate\Cache\Repository
         * @static
         */ public static function setDefaultCacheTime($seconds)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setDefaultCacheTime($seconds);
        }
        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */ public static function getStore()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getStore();
        }
        /**
         * Set the cache store implementation.
         *
         * @param  \Illuminate\Contracts\Cache\Store $store
         * @return static
         * @static
         */ public static function setStore($store)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->setStore($store);
        }
        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher|null
         * @static
         */ public static function getEventDispatcher()
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->getEventDispatcher();
        }
        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @static
         */ public static function setEventDispatcher($events): void
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->setEventDispatcher($events);
        }
        /**
         * Determine if a cached value exists.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function offsetExists($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetExists($key);
        }
        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @static
         */ public static function offsetGet($key)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->offsetGet($key);
        }
        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @static
         */ public static function offsetSet($key, $value): void
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetSet($key, $value);
        }
        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @static
         */ public static function offsetUnset($key): void
        {
            /** @var \Illuminate\Cache\Repository $instance */
            $instance->offsetUnset($key);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Cache\Repository::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Cache\Repository::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Cache\Repository::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Cache\Repository::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Cache\Repository $instance */
            return $instance->macroCall($method, $parameters);
        }
        /**
         * Get a lock instance.
         *
         * @param  string                           $name
         * @param  int                              $seconds
         * @param  string|null                      $owner
         * @return Lock
         * @static
         */ public static function lock($name, $seconds = 0, $owner = null)
        {
            /** @var DatabaseStore $instance */
            return $instance->lock($name, $seconds, $owner);
        }
        /**
         * Restore a lock instance using the owner identifier.
         *
         * @param  string                           $name
         * @param  string                           $owner
         * @return Lock
         * @static
         */ public static function restoreLock($name, $owner)
        {
            /** @var DatabaseStore $instance */
            return $instance->restoreLock($name, $owner);
        }
        /**
         * Remove an item from the cache if it is expired.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function forgetIfExpired($key)
        {
            /** @var DatabaseStore $instance */
            return $instance->forgetIfExpired($key);
        }
        /**
         * Remove all items from the cache.
         *
         * @return bool
         * @static
         */ public static function flush()
        {
            /** @var DatabaseStore $instance */
            return $instance->flush();
        }
        /**
         * Get the underlying database connection.
         *
         * @return PostgresConnection
         * @static
         */ public static function getConnection()
        {
            /** @var DatabaseStore $instance */
            return $instance->getConnection();
        }
        /**
         * Specify the name of the connection that should be used to manage locks.
         *
         * @param  ConnectionInterface $connection
         * @return DatabaseStore
         * @static
         */ public static function setLockConnection($connection)
        {
            /** @var DatabaseStore $instance */
            return $instance->setLockConnection($connection);
        }
        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */ public static function getPrefix()
        {
            /** @var DatabaseStore $instance */
            return $instance->getPrefix();
        }
        /**
         * Set the cache key prefix.
         *
         * @param string $prefix
         * @static
         */ public static function setPrefix($prefix): void
        {
            /** @var DatabaseStore $instance */
            $instance->setPrefix($prefix);
        }
    }
    /**
     * @method static array                                      run(Closure|array $tasks)
     * @method static DeferredCallback defer(Closure|array $tasks)
     * @see \Illuminate\Concurrency\ConcurrencyManager
     */ final class Concurrency
    {
        /**
         * Get a driver instance by name.
         *
         * @param string|null $name
         * @static
         */ public static function driver($name = null)
        {
            /** @var ConcurrencyManager $instance */
            return $instance->driver($name);
        }
        /**
         * Create an instance of the process concurrency driver.
         *
         * @param  array                                 $config
         * @return ProcessDriver
         * @static
         */ public static function createProcessDriver($config)
        {
            /** @var ConcurrencyManager $instance */
            return $instance->createProcessDriver($config);
        }
        /**
         * Create an instance of the fork concurrency driver.
         *
         * @param  array                              $config
         * @throws RuntimeException
         * @return ForkDriver
         * @static
         */ public static function createForkDriver($config)
        {
            /** @var ConcurrencyManager $instance */
            return $instance->createForkDriver($config);
        }
        /**
         * Create an instance of the sync concurrency driver.
         *
         * @param  array                              $config
         * @return SyncDriver
         * @static
         */ public static function createSyncDriver($config)
        {
            /** @var ConcurrencyManager $instance */
            return $instance->createSyncDriver($config);
        }
        /**
         * Get the default instance name.
         *
         * @return string
         * @static
         */ public static function getDefaultInstance()
        {
            /** @var ConcurrencyManager $instance */
            return $instance->getDefaultInstance();
        }
        /**
         * Set the default instance name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultInstance($name): void
        {
            /** @var ConcurrencyManager $instance */
            $instance->setDefaultInstance($name);
        }
        /**
         * Get the instance specific configuration.
         *
         * @param  string $name
         * @return array
         * @static
         */ public static function getInstanceConfig($name)
        {
            /** @var ConcurrencyManager $instance */
            return $instance->getInstanceConfig($name);
        }
        /**
         * Get an instance by name.
         *
         * @param string|null $name
         * @static
         */ public static function instance($name = null)
        {            //Method inherited from \Illuminate\Support\MultipleInstanceManager
            /** @var ConcurrencyManager $instance */
            return $instance->instance($name);
        }
        /**
         * Unset the given instances.
         *
         * @param  array|string|null                          $name
         * @return ConcurrencyManager
         * @static
         */ public static function forgetInstance($name = null)
        {            //Method inherited from \Illuminate\Support\MultipleInstanceManager
            /** @var ConcurrencyManager $instance */
            return $instance->forgetInstance($name);
        }
        /**
         * Disconnect the given instance and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {            //Method inherited from \Illuminate\Support\MultipleInstanceManager
            /** @var ConcurrencyManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom instance creator Closure.
         *
         * @param  string                                     $name
         * @param  Closure                                   $callback
         * @return ConcurrencyManager
         * @static
         */ public static function extend($name, $callback)
        {            //Method inherited from \Illuminate\Support\MultipleInstanceManager
            /** @var ConcurrencyManager $instance */
            return $instance->extend($name, $callback);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return ConcurrencyManager
         * @static
         */ public static function setApplication($app)
        {            //Method inherited from \Illuminate\Support\MultipleInstanceManager
            /** @var ConcurrencyManager $instance */
            return $instance->setApplication($app);
        }
    }
    /**
     * @see \Illuminate\Config\Repository
     */ final class Config
    {
        /**
         * Determine if the given configuration value exists.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function has($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->has($key);
        }
        /**
         * Get the specified configuration value.
         *
         * @param array|string $key
         * @static
         */ public static function get($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->get($key, $default);
        }
        /**
         * Get many configuration values.
         *
         * @param  array<int|string,mixed> $keys
         * @return array<string,mixed>
         * @static
         */ public static function getMany($keys)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->getMany($keys);
        }
        /**
         * Get the specified string configuration value.
         *
         * @param  string                                 $key
         * @param  (Closure():(string|null))|string|null $default
         * @return string
         * @static
         */ public static function string($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->string($key, $default);
        }
        /**
         * Get the specified integer configuration value.
         *
         * @param  string                           $key
         * @param  (Closure():(int|null))|int|null $default
         * @return int
         * @static
         */ public static function integer($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->integer($key, $default);
        }
        /**
         * Get the specified float configuration value.
         *
         * @param  string                               $key
         * @param  (Closure():(float|null))|float|null $default
         * @return float
         * @static
         */ public static function float($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->float($key, $default);
        }
        /**
         * Get the specified boolean configuration value.
         *
         * @param  string                             $key
         * @param  bool|(Closure():(bool|null))|null $default
         * @return bool
         * @static
         */ public static function boolean($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->boolean($key, $default);
        }
        /**
         * Get the specified array configuration value.
         *
         * @param  string                                                                   $key
         * @param  array<array-key, mixed>|(Closure():(array<array-key, mixed>|null))|null $default
         * @return array<array-key, mixed>
         * @static
         */ public static function array($key, $default = null)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->array($key, $default);
        }
        /**
         * Set a given configuration value.
         *
         * @param array|string $key
         * @static
         */ public static function set($key, $value = null): void
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->set($key, $value);
        }
        /**
         * Prepend a value onto an array configuration value.
         *
         * @param string $key
         * @static
         */ public static function prepend($key, $value): void
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->prepend($key, $value);
        }
        /**
         * Push a value onto an array configuration value.
         *
         * @param string $key
         * @static
         */ public static function push($key, $value): void
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->push($key, $value);
        }
        /**
         * Get all of the configuration items for the application.
         *
         * @return array
         * @static
         */ public static function all()
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->all();
        }
        /**
         * Determine if the given configuration option exists.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function offsetExists($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetExists($key);
        }
        /**
         * Get a configuration option.
         *
         * @param string $key
         * @static
         */ public static function offsetGet($key)
        {
            /** @var \Illuminate\Config\Repository $instance */
            return $instance->offsetGet($key);
        }
        /**
         * Set a configuration option.
         *
         * @param string $key
         * @static
         */ public static function offsetSet($key, $value): void
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetSet($key, $value);
        }
        /**
         * Unset a configuration option.
         *
         * @param string $key
         * @static
         */ public static function offsetUnset($key): void
        {
            /** @var \Illuminate\Config\Repository $instance */
            $instance->offsetUnset($key);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Config\Repository::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Config\Repository::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Config\Repository::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Config\Repository::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Log\Context\Repository
     */ final class Context
    {
        /**
         * Determine if the given key exists.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function has($key)
        {
            /** @var Repository $instance */
            return $instance->has($key);
        }
        /**
         * Determine if the given key exists within the hidden context data.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function hasHidden($key)
        {
            /** @var Repository $instance */
            return $instance->hasHidden($key);
        }
        /**
         * Retrieve all the context data.
         *
         * @return array<string, mixed>
         * @static
         */ public static function all()
        {
            /** @var Repository $instance */
            return $instance->all();
        }
        /**
         * Retrieve all the hidden context data.
         *
         * @return array<string, mixed>
         * @static
         */ public static function allHidden()
        {
            /** @var Repository $instance */
            return $instance->allHidden();
        }
        /**
         * Retrieve the given key's value.
         *
         * @param string $key
         * @static
         */ public static function get($key, $default = null)
        {
            /** @var Repository $instance */
            return $instance->get($key, $default);
        }
        /**
         * Retrieve the given key's hidden value.
         *
         * @param string $key
         * @static
         */ public static function getHidden($key, $default = null)
        {
            /** @var Repository $instance */
            return $instance->getHidden($key, $default);
        }
        /**
         * Retrieve the given key's value and then forget it.
         *
         * @param string $key
         * @static
         */ public static function pull($key, $default = null)
        {
            /** @var Repository $instance */
            return $instance->pull($key, $default);
        }
        /**
         * Retrieve the given key's hidden value and then forget it.
         *
         * @param string $key
         * @static
         */ public static function pullHidden($key, $default = null)
        {
            /** @var Repository $instance */
            return $instance->pullHidden($key, $default);
        }
        /**
         * Retrieve only the values of the given keys.
         *
         * @param  array<int, string>   $keys
         * @return array<string, mixed>
         * @static
         */ public static function only($keys)
        {
            /** @var Repository $instance */
            return $instance->only($keys);
        }
        /**
         * Retrieve only the hidden values of the given keys.
         *
         * @param  array<int, string>   $keys
         * @return array<string, mixed>
         * @static
         */ public static function onlyHidden($keys)
        {
            /** @var Repository $instance */
            return $instance->onlyHidden($keys);
        }
        /**
         * Add a context value.
         *
         * @param  array<string, mixed>|string        $key
         * @return Repository
         * @static
         */ public static function add($key, $value = null)
        {
            /** @var Repository $instance */
            return $instance->add($key, $value);
        }
        /**
         * Add a hidden context value.
         *
         * @param  array<string, mixed>|string        $key
         * @return Repository
         * @static
         */ public static function addHidden($key, $value = null)
        {
            /** @var Repository $instance */
            return $instance->addHidden($key, $value);
        }
        /**
         * Forget the given context key.
         *
         * @param  array<int, string>|string          $key
         * @return Repository
         * @static
         */ public static function forget($key)
        {
            /** @var Repository $instance */
            return $instance->forget($key);
        }
        /**
         * Forget the given hidden context key.
         *
         * @param  array<int, string>|string          $key
         * @return Repository
         * @static
         */ public static function forgetHidden($key)
        {
            /** @var Repository $instance */
            return $instance->forgetHidden($key);
        }
        /**
         * Add a context value if it does not exist yet.
         *
         * @param  string                             $key
         * @return Repository
         * @static
         */ public static function addIf($key, $value)
        {
            /** @var Repository $instance */
            return $instance->addIf($key, $value);
        }
        /**
         * Add a hidden context value if it does not exist yet.
         *
         * @param  string                             $key
         * @return Repository
         * @static
         */ public static function addHiddenIf($key, $value)
        {
            /** @var Repository $instance */
            return $instance->addHiddenIf($key, $value);
        }
        /**
         * Push the given values onto the key's stack.
         *
         * @param  string                             $key
         * @throws RuntimeException
         * @return Repository
         * @static
         */ public static function push($key, ...$values)
        {
            /** @var Repository $instance */
            return $instance->push($key, ...$values);
        }
        /**
         * Pop the latest value from the key's stack.
         *
         * @param  string            $key
         * @throws RuntimeException
         * @static
         */ public static function pop($key)
        {
            /** @var Repository $instance */
            return $instance->pop($key);
        }
        /**
         * Push the given hidden values onto the key's stack.
         *
         * @param  string                             $key
         * @throws RuntimeException
         * @return Repository
         * @static
         */ public static function pushHidden($key, ...$values)
        {
            /** @var Repository $instance */
            return $instance->pushHidden($key, ...$values);
        }
        /**
         * Pop the latest hidden value from the key's stack.
         *
         * @param  string            $key
         * @throws RuntimeException
         * @static
         */ public static function popHidden($key)
        {
            /** @var Repository $instance */
            return $instance->popHidden($key);
        }
        /**
         * Determine if the given value is in the given stack.
         *
         * @param  string            $key
         * @param  bool              $strict
         * @throws RuntimeException
         * @return bool
         * @static
         */ public static function stackContains($key, $value, $strict = false)
        {
            /** @var Repository $instance */
            return $instance->stackContains($key, $value, $strict);
        }
        /**
         * Determine if the given value is in the given hidden stack.
         *
         * @param  string            $key
         * @param  bool              $strict
         * @throws RuntimeException
         * @return bool
         * @static
         */ public static function hiddenStackContains($key, $value, $strict = false)
        {
            /** @var Repository $instance */
            return $instance->hiddenStackContains($key, $value, $strict);
        }
        /**
         * Determine if the repository is empty.
         *
         * @return bool
         * @static
         */ public static function isEmpty()
        {
            /** @var Repository $instance */
            return $instance->isEmpty();
        }
        /**
         * Execute the given callback when context is about to be dehydrated.
         *
         * @param  callable                           $callback
         * @return Repository
         * @static
         */ public static function dehydrating($callback)
        {
            /** @var Repository $instance */
            return $instance->dehydrating($callback);
        }
        /**
         * Execute the given callback when context has been hydrated.
         *
         * @param  callable                           $callback
         * @return Repository
         * @static
         */ public static function hydrated($callback)
        {
            /** @var Repository $instance */
            return $instance->hydrated($callback);
        }
        /**
         * Handle unserialize exceptions using the given callback.
         *
         * @param  callable|null $callback
         * @return static
         * @static
         */ public static function handleUnserializeExceptionsUsing($callback)
        {
            /** @var Repository $instance */
            return $instance->handleUnserializeExceptionsUsing($callback);
        }
        /**
         * Flush all context data.
         *
         * @return Repository
         * @static
         */ public static function flush()
        {
            /** @var Repository $instance */
            return $instance->flush();
        }
        /**
         * Dehydrate the context data.
         *
         * @internal
         * @return \Illuminate\Log\Context\?array
         * @static
         */ public static function dehydrate()
        {
            /** @var Repository $instance */
            return $instance->dehydrate();
        }
        /**
         * Hydrate the context instance.
         *
         * @internal
         * @param \Illuminate\Log\Context\?array $context
         * @throws RuntimeException
         * @return Repository
         * @static
         */ public static function hydrate($context)
        {
            /** @var Repository $instance */
            return $instance->hydrate($context);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param  (Closure($this): TWhenParameter)|\Illuminate\Log\Context\TWhenParameter|null $value
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                       $callback
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                       $default
         * @return $this|\Illuminate\Log\Context\TWhenReturnType
         * @static
         */ public static function when($value = null, $callback = null, $default = null)
        {
            /** @var Repository $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param  (Closure($this): TUnlessParameter)|\Illuminate\Log\Context\TUnlessParameter|null $value
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                       $callback
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                       $default
         * @return $this|\Illuminate\Log\Context\TUnlessReturnType
         * @static
         */ public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var Repository $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Repository::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Repository::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Repository::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Repository::flushMacros();
        }
        /**
         * Restore the model from the model identifier instance.
         *
         * @param  ModelIdentifier $value
         * @return Model
         * @static
         */ public static function restoreModel($value)
        {
            /** @var Repository $instance */
            return $instance->restoreModel($value);
        }
    }
    /**
     * @see \Illuminate\Cookie\CookieJar
     */ final class Cookie
    {
        /**
         * Create a new cookie instance.
         *
         * @param  string                                   $name
         * @param  string                                   $value
         * @param  int                                      $minutes
         * @param  string|null                              $path
         * @param  string|null                              $domain
         * @param  bool|null                                $secure
         * @param  bool                                     $httpOnly
         * @param  bool                                     $raw
         * @param  string|null                              $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */ public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->make($name, $value, $minutes, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        /**
         * Create a cookie that lasts "forever" (400 days).
         *
         * @param  string                                   $name
         * @param  string                                   $value
         * @param  string|null                              $path
         * @param  string|null                              $domain
         * @param  bool|null                                $secure
         * @param  bool                                     $httpOnly
         * @param  bool                                     $raw
         * @param  string|null                              $sameSite
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */ public static function forever($name, $value, $path = null, $domain = null, $secure = null, $httpOnly = true, $raw = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->forever($name, $value, $path, $domain, $secure, $httpOnly, $raw, $sameSite);
        }
        /**
         * Expire the given cookie.
         *
         * @param  string                                   $name
         * @param  string|null                              $path
         * @param  string|null                              $domain
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */ public static function forget($name, $path = null, $domain = null)
        {
            /** @var CookieJar $instance */
            return $instance->forget($name, $path, $domain);
        }
        /**
         * Determine if a cookie has been queued.
         *
         * @param  string      $key
         * @param  string|null $path
         * @return bool
         * @static
         */ public static function hasQueued($key, $path = null)
        {
            /** @var CookieJar $instance */
            return $instance->hasQueued($key, $path);
        }
        /**
         * Get a queued cookie instance.
         *
         * @param  string                                        $key
         * @param  string|null                                   $path
         * @return \Symfony\Component\HttpFoundation\Cookie|null
         * @static
         */ public static function queued($key, $default = null, $path = null)
        {
            /** @var CookieJar $instance */
            return $instance->queued($key, $default, $path);
        }
        /**
         * Queue a cookie to send with the next response.
         *
         * @static
         */ public static function queue(...$parameters): void
        {
            /** @var CookieJar $instance */
            $instance->queue(...$parameters);
        }
        /**
         * Queue a cookie to expire with the next response.
         *
         * @param string      $name
         * @param string|null $path
         * @param string|null $domain
         * @static
         */ public static function expire($name, $path = null, $domain = null): void
        {
            /** @var CookieJar $instance */
            $instance->expire($name, $path, $domain);
        }
        /**
         * Remove a cookie from the queue.
         *
         * @param string      $name
         * @param string|null $path
         * @static
         */ public static function unqueue($name, $path = null): void
        {
            /** @var CookieJar $instance */
            $instance->unqueue($name, $path);
        }
        /**
         * Set the default path and domain for the jar.
         *
         * @param  string                       $path
         * @param  string|null                  $domain
         * @param  bool|null                    $secure
         * @param  string|null                  $sameSite
         * @return CookieJar
         * @static
         */ public static function setDefaultPathAndDomain($path, $domain, $secure = false, $sameSite = null)
        {
            /** @var CookieJar $instance */
            return $instance->setDefaultPathAndDomain($path, $domain, $secure, $sameSite);
        }
        /**
         * Get the cookies which have been queued for the next request.
         *
         * @return \Symfony\Component\HttpFoundation\Cookie[]
         * @static
         */ public static function getQueuedCookies()
        {
            /** @var CookieJar $instance */
            return $instance->getQueuedCookies();
        }
        /**
         * Flush the cookies which have been queued for the next request.
         *
         * @return CookieJar
         * @static
         */ public static function flushQueuedCookies()
        {
            /** @var CookieJar $instance */
            return $instance->flushQueuedCookies();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            CookieJar::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            CookieJar::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return CookieJar::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            CookieJar::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Encryption\Encrypter
     */ final class Crypt
    {
        /**
         * Determine if the given key and cipher combination is valid.
         *
         * @param  string $key
         * @param  string $cipher
         * @return bool
         * @static
         */ public static function supported($key, $cipher)
        {
            return Encrypter::supported($key, $cipher);
        }
        /**
         * Create a new encryption key for the given cipher.
         *
         * @param  string $cipher
         * @return string
         * @static
         */ public static function generateKey($cipher)
        {
            return Encrypter::generateKey($cipher);
        }
        /**
         * Encrypt the given value.
         *
         * @param  bool                                              $serialize
         * @throws EncryptException
         * @return string
         * @static
         */ public static function encrypt($value, $serialize = true)
        {
            /** @var Encrypter $instance */
            return $instance->encrypt($value, $serialize);
        }
        /**
         * Encrypt a string without serialization.
         *
         * @param  string                                            $value
         * @throws EncryptException
         * @return string
         * @static
         */ public static function encryptString($value)
        {
            /** @var Encrypter $instance */
            return $instance->encryptString($value);
        }
        /**
         * Decrypt the given value.
         *
         * @param  string                                            $payload
         * @param  bool                                              $unserialize
         * @throws DecryptException
         * @static
         */ public static function decrypt($payload, $unserialize = true)
        {
            /** @var Encrypter $instance */
            return $instance->decrypt($payload, $unserialize);
        }
        /**
         * Decrypt the given string without unserialization.
         *
         * @param  string                                            $payload
         * @throws DecryptException
         * @return string
         * @static
         */ public static function decryptString($payload)
        {
            /** @var Encrypter $instance */
            return $instance->decryptString($payload);
        }
        /**
         * Get the encryption key that the encrypter is currently using.
         *
         * @return string
         * @static
         */ public static function getKey()
        {
            /** @var Encrypter $instance */
            return $instance->getKey();
        }
        /**
         * Get the current encryption key and all previous encryption keys.
         *
         * @return array
         * @static
         */ public static function getAllKeys()
        {
            /** @var Encrypter $instance */
            return $instance->getAllKeys();
        }
        /**
         * Get the previous encryption keys.
         *
         * @return array
         * @static
         */ public static function getPreviousKeys()
        {
            /** @var Encrypter $instance */
            return $instance->getPreviousKeys();
        }
        /**
         * Set the previous / legacy encryption keys that should be utilized if decryption fails.
         *
         * @param  array                            $keys
         * @return Encrypter
         * @static
         */ public static function previousKeys($keys)
        {
            /** @var Encrypter $instance */
            return $instance->previousKeys($keys);
        }
    }
    /**
     * @see https://carbon.nesbot.com/docs/
     * @see https://github.com/briannesbitt/Carbon/blob/master/src/Carbon/Factory.php
     * @method static Carbon                         create($year = 0, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0, $tz = null)
     * @method static Carbon                         createFromDate($year = null, $month = null, $day = null, $tz = null)
     * @method static Carbon|false                   createFromFormat($format, $time, $tz = null)
     * @method static Carbon                         createFromTime($hour = 0, $minute = 0, $second = 0, $tz = null)
     * @method static Carbon                         createFromTimeString($time, $tz = null)
     * @method static Carbon                         createFromTimestamp($timestamp, $tz = null)
     * @method static Carbon                         createFromTimestampMs($timestamp, $tz = null)
     * @method static Carbon                         createFromTimestampUTC($timestamp)
     * @method static Carbon                         createMidnightDate($year = null, $month = null, $day = null, $tz = null)
     * @method static Carbon|false                   createSafe($year = null, $month = null, $day = null, $hour = null, $minute = null, $second = null, $tz = null)
     * @method static void                                               disableHumanDiffOption($humanDiffOption)
     * @method static void                                               enableHumanDiffOption($humanDiffOption)
     * @method static mixed                                              executeWithLocale($locale, $func)
     * @method static Carbon                         fromSerialized($value)
     * @method static array                                              getAvailableLocales()
     * @method static array                                              getDays()
     * @method static int                                                getHumanDiffOptions()
     * @method static array                                              getIsoUnits()
     * @method static array                                              getLastErrors()
     * @method static string                                             getLocale()
     * @method static int                                                getMidDayAt()
     * @method static Carbon|null                    getTestNow()
     * @method static TranslatorInterface getTranslator()
     * @method static int                                                getWeekEndsAt()
     * @method static int                                                getWeekStartsAt()
     * @method static array                                              getWeekendDays()
     * @method static bool                                               hasFormat($date, $format)
     * @method static bool                                               hasMacro($name)
     * @method static bool                                               hasRelativeKeywords($time)
     * @method static bool                                               hasTestNow()
     * @method static Carbon                         instance($date)
     * @method static bool                                               isImmutable()
     * @method static bool                                               isModifiableUnit($unit)
     * @method static bool                                               isMutable()
     * @method static bool                                               isStrictModeEnabled()
     * @method static bool                                               localeHasDiffOneDayWords($locale)
     * @method static bool                                               localeHasDiffSyntax($locale)
     * @method static bool                                               localeHasDiffTwoDayWords($locale)
     * @method static bool                                               localeHasPeriodSyntax($locale)
     * @method static bool                                               localeHasShortUnits($locale)
     * @method static void                                               macro($name, $macro)
     * @method static Carbon|null                    make($var)
     * @method static Carbon                         maxValue()
     * @method static Carbon                         minValue()
     * @method static void                                               mixin($mixin)
     * @method static Carbon                         now($tz = null)
     * @method static Carbon                         parse($time = null, $tz = null)
     * @method static string                                             pluralUnit(string $unit)
     * @method static void                                               resetMonthsOverflow()
     * @method static void                                               resetToStringFormat()
     * @method static void                                               resetYearsOverflow()
     * @method static void                                               serializeUsing($callback)
     * @method static void                                               setHumanDiffOptions($humanDiffOptions)
     * @method static bool                                               setLocale($locale)
     * @method static void                                               setMidDayAt($hour)
     * @method static void                                               setTestNow($testNow = null)
     * @method static void                                               setToStringFormat($format)
     * @method static void                                               setTranslator(TranslatorInterface $translator)
     * @method static void                                               setUtf8($utf8)
     * @method static void                                               setWeekEndsAt($day)
     * @method static void                                               setWeekStartsAt($day)
     * @method static void                                               setWeekendDays($days)
     * @method static bool                                               shouldOverflowMonths()
     * @method static bool                                               shouldOverflowYears()
     * @method static string                                             singularUnit(string $unit)
     * @method static Carbon                         today($tz = null)
     * @method static Carbon                         tomorrow($tz = null)
     * @method static void                                               useMonthsOverflow($monthsOverflow = true)
     * @method static void                                               useStrictMode($strictModeEnabled = true)
     * @method static void                                               useYearsOverflow($yearsOverflow = true)
     * @method static Carbon                         yesterday($tz = null)
     * @see \Illuminate\Support\DateFactory
     */ final class Date
    {
        /**
         * Use the given handler when generating dates (class name, callable, or factory).
         *
         * @throws InvalidArgumentException
         * @static
         */ public static function use($handler)
        {
            return DateFactory::use($handler);
        }
        /**
         * Use the default date class when generating dates.
         *
         * @static
         */ public static function useDefault(): void
        {
            DateFactory::useDefault();
        }
        /**
         * Execute the given callable on each date creation.
         *
         * @param callable $callable
         * @static
         */ public static function useCallable($callable): void
        {
            DateFactory::useCallable($callable);
        }
        /**
         * Use the given date type (class) when generating dates.
         *
         * @param string $dateClass
         * @static
         */ public static function useClass($dateClass): void
        {
            DateFactory::useClass($dateClass);
        }
        /**
         * Use the given Carbon factory when generating dates.
         *
         * @param object $factory
         * @static
         */ public static function useFactory($factory): void
        {
            DateFactory::useFactory($factory);
        }
    }
    /**
     * @see \Illuminate\Database\DatabaseManager
     */ final class DB
    {
        /**
         * Get a database connection instance.
         *
         * @param  string|null                     $name
         * @return Connection
         * @static
         */ public static function connection($name = null)
        {
            /** @var DatabaseManager $instance */
            return $instance->connection($name);
        }
        /**
         * Build a database connection instance from the given configuration.
         *
         * @param  array                                   $config
         * @return PostgresConnection
         * @static
         */ public static function build($config)
        {
            /** @var DatabaseManager $instance */
            return $instance->build($config);
        }
        /**
         * Calculate the dynamic connection name for an on-demand connection based on its configuration.
         *
         * @param  array  $config
         * @return string
         * @static
         */ public static function calculateDynamicConnectionName($config)
        {
            return DatabaseManager::calculateDynamicConnectionName($config);
        }
        /**
         * Get a database connection instance from the given configuration.
         *
         * @param  string                                  $name
         * @param  array                                   $config
         * @param  bool                                    $force
         * @return PostgresConnection
         * @static
         */ public static function connectUsing($name, $config, $force = false)
        {
            /** @var DatabaseManager $instance */
            return $instance->connectUsing($name, $config, $force);
        }
        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {
            /** @var DatabaseManager $instance */
            $instance->purge($name);
        }
        /**
         * Disconnect from the given database.
         *
         * @param string|null $name
         * @static
         */ public static function disconnect($name = null): void
        {
            /** @var DatabaseManager $instance */
            $instance->disconnect($name);
        }
        /**
         * Reconnect to the given database.
         *
         * @param  string|null                     $name
         * @return Connection
         * @static
         */ public static function reconnect($name = null)
        {
            /** @var DatabaseManager $instance */
            return $instance->reconnect($name);
        }
        /**
         * Set the default database connection for the callback execution.
         *
         * @param string   $name
         * @param callable $callback
         * @static
         */ public static function usingConnection($name, $callback)
        {
            /** @var DatabaseManager $instance */
            return $instance->usingConnection($name, $callback);
        }
        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */ public static function getDefaultConnection()
        {
            /** @var DatabaseManager $instance */
            return $instance->getDefaultConnection();
        }
        /**
         * Set the default connection name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultConnection($name): void
        {
            /** @var DatabaseManager $instance */
            $instance->setDefaultConnection($name);
        }
        /**
         * Get all of the supported drivers.
         *
         * @return string[]
         * @static
         */ public static function supportedDrivers()
        {
            /** @var DatabaseManager $instance */
            return $instance->supportedDrivers();
        }
        /**
         * Get all of the drivers that are actually available.
         *
         * @return string[]
         * @static
         */ public static function availableDrivers()
        {
            /** @var DatabaseManager $instance */
            return $instance->availableDrivers();
        }
        /**
         * Register an extension connection resolver.
         *
         * @param string   $name
         * @param callable $resolver
         * @static
         */ public static function extend($name, $resolver): void
        {
            /** @var DatabaseManager $instance */
            $instance->extend($name, $resolver);
        }
        /**
         * Remove an extension connection resolver.
         *
         * @param string $name
         * @static
         */ public static function forgetExtension($name): void
        {
            /** @var DatabaseManager $instance */
            $instance->forgetExtension($name);
        }
        /**
         * Return all of the created connections.
         *
         * @return array<string, Connection>
         * @static
         */ public static function getConnections()
        {
            /** @var DatabaseManager $instance */
            return $instance->getConnections();
        }
        /**
         * Set the database reconnector callback.
         *
         * @param callable $reconnector
         * @static
         */ public static function setReconnector($reconnector): void
        {
            /** @var DatabaseManager $instance */
            $instance->setReconnector($reconnector);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return DatabaseManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var DatabaseManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            DatabaseManager::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            DatabaseManager::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return DatabaseManager::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            DatabaseManager::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var DatabaseManager $instance */
            return $instance->macroCall($method, $parameters);
        }
        /**
         * Get a human-readable name for the given connection driver.
         *
         * @return string
         * @static
         */ public static function getDriverTitle()
        {
            /** @var PostgresConnection $instance */
            return $instance->getDriverTitle();
        }
        /**
         * Get a schema builder instance for the connection.
         *
         * @return PostgresBuilder
         * @static
         */ public static function getSchemaBuilder()
        {
            /** @var PostgresConnection $instance */
            return $instance->getSchemaBuilder();
        }
        /**
         * Get the schema state for the connection.
         *
         * @param  Filesystem|null          $files
         * @param  callable|null                                   $processFactory
         * @return PostgresSchemaState
         * @static
         */ public static function getSchemaState($files = null, $processFactory = null)
        {
            /** @var PostgresConnection $instance */
            return $instance->getSchemaState($files, $processFactory);
        }
        /**
         * Set the query grammar to the default implementation.
         *
         * @static
         */ public static function useDefaultQueryGrammar(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->useDefaultQueryGrammar();
        }
        /**
         * Set the schema grammar to the default implementation.
         *
         * @static
         */ public static function useDefaultSchemaGrammar(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->useDefaultSchemaGrammar();
        }
        /**
         * Set the query post processor to the default implementation.
         *
         * @static
         */ public static function useDefaultPostProcessor(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->useDefaultPostProcessor();
        }
        /**
         * Begin a fluent query against a database table.
         *
         * @param  Closure|Expression|Builder|string $table
         * @param  string|null                                                                                        $as
         * @return Builder
         * @static
         */ public static function table($table, $as = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->table($table, $as);
        }
        /**
         * Get a new query builder instance.
         *
         * @return Builder
         * @static
         */ public static function query()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->query();
        }
        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array  $bindings
         * @param bool   $useReadPdo
         * @static
         */ public static function selectOne($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->selectOne($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement and return the first column of the first row.
         *
         * @param  string                                                $query
         * @param  array                                                 $bindings
         * @param  bool                                                  $useReadPdo
         * @throws MultipleColumnsSelectedException
         * @static
         */ public static function scalar($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->scalar($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement against the database.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return array
         * @static
         */ public static function selectFromWriteConnection($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->selectFromWriteConnection($query, $bindings);
        }
        /**
         * Run a select statement against the database.
         *
         * @param  string $query
         * @param  array  $bindings
         * @param  bool   $useReadPdo
         * @return array
         * @static
         */ public static function select($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->select($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement against the database and returns all of the result sets.
         *
         * @param  string $query
         * @param  array  $bindings
         * @param  bool   $useReadPdo
         * @return array
         * @static
         */ public static function selectResultSets($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->selectResultSets($query, $bindings, $useReadPdo);
        }
        /**
         * Run a select statement against the database and returns a generator.
         *
         * @param  string                     $query
         * @param  array                      $bindings
         * @param  bool                       $useReadPdo
         * @return Generator<int, stdClass>
         * @static
         */ public static function cursor($query, $bindings = [], $useReadPdo = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->cursor($query, $bindings, $useReadPdo);
        }
        /**
         * Run an insert statement against the database.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return bool
         * @static
         */ public static function insert($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->insert($query, $bindings);
        }
        /**
         * Run an update statement against the database.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return int
         * @static
         */ public static function update($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->update($query, $bindings);
        }
        /**
         * Run a delete statement against the database.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return int
         * @static
         */ public static function delete($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->delete($query, $bindings);
        }
        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return bool
         * @static
         */ public static function statement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->statement($query, $bindings);
        }
        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param  string $query
         * @param  array  $bindings
         * @return int
         * @static
         */ public static function affectingStatement($query, $bindings = [])
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->affectingStatement($query, $bindings);
        }
        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param  string $query
         * @return bool
         * @static
         */ public static function unprepared($query)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->unprepared($query);
        }
        /**
         * Get the number of open connections for the database.
         *
         * @return int|null
         * @static
         */ public static function threadCount()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->threadCount();
        }
        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param  Closure $callback
         * @return array
         * @static
         */ public static function pretend($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->pretend($callback);
        }
        /**
         * Execute the given callback without "pretending".
         *
         * @param Closure $callback
         * @static
         */ public static function withoutPretending($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->withoutPretending($callback);
        }
        /**
         * Bind values to their parameters in the given statement.
         *
         * @param PDOStatement $statement
         * @param array         $bindings
         * @static
         */ public static function bindValues($statement, $bindings): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->bindValues($statement, $bindings);
        }
        /**
         * Prepare the query bindings for execution.
         *
         * @param  array $bindings
         * @return array
         * @static
         */ public static function prepareBindings($bindings)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->prepareBindings($bindings);
        }
        /**
         * Log a query in the connection's query log.
         *
         * @param string     $query
         * @param array      $bindings
         * @param float|null $time
         * @static
         */ public static function logQuery($query, $bindings, $time = null): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->logQuery($query, $bindings, $time);
        }
        /**
         * Register a callback to be invoked when the connection queries for longer than a given amount of time.
         *
         * @param CarbonInterval|DateTimeInterface|float|int $threshold
         * @param callable                                            $handler
         * @static
         */ public static function whenQueryingForLongerThan($threshold, $handler): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->whenQueryingForLongerThan($threshold, $handler);
        }
        /**
         * Allow all the query duration handlers to run again, even if they have already run.
         *
         * @static
         */ public static function allowQueryDurationHandlersToRunAgain(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->allowQueryDurationHandlersToRunAgain();
        }
        /**
         * Get the duration of all run queries in milliseconds.
         *
         * @return float
         * @static
         */ public static function totalQueryDuration()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->totalQueryDuration();
        }
        /**
         * Reset the duration of all run queries.
         *
         * @static
         */ public static function resetTotalQueryDuration(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->resetTotalQueryDuration();
        }
        /**
         * Reconnect to the database if a PDO connection is missing.
         *
         * @static
         */ public static function reconnectIfMissingConnection(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->reconnectIfMissingConnection();
        }
        /**
         * Register a hook to be run just before a database transaction is started.
         *
         * @param  Closure                                $callback
         * @return PostgresConnection
         * @static
         */ public static function beforeStartingTransaction($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->beforeStartingTransaction($callback);
        }
        /**
         * Register a hook to be run just before a database query is executed.
         *
         * @param  Closure                                $callback
         * @return PostgresConnection
         * @static
         */ public static function beforeExecuting($callback)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->beforeExecuting($callback);
        }
        /**
         * Register a database query listener with the connection.
         *
         * @param Closure $callback
         * @static
         */ public static function listen($callback): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->listen($callback);
        }
        /**
         * Get a new raw query expression.
         *
         * @return Expression
         * @static
         */ public static function raw($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->raw($value);
        }
        /**
         * Escape a value for safe SQL embedding.
         *
         * @param  bool|float|int|string|null $value
         * @param  bool                       $binary
         * @return string
         * @static
         */ public static function escape($value, $binary = false)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->escape($value, $binary);
        }
        /**
         * Determine if the database connection has modified any database records.
         *
         * @return bool
         * @static
         */ public static function hasModifiedRecords()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->hasModifiedRecords();
        }
        /**
         * Indicate if any records have been modified.
         *
         * @param bool $value
         * @static
         */ public static function recordsHaveBeenModified($value = true): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->recordsHaveBeenModified($value);
        }
        /**
         * Set the record modification state.
         *
         * @param  bool                                    $value
         * @return PostgresConnection
         * @static
         */ public static function setRecordModificationState($value)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setRecordModificationState($value);
        }
        /**
         * Reset the record modification state.
         *
         * @static
         */ public static function forgetRecordModificationState(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->forgetRecordModificationState();
        }
        /**
         * Indicate that the connection should use the write PDO connection for reads.
         *
         * @param  bool                                    $value
         * @return PostgresConnection
         * @static
         */ public static function useWriteConnectionWhenReading($value = true)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->useWriteConnectionWhenReading($value);
        }
        /**
         * Get the current PDO connection.
         *
         * @return PDO
         * @static
         */ public static function getPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getPdo();
        }
        /**
         * Get the current PDO connection parameter without executing any reconnect logic.
         *
         * @return Closure|PDO|null
         * @static
         */ public static function getRawPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getRawPdo();
        }
        /**
         * Get the current PDO connection used for reading.
         *
         * @return PDO
         * @static
         */ public static function getReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getReadPdo();
        }
        /**
         * Get the current read PDO connection parameter without executing any reconnect logic.
         *
         * @return Closure|PDO|null
         * @static
         */ public static function getRawReadPdo()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getRawReadPdo();
        }
        /**
         * Set the PDO connection.
         *
         * @param  Closure|PDO|null                      $pdo
         * @return PostgresConnection
         * @static
         */ public static function setPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setPdo($pdo);
        }
        /**
         * Set the PDO connection used for reading.
         *
         * @param  Closure|PDO|null                      $pdo
         * @return PostgresConnection
         * @static
         */ public static function setReadPdo($pdo)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setReadPdo($pdo);
        }
        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */ public static function getName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getName();
        }
        /**
         * Get the database connection full name.
         *
         * @return string|null
         * @static
         */ public static function getNameWithReadWriteType()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getNameWithReadWriteType();
        }
        /**
         * Get an option from the configuration options.
         *
         * @param string|null $option
         * @static
         */ public static function getConfig($option = null)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getConfig($option);
        }
        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */ public static function getDriverName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getDriverName();
        }
        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */ public static function getQueryGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getQueryGrammar();
        }
        /**
         * Set the query grammar used by the connection.
         *
         * @param  \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return PostgresConnection
         * @static
         */ public static function setQueryGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setQueryGrammar($grammar);
        }
        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */ public static function getSchemaGrammar()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getSchemaGrammar();
        }
        /**
         * Set the schema grammar used by the connection.
         *
         * @param  \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return PostgresConnection
         * @static
         */ public static function setSchemaGrammar($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setSchemaGrammar($grammar);
        }
        /**
         * Get the query post processor used by the connection.
         *
         * @return Processor
         * @static
         */ public static function getPostProcessor()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getPostProcessor();
        }
        /**
         * Set the query post processor used by the connection.
         *
         * @param  Processor $processor
         * @return PostgresConnection
         * @static
         */ public static function setPostProcessor($processor)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setPostProcessor($processor);
        }
        /**
         * Get the event dispatcher used by the connection.
         *
         * @return Dispatcher
         * @static
         */ public static function getEventDispatcher()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getEventDispatcher();
        }
        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param  Dispatcher $events
         * @return PostgresConnection
         * @static
         */ public static function setEventDispatcher($events)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setEventDispatcher($events);
        }
        /**
         * Unset the event dispatcher for this connection.
         *
         * @static
         */ public static function unsetEventDispatcher(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->unsetEventDispatcher();
        }
        /**
         * Set the transaction manager instance on the connection.
         *
         * @param  DatabaseTransactionsManager $manager
         * @return PostgresConnection
         * @static
         */ public static function setTransactionManager($manager)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setTransactionManager($manager);
        }
        /**
         * Unset the transaction manager for this connection.
         *
         * @static
         */ public static function unsetTransactionManager(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->unsetTransactionManager();
        }
        /**
         * Determine if the connection is in a "dry run".
         *
         * @return bool
         * @static
         */ public static function pretending()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->pretending();
        }
        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */ public static function getQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getQueryLog();
        }
        /**
         * Get the connection query log with embedded bindings.
         *
         * @return array
         * @static
         */ public static function getRawQueryLog()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getRawQueryLog();
        }
        /**
         * Clear the query log.
         *
         * @static
         */ public static function flushQueryLog(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->flushQueryLog();
        }
        /**
         * Enable the query log on the connection.
         *
         * @static
         */ public static function enableQueryLog(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->enableQueryLog();
        }
        /**
         * Disable the query log on the connection.
         *
         * @static
         */ public static function disableQueryLog(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->disableQueryLog();
        }
        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */ public static function logging()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->logging();
        }
        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */ public static function getDatabaseName()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getDatabaseName();
        }
        /**
         * Set the name of the connected database.
         *
         * @param  string                                  $database
         * @return PostgresConnection
         * @static
         */ public static function setDatabaseName($database)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setDatabaseName($database);
        }
        /**
         * Set the read / write type of the connection.
         *
         * @param  string|null                             $readWriteType
         * @return PostgresConnection
         * @static
         */ public static function setReadWriteType($readWriteType)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setReadWriteType($readWriteType);
        }
        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */ public static function getTablePrefix()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getTablePrefix();
        }
        /**
         * Set the table prefix in use by the connection.
         *
         * @param  string                                  $prefix
         * @return PostgresConnection
         * @static
         */ public static function setTablePrefix($prefix)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->setTablePrefix($prefix);
        }
        /**
         * Set the table prefix and return the grammar.
         *
         * @template TGrammar of Grammar
         * @param  TGrammar $grammar
         * @return TGrammar
         * @static
         */ public static function withTablePrefix($grammar)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->withTablePrefix($grammar);
        }
        /**
         * Execute the given callback without table prefix.
         *
         * @param Closure $callback
         * @static
         */ public static function withoutTablePrefix($callback): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->withoutTablePrefix($callback);
        }
        /**
         * Get the server version for the connection.
         *
         * @return string
         * @static
         */ public static function getServerVersion()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->getServerVersion();
        }
        /**
         * Register a connection resolver.
         *
         * @param string   $driver
         * @param Closure $callback
         * @static
         */ public static function resolverFor($driver, $callback): void
        {            //Method inherited from \Illuminate\Database\Connection
            PostgresConnection::resolverFor($driver, $callback);
        }
        /**
         * Get the connection resolver for the given driver.
         *
         * @param  string        $driver
         * @return Closure|null
         * @static
         */ public static function getResolver($driver)
        {            //Method inherited from \Illuminate\Database\Connection
            return PostgresConnection::getResolver($driver);
        }
        /**
         * @template TReturn of mixed
         *
         * Execute a Closure within a transaction.
         * @param  (Closure(static): TReturn)  $callback
         * @param  int                          $attempts
         * @return \Illuminate\Database\TReturn
         * @static
         *@throws Throwable
         */ public static function transaction($callback, $attempts = 1)
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->transaction($callback, $attempts);
        }
        /**
         * Start a new database transaction.
         *
         * @throws Throwable
         * @static
         */ public static function beginTransaction(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->beginTransaction();
        }
        /**
         * Commit the active database transaction.
         *
         * @throws Throwable
         * @static
         */ public static function commit(): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->commit();
        }
        /**
         * Rollback the active database transaction.
         *
         * @param  int|null   $toLevel
         * @throws Throwable
         * @static
         */ public static function rollBack($toLevel = null): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->rollBack($toLevel);
        }
        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */ public static function transactionLevel()
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            return $instance->transactionLevel();
        }
        /**
         * Execute the callback after a transaction commits.
         *
         * @param  callable          $callback
         * @throws RuntimeException
         * @static
         */ public static function afterCommit($callback): void
        {            //Method inherited from \Illuminate\Database\Connection
            /** @var PostgresConnection $instance */
            $instance->afterCommit($callback);
        }
    }
    /**
     * @see \Illuminate\Events\Dispatcher
     * @see \Illuminate\Support\Testing\Fakes\EventFake
     */ final class Event
    {
        /**
         * Register an event listener with the dispatcher.
         *
         * @param array|callable|class-string|\Illuminate\Events\Queued\Closure|string $events
         * @param array|callable|class-string|\Illuminate\Events\Queued\Closure|null   $listener
         * @static
         */ public static function listen($events, $listener = null): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->listen($events, $listener);
        }
        /**
         * Determine if a given event has listeners.
         *
         * @param  string $eventName
         * @return bool
         * @static
         */ public static function hasListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasListeners($eventName);
        }
        /**
         * Determine if the given event has any wildcard listeners.
         *
         * @param  string $eventName
         * @return bool
         * @static
         */ public static function hasWildcardListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->hasWildcardListeners($eventName);
        }
        /**
         * Register an event and payload to be fired later.
         *
         * @param string       $event
         * @param array|object $payload
         * @static
         */ public static function push($event, $payload = []): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->push($event, $payload);
        }
        /**
         * Flush a set of pushed events.
         *
         * @param string $event
         * @static
         */ public static function flush($event): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->flush($event);
        }
        /**
         * Register an event subscriber with the dispatcher.
         *
         * @param object|string $subscriber
         * @static
         */ public static function subscribe($subscriber): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->subscribe($subscriber);
        }
        /**
         * Fire an event until the first non-null response is returned.
         *
         * @param object|string $event
         * @static
         */ public static function until($event, $payload = [])
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->until($event, $payload);
        }
        /**
         * Fire an event and call the listeners.
         *
         * @param  object|string $event
         * @param  bool          $halt
         * @return array|null
         * @static
         */ public static function dispatch($event, $payload = [], $halt = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->dispatch($event, $payload, $halt);
        }
        /**
         * Get all of the listeners for a given event name.
         *
         * @param  string $eventName
         * @return array
         * @static
         */ public static function getListeners($eventName)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getListeners($eventName);
        }
        /**
         * Register an event listener with the dispatcher.
         *
         * @param  array|Closure|string $listener
         * @param  bool                  $wildcard
         * @return Closure
         * @static
         */ public static function makeListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->makeListener($listener, $wildcard);
        }
        /**
         * Create a class based listener using the IoC container.
         *
         * @param  string   $listener
         * @param  bool     $wildcard
         * @return Closure
         * @static
         */ public static function createClassListener($listener, $wildcard = false)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->createClassListener($listener, $wildcard);
        }
        /**
         * Remove a set of listeners from the dispatcher.
         *
         * @param string $event
         * @static
         */ public static function forget($event): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forget($event);
        }
        /**
         * Forget all of the pushed listeners.
         *
         * @static
         */ public static function forgetPushed(): void
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            $instance->forgetPushed();
        }
        /**
         * Set the queue resolver implementation.
         *
         * @param  callable                      $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */ public static function setQueueResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setQueueResolver($resolver);
        }
        /**
         * Set the database transaction manager resolver implementation.
         *
         * @param  callable                      $resolver
         * @return \Illuminate\Events\Dispatcher
         * @static
         */ public static function setTransactionManagerResolver($resolver)
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->setTransactionManagerResolver($resolver);
        }
        /**
         * Gets the raw, unprepared listeners.
         *
         * @return array
         * @static
         */ public static function getRawListeners()
        {
            /** @var \Illuminate\Events\Dispatcher $instance */
            return $instance->getRawListeners();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Events\Dispatcher::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Events\Dispatcher::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Events\Dispatcher::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Events\Dispatcher::flushMacros();
        }
        /**
         * Specify the events that should be dispatched instead of faked.
         *
         * @param  array|string                                $eventsToDispatch
         * @return EventFake
         * @static
         */ public static function except($eventsToDispatch)
        {
            /** @var EventFake $instance */
            return $instance->except($eventsToDispatch);
        }
        /**
         * Assert if an event has a listener attached to it.
         *
         * @param string       $expectedEvent
         * @param array|string $expectedListener
         * @static
         */ public static function assertListening($expectedEvent, $expectedListener): void
        {
            /** @var EventFake $instance */
            $instance->assertListening($expectedEvent, $expectedListener);
        }
        /**
         * Assert if an event was dispatched based on a truth-test callback.
         *
         * @param Closure|string   $event
         * @param callable|int|null $callback
         * @static
         */ public static function assertDispatched($event, $callback = null): void
        {
            /** @var EventFake $instance */
            $instance->assertDispatched($event, $callback);
        }
        /**
         * Assert if an event was dispatched a number of times.
         *
         * @param string $event
         * @param int    $times
         * @static
         */ public static function assertDispatchedTimes($event, $times = 1): void
        {
            /** @var EventFake $instance */
            $instance->assertDispatchedTimes($event, $times);
        }
        /**
         * Determine if an event was dispatched based on a truth-test callback.
         *
         * @param Closure|string $event
         * @param callable|null   $callback
         * @static
         */ public static function assertNotDispatched($event, $callback = null): void
        {
            /** @var EventFake $instance */
            $instance->assertNotDispatched($event, $callback);
        }
        /**
         * Assert that no events were dispatched.
         *
         * @static
         */ public static function assertNothingDispatched(): void
        {
            /** @var EventFake $instance */
            $instance->assertNothingDispatched();
        }
        /**
         * Get all of the events matching a truth-test callback.
         *
         * @param  string                         $event
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function dispatched($event, $callback = null)
        {
            /** @var EventFake $instance */
            return $instance->dispatched($event, $callback);
        }
        /**
         * Determine if the given event has been dispatched.
         *
         * @param  string $event
         * @return bool
         * @static
         */ public static function hasDispatched($event)
        {
            /** @var EventFake $instance */
            return $instance->hasDispatched($event);
        }
        /**
         * Get the events that have been dispatched.
         *
         * @return array
         * @static
         */ public static function dispatchedEvents()
        {
            /** @var EventFake $instance */
            return $instance->dispatchedEvents();
        }
    }
    /**
     * @see \Illuminate\Filesystem\Filesystem
     */ final class File
    {
        /**
         * Determine if a file or directory exists.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function exists($path)
        {
            /** @var Filesystem $instance */
            return $instance->exists($path);
        }
        /**
         * Determine if a file or directory is missing.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function missing($path)
        {
            /** @var Filesystem $instance */
            return $instance->missing($path);
        }
        /**
         * Get the contents of a file.
         *
         * @param  string                                                 $path
         * @param  bool                                                   $lock
         * @throws FileNotFoundException
         * @return string
         * @static
         */ public static function get($path, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->get($path, $lock);
        }
        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param  string                                                 $path
         * @param  int                                                    $flags
         * @param  bool                                                   $lock
         * @throws FileNotFoundException
         * @return array
         * @static
         */ public static function json($path, $flags = 0, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->json($path, $flags, $lock);
        }
        /**
         * Get contents of a file with shared access.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function sharedGet($path)
        {
            /** @var Filesystem $instance */
            return $instance->sharedGet($path);
        }
        /**
         * Get the returned value of a file.
         *
         * @param  string                                                 $path
         * @param  array                                                  $data
         * @throws FileNotFoundException
         * @static
         */ public static function getRequire($path, $data = [])
        {
            /** @var Filesystem $instance */
            return $instance->getRequire($path, $data);
        }
        /**
         * Require the given file once.
         *
         * @param  string                                                 $path
         * @param  array                                                  $data
         * @throws FileNotFoundException
         * @static
         */ public static function requireOnce($path, $data = [])
        {
            /** @var Filesystem $instance */
            return $instance->requireOnce($path, $data);
        }
        /**
         * Get the contents of a file one line at a time.
         *
         * @param  string                                                 $path
         * @throws FileNotFoundException
         * @return LazyCollection
         * @static
         */ public static function lines($path)
        {
            /** @var Filesystem $instance */
            return $instance->lines($path);
        }
        /**
         * Get the hash of the file at the given path.
         *
         * @param  string       $path
         * @param  string       $algorithm
         * @return false|string
         * @static
         */ public static function hash($path, $algorithm = 'md5')
        {
            /** @var Filesystem $instance */
            return $instance->hash($path, $algorithm);
        }
        /**
         * Write the contents of a file.
         *
         * @param  string   $path
         * @param  string   $contents
         * @param  bool     $lock
         * @return bool|int
         * @static
         */ public static function put($path, $contents, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->put($path, $contents, $lock);
        }
        /**
         * Write the contents of a file, replacing it atomically if it already exists.
         *
         * @param string   $path
         * @param string   $content
         * @param int|null $mode
         * @static
         */ public static function replace($path, $content, $mode = null): void
        {
            /** @var Filesystem $instance */
            $instance->replace($path, $content, $mode);
        }
        /**
         * Replace a given string within a given file.
         *
         * @param array|string $search
         * @param array|string $replace
         * @param string       $path
         * @static
         */ public static function replaceInFile($search, $replace, $path): void
        {
            /** @var Filesystem $instance */
            $instance->replaceInFile($search, $replace, $path);
        }
        /**
         * Prepend to a file.
         *
         * @param  string $path
         * @param  string $data
         * @return int
         * @static
         */ public static function prepend($path, $data)
        {
            /** @var Filesystem $instance */
            return $instance->prepend($path, $data);
        }
        /**
         * Append to a file.
         *
         * @param  string $path
         * @param  string $data
         * @param  bool   $lock
         * @return int
         * @static
         */ public static function append($path, $data, $lock = false)
        {
            /** @var Filesystem $instance */
            return $instance->append($path, $data, $lock);
        }
        /**
         * Get or set UNIX mode of a file or directory.
         *
         * @param string   $path
         * @param int|null $mode
         * @static
         */ public static function chmod($path, $mode = null)
        {
            /** @var Filesystem $instance */
            return $instance->chmod($path, $mode);
        }
        /**
         * Delete the file at a given path.
         *
         * @param  array|string $paths
         * @return bool
         * @static
         */ public static function delete($paths)
        {
            /** @var Filesystem $instance */
            return $instance->delete($paths);
        }
        /**
         * Move a file to a new location.
         *
         * @param  string $path
         * @param  string $target
         * @return bool
         * @static
         */ public static function move($path, $target)
        {
            /** @var Filesystem $instance */
            return $instance->move($path, $target);
        }
        /**
         * Copy a file to a new location.
         *
         * @param  string $path
         * @param  string $target
         * @return bool
         * @static
         */ public static function copy($path, $target)
        {
            /** @var Filesystem $instance */
            return $instance->copy($path, $target);
        }
        /**
         * Create a symlink to the target file or directory. On Windows, a hard link is created if the target is a file.
         *
         * @param  string    $target
         * @param  string    $link
         * @return bool|null
         * @static
         */ public static function link($target, $link)
        {
            /** @var Filesystem $instance */
            return $instance->link($target, $link);
        }
        /**
         * Create a relative symlink to the target file or directory.
         *
         * @param  string            $target
         * @param  string            $link
         * @throws RuntimeException
         * @static
         */ public static function relativeLink($target, $link): void
        {
            /** @var Filesystem $instance */
            $instance->relativeLink($target, $link);
        }
        /**
         * Extract the file name from a file path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function name($path)
        {
            /** @var Filesystem $instance */
            return $instance->name($path);
        }
        /**
         * Extract the trailing name component from a file path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function basename($path)
        {
            /** @var Filesystem $instance */
            return $instance->basename($path);
        }
        /**
         * Extract the parent directory from a file path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function dirname($path)
        {
            /** @var Filesystem $instance */
            return $instance->dirname($path);
        }
        /**
         * Extract the file extension from a file path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function extension($path)
        {
            /** @var Filesystem $instance */
            return $instance->extension($path);
        }
        /**
         * Guess the file extension from the mime-type of a given file.
         *
         * @param  string            $path
         * @throws RuntimeException
         * @return string|null
         * @static
         */ public static function guessExtension($path)
        {
            /** @var Filesystem $instance */
            return $instance->guessExtension($path);
        }
        /**
         * Get the file type of a given file.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function type($path)
        {
            /** @var Filesystem $instance */
            return $instance->type($path);
        }
        /**
         * Get the mime-type of a given file.
         *
         * @param  string       $path
         * @return false|string
         * @static
         */ public static function mimeType($path)
        {
            /** @var Filesystem $instance */
            return $instance->mimeType($path);
        }
        /**
         * Get the file size of a given file.
         *
         * @param  string $path
         * @return int
         * @static
         */ public static function size($path)
        {
            /** @var Filesystem $instance */
            return $instance->size($path);
        }
        /**
         * Get the file's last modification time.
         *
         * @param  string $path
         * @return int
         * @static
         */ public static function lastModified($path)
        {
            /** @var Filesystem $instance */
            return $instance->lastModified($path);
        }
        /**
         * Determine if the given path is a directory.
         *
         * @param  string $directory
         * @return bool
         * @static
         */ public static function isDirectory($directory)
        {
            /** @var Filesystem $instance */
            return $instance->isDirectory($directory);
        }
        /**
         * Determine if the given path is a directory that does not contain any other files or directories.
         *
         * @param  string $directory
         * @param  bool   $ignoreDotFiles
         * @return bool
         * @static
         */ public static function isEmptyDirectory($directory, $ignoreDotFiles = false)
        {
            /** @var Filesystem $instance */
            return $instance->isEmptyDirectory($directory, $ignoreDotFiles);
        }
        /**
         * Determine if the given path is readable.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function isReadable($path)
        {
            /** @var Filesystem $instance */
            return $instance->isReadable($path);
        }
        /**
         * Determine if the given path is writable.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function isWritable($path)
        {
            /** @var Filesystem $instance */
            return $instance->isWritable($path);
        }
        /**
         * Determine if two files are the same by comparing their hashes.
         *
         * @param  string $firstFile
         * @param  string $secondFile
         * @return bool
         * @static
         */ public static function hasSameHash($firstFile, $secondFile)
        {
            /** @var Filesystem $instance */
            return $instance->hasSameHash($firstFile, $secondFile);
        }
        /**
         * Determine if the given path is a file.
         *
         * @param  string $file
         * @return bool
         * @static
         */ public static function isFile($file)
        {
            /** @var Filesystem $instance */
            return $instance->isFile($file);
        }
        /**
         * Find path names matching a given pattern.
         *
         * @param  string $pattern
         * @param  int    $flags
         * @return array
         * @static
         */ public static function glob($pattern, $flags = 0)
        {
            /** @var Filesystem $instance */
            return $instance->glob($pattern, $flags);
        }
        /**
         * Get an array of all files in a directory.
         *
         * @param  string                                  $directory
         * @param  bool                                    $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */ public static function files($directory, $hidden = false)
        {
            /** @var Filesystem $instance */
            return $instance->files($directory, $hidden);
        }
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param  string                                  $directory
         * @param  bool                                    $hidden
         * @return \Symfony\Component\Finder\SplFileInfo[]
         * @static
         */ public static function allFiles($directory, $hidden = false)
        {
            /** @var Filesystem $instance */
            return $instance->allFiles($directory, $hidden);
        }
        /**
         * Get all of the directories within a given directory.
         *
         * @param  string $directory
         * @return array
         * @static
         */ public static function directories($directory)
        {
            /** @var Filesystem $instance */
            return $instance->directories($directory);
        }
        /**
         * Ensure a directory exists.
         *
         * @param string $path
         * @param int    $mode
         * @param bool   $recursive
         * @static
         */ public static function ensureDirectoryExists($path, $mode = 493, $recursive = true): void
        {
            /** @var Filesystem $instance */
            $instance->ensureDirectoryExists($path, $mode, $recursive);
        }
        /**
         * Create a directory.
         *
         * @param  string $path
         * @param  int    $mode
         * @param  bool   $recursive
         * @param  bool   $force
         * @return bool
         * @static
         */ public static function makeDirectory($path, $mode = 493, $recursive = false, $force = false)
        {
            /** @var Filesystem $instance */
            return $instance->makeDirectory($path, $mode, $recursive, $force);
        }
        /**
         * Move a directory.
         *
         * @param  string $from
         * @param  string $to
         * @param  bool   $overwrite
         * @return bool
         * @static
         */ public static function moveDirectory($from, $to, $overwrite = false)
        {
            /** @var Filesystem $instance */
            return $instance->moveDirectory($from, $to, $overwrite);
        }
        /**
         * Copy a directory from one location to another.
         *
         * @param  string   $directory
         * @param  string   $destination
         * @param  int|null $options
         * @return bool
         * @static
         */ public static function copyDirectory($directory, $destination, $options = null)
        {
            /** @var Filesystem $instance */
            return $instance->copyDirectory($directory, $destination, $options);
        }
        /**
         * Recursively delete a directory.
         *
         * The directory itself may be optionally preserved.
         *
         * @param  string $directory
         * @param  bool   $preserve
         * @return bool
         * @static
         */ public static function deleteDirectory($directory, $preserve = false)
        {
            /** @var Filesystem $instance */
            return $instance->deleteDirectory($directory, $preserve);
        }
        /**
         * Remove all of the directories within a given directory.
         *
         * @param  string $directory
         * @return bool
         * @static
         */ public static function deleteDirectories($directory)
        {
            /** @var Filesystem $instance */
            return $instance->deleteDirectories($directory);
        }
        /**
         * Empty the specified directory of all files and folders.
         *
         * @param  string $directory
         * @return bool
         * @static
         */ public static function cleanDirectory($directory)
        {
            /** @var Filesystem $instance */
            return $instance->cleanDirectory($directory);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param  (Closure($this): TWhenParameter)|TWhenParameter|null $value
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                      $callback
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                      $default
         * @return $this|TWhenReturnType
         * @static
         */ public static function when($value = null, $callback = null, $default = null)
        {
            /** @var Filesystem $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param  (Closure($this): TUnlessParameter)|TUnlessParameter|null $value
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                      $callback
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                      $default
         * @return $this|TUnlessReturnType
         * @static
         */ public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var Filesystem $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Filesystem::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Filesystem::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Filesystem::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Filesystem::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Auth\Access\Gate
     */ final class Gate
    {
        /**
         * Determine if a given ability has been defined.
         *
         * @param  array|string $ability
         * @return bool
         * @static
         */ public static function has($ability)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->has($ability);
        }
        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is false.
         *
         * @param  bool|Closure|\Illuminate\Auth\Access\Response $condition
         * @param  string|null                                    $message
         * @param  string|null                                    $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         *@throws AuthorizationException
         */ public static function allowIf($condition, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allowIf($condition, $message, $code);
        }
        /**
         * Perform an on-demand authorization check. Throw an authorization exception if the condition or callback is true.
         *
         * @param  bool|Closure|\Illuminate\Auth\Access\Response $condition
         * @param  string|null                                    $message
         * @param  string|null                                    $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         *@throws AuthorizationException
         */ public static function denyIf($condition, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyIf($condition, $message, $code);
        }
        /**
         * Define a new ability.
         *
         * @param  BackedEnum|string           $ability
         * @param  array|callable|string        $callback
         * @throws InvalidArgumentException
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function define($ability, $callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->define($ability, $callback);
        }
        /**
         * Define abilities for a resource.
         *
         * @param  string                       $name
         * @param  string                       $class
         * @param  array|null                   $abilities
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function resource($name, $class, $abilities = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resource($name, $class, $abilities);
        }
        /**
         * Define a policy class for a given class type.
         *
         * @param  string                       $class
         * @param  string                       $policy
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function policy($class, $policy)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policy($class, $policy);
        }
        /**
         * Register a callback to run before all Gate checks.
         *
         * @param  callable                     $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function before($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->before($callback);
        }
        /**
         * Register a callback to run after all Gate checks.
         *
         * @param  callable                     $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function after($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->after($callback);
        }
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param  BackedEnum|iterable|string $ability
         * @param  array|mixed                                         $arguments
         * @return bool
         * @static
         */ public static function allows($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->allows($ability, $arguments);
        }
        /**
         * Determine if any of the given abilities should be denied for the current user.
         *
         * @param  BackedEnum|iterable|string $ability
         * @param  array|mixed                                         $arguments
         * @return bool
         * @static
         */ public static function denies($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denies($ability, $arguments);
        }
        /**
         * Determine if all of the given abilities should be granted for the current user.
         *
         * @param  BackedEnum|iterable|string $abilities
         * @param  array|mixed                                         $arguments
         * @return bool
         * @static
         */ public static function check($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->check($abilities, $arguments);
        }
        /**
         * Determine if any one of the given abilities should be granted for the current user.
         *
         * @param  BackedEnum|iterable|string $abilities
         * @param  array|mixed                                         $arguments
         * @return bool
         * @static
         */ public static function any($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->any($abilities, $arguments);
        }
        /**
         * Determine if all of the given abilities should be denied for the current user.
         *
         * @param  BackedEnum|iterable|string $abilities
         * @param  array|mixed                                         $arguments
         * @return bool
         * @static
         */ public static function none($abilities, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->none($abilities, $arguments);
        }
        /**
         * Determine if the given ability should be granted for the current user.
         *
         * @param  BackedEnum|string                             $ability
         * @param  array|mixed                                    $arguments
         * @throws AuthorizationException
         * @return \Illuminate\Auth\Access\Response
         * @static
         */ public static function authorize($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->authorize($ability, $arguments);
        }
        /**
         * Inspect the user for the given ability.
         *
         * @param  BackedEnum|string               $ability
         * @param  array|mixed                      $arguments
         * @return \Illuminate\Auth\Access\Response
         * @static
         */ public static function inspect($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->inspect($ability, $arguments);
        }
        /**
         * Get the raw result from the authorization callback.
         *
         * @param  string                                         $ability
         * @param  array|mixed                                    $arguments
         * @throws AuthorizationException
         * @static
         */ public static function raw($ability, $arguments = [])
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->raw($ability, $arguments);
        }
        /**
         * Get a policy instance for a given class.
         *
         * @param object|string $class
         * @static
         */ public static function getPolicyFor($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->getPolicyFor($class);
        }
        /**
         * Specify a callback to be used to guess policy names.
         *
         * @param  callable                     $callback
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function guessPolicyNamesUsing($callback)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->guessPolicyNamesUsing($callback);
        }
        /**
         * Build a policy class instance of the given type.
         *
         * @param  object|string                                              $class
         * @throws BindingResolutionException
         * @static
         */ public static function resolvePolicy($class)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->resolvePolicy($class);
        }
        /**
         * Get a gate instance for the given user.
         *
         * @param  Authenticatable|mixed $user
         * @return static
         * @static
         */ public static function forUser($user)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->forUser($user);
        }
        /**
         * Get all of the defined abilities.
         *
         * @return array
         * @static
         */ public static function abilities()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->abilities();
        }
        /**
         * Get all of the defined policies.
         *
         * @return array
         * @static
         */ public static function policies()
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->policies();
        }
        /**
         * Set the default denial response for gates and policies.
         *
         * @param  \Illuminate\Auth\Access\Response $response
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function defaultDenialResponse($response)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->defaultDenialResponse($response);
        }
        /**
         * Set the container instance used by the gate.
         *
         * @param  Container $container
         * @return \Illuminate\Auth\Access\Gate
         * @static
         */ public static function setContainer($container)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->setContainer($container);
        }
        /**
         * Deny with a HTTP status code.
         *
         * @param  int                              $status
         * @param  string|null                      $message
         * @param  int|null                         $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         */ public static function denyWithStatus($status, $message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyWithStatus($status, $message, $code);
        }
        /**
         * Deny with a 404 HTTP status code.
         *
         * @param  string|null                      $message
         * @param  int|null                         $code
         * @return \Illuminate\Auth\Access\Response
         * @static
         */ public static function denyAsNotFound($message = null, $code = null)
        {
            /** @var \Illuminate\Auth\Access\Gate $instance */
            return $instance->denyAsNotFound($message, $code);
        }
    }
    /**
     * @see \Illuminate\Hashing\HashManager
     * @see \Illuminate\Hashing\AbstractHasher
     */ final class Hash
    {
        /**
         * Create an instance of the Bcrypt hash Driver.
         *
         * @return BcryptHasher
         * @static
         */ public static function createBcryptDriver()
        {
            /** @var HashManager $instance */
            return $instance->createBcryptDriver();
        }
        /**
         * Create an instance of the Argon2i hash Driver.
         *
         * @return ArgonHasher
         * @static
         */ public static function createArgonDriver()
        {
            /** @var HashManager $instance */
            return $instance->createArgonDriver();
        }
        /**
         * Create an instance of the Argon2id hash Driver.
         *
         * @return Argon2IdHasher
         * @static
         */ public static function createArgon2idDriver()
        {
            /** @var HashManager $instance */
            return $instance->createArgon2idDriver();
        }
        /**
         * Get information about the given hashed value.
         *
         * @param  string $hashedValue
         * @return array
         * @static
         */ public static function info($hashedValue)
        {
            /** @var HashManager $instance */
            return $instance->info($hashedValue);
        }
        /**
         * Hash the given value.
         *
         * @param  string $value
         * @param  array  $options
         * @return string
         * @static
         */ public static function make($value, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->make($value, $options);
        }
        /**
         * Check the given plain value against a hash.
         *
         * @param  string $value
         * @param  string $hashedValue
         * @param  array  $options
         * @return bool
         * @static
         */ public static function check($value, $hashedValue, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->check($value, $hashedValue, $options);
        }
        /**
         * Check if the given hash has been hashed using the given options.
         *
         * @param  string $hashedValue
         * @param  array  $options
         * @return bool
         * @static
         */ public static function needsRehash($hashedValue, $options = [])
        {
            /** @var HashManager $instance */
            return $instance->needsRehash($hashedValue, $options);
        }
        /**
         * Determine if a given string is already hashed.
         *
         * @param  string $value
         * @return bool
         * @static
         */ public static function isHashed($value)
        {
            /** @var HashManager $instance */
            return $instance->isHashed($value);
        }
        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var HashManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Verifies that the configuration is less than or equal to what is configured.
         *
         * @param  array $value
         * @return bool
         * @internal
         * @static
         */ public static function verifyConfiguration($value)
        {
            /** @var HashManager $instance */
            return $instance->verifyConfiguration($value);
        }
        /**
         * Get a driver instance.
         *
         * @param  string|null               $driver
         * @throws InvalidArgumentException
         * @static
         */ public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                          $driver
         * @param  Closure                        $callback
         * @return HashManager
         * @static
         */ public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */ public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->getDrivers();
        }
        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */ public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->getContainer();
        }
        /**
         * Set the container instance used by the manager.
         *
         * @param  Container $container
         * @return HashManager
         * @static
         */ public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->setContainer($container);
        }
        /**
         * Forget all of the resolved driver instances.
         *
         * @return HashManager
         * @static
         */ public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var HashManager $instance */
            return $instance->forgetDrivers();
        }
    }
    /**
     * @method static PendingRequest       baseUrl(string $url)
     * @method static PendingRequest       withBody(StreamInterface|string $content, string $contentType = 'application/json')
     * @method static PendingRequest       asJson()
     * @method static PendingRequest       asForm()
     * @method static PendingRequest       attach(string|array $name, string|resource $contents = '', string|null $filename = null, array $headers = [])
     * @method static PendingRequest       asMultipart()
     * @method static PendingRequest       bodyFormat(string $format)
     * @method static PendingRequest       withQueryParameters(array $parameters)
     * @method static PendingRequest       contentType(string $contentType)
     * @method static PendingRequest       acceptJson()
     * @method static PendingRequest       accept(string $contentType)
     * @method static PendingRequest       withHeaders(array $headers)
     * @method static PendingRequest       withHeader(string $name, mixed $value)
     * @method static PendingRequest       replaceHeaders(array $headers)
     * @method static PendingRequest       withBasicAuth(string $username, string $password)
     * @method static PendingRequest       withDigestAuth(string $username, string $password)
     * @method static PendingRequest       withToken(string $token, string $type = 'Bearer')
     * @method static PendingRequest       withUserAgent(string|bool $userAgent)
     * @method static PendingRequest       withUrlParameters(array $parameters = [])
     * @method static PendingRequest       withCookies(array $cookies, string $domain)
     * @method static PendingRequest       maxRedirects(int $max)
     * @method static PendingRequest       withoutRedirecting()
     * @method static PendingRequest       withoutVerifying()
     * @method static PendingRequest       sink(string|resource $to)
     * @method static PendingRequest       timeout(int|float $seconds)
     * @method static PendingRequest       connectTimeout(int|float $seconds)
     * @method static PendingRequest       retry(array|int $times, Closure|int $sleepMilliseconds = 0, callable|null $when = null, bool $throw = true)
     * @method static PendingRequest       withOptions(array $options)
     * @method static PendingRequest       withMiddleware(callable $middleware)
     * @method static PendingRequest       withRequestMiddleware(callable $middleware)
     * @method static PendingRequest       withResponseMiddleware(callable $middleware)
     * @method static PendingRequest       beforeSending(callable $callback)
     * @method static PendingRequest       throw(callable|null $callback = null)
     * @method static PendingRequest       throwIf(callable|bool $condition)
     * @method static PendingRequest       throwUnless(callable|bool $condition)
     * @method static PendingRequest       dump()
     * @method static PendingRequest       dd()
     * @method static \Illuminate\Http\Client\Response             get(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response             head(string $url, array|string|null $query = null)
     * @method static \Illuminate\Http\Client\Response             post(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response             patch(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response             put(string $url, array $data = [])
     * @method static \Illuminate\Http\Client\Response             delete(string $url, array $data = [])
     * @method static array                                        pool(callable $callback)
     * @method static \Illuminate\Http\Client\Response             send(string $method, string $url, array $options = [])
     * @method static Client                           buildClient()
     * @method static Client                           createClient(HandlerStack $handlerStack)
     * @method static HandlerStack                     buildHandlerStack()
     * @method static HandlerStack                     pushHandlers(HandlerStack $handlerStack)
     * @method static Closure                                     buildBeforeSendingHandler()
     * @method static Closure                                     buildRecorderHandler()
     * @method static Closure                                     buildStubHandler()
     * @method static RequestInterface            runBeforeSendingCallbacks(RequestInterface $request, array $options)
     * @method static array                                        mergeOptions(array ...$options)
     * @method static PendingRequest       stub(callable $callback)
     * @method static PendingRequest       async(bool $async = true)
     * @method static PromiseInterface|null    getPromise()
     * @method static PendingRequest       setClient(Client $client)
     * @method static PendingRequest       setHandler(callable $handler)
     * @method static array                                        getOptions()
     * @method static PendingRequest|mixed when(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @method static PendingRequest|mixed unless(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Http\Client\Factory
     */ final class Http
    {
        /**
         * Add middleware to apply to every request.
         *
         * @param  callable                        $middleware
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function globalMiddleware($middleware)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->globalMiddleware($middleware);
        }
        /**
         * Add request middleware to apply to every request.
         *
         * @param  callable                        $middleware
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function globalRequestMiddleware($middleware)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->globalRequestMiddleware($middleware);
        }
        /**
         * Add response middleware to apply to every request.
         *
         * @param  callable                        $middleware
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function globalResponseMiddleware($middleware)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->globalResponseMiddleware($middleware);
        }
        /**
         * Set the options to apply to every request.
         *
         * @param  array|Closure                  $options
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function globalOptions($options)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->globalOptions($options);
        }
        /**
         * Create a new response instance for use during stubbing.
         *
         * @param  array|string|null                    $body
         * @param  int                                  $status
         * @param  array                                $headers
         * @return PromiseInterface
         * @static
         */ public static function response($body = null, $status = 200, $headers = [])
        {
            return \Illuminate\Http\Client\Factory::response($body, $status, $headers);
        }
        /**
         * Create a new connection exception for use during stubbing.
         *
         * @param  string|null                          $message
         * @return PromiseInterface
         * @static
         */ public static function failedConnection($message = null)
        {
            return \Illuminate\Http\Client\Factory::failedConnection($message);
        }
        /**
         * Get an invokable object that returns a sequence of responses in order for use during stubbing.
         *
         * @param  array                                    $responses
         * @return ResponseSequence
         * @static
         */ public static function sequence($responses = [])
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->sequence($responses);
        }
        /**
         * Register a stub callable that will intercept requests and be able to return stub responses.
         *
         * @param  array|callable|null             $callback
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function fake($callback = null)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fake($callback);
        }
        /**
         * Register a response sequence for the given URL pattern.
         *
         * @param  string                                   $url
         * @return ResponseSequence
         * @static
         */ public static function fakeSequence($url = '*')
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->fakeSequence($url);
        }
        /**
         * Stub the given URL using the given callback.
         *
         * @param  string                                                                                          $url
         * @param  array|callable|PromiseInterface|\Illuminate\Http\Client\Response|int|string $callback
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function stubUrl($url, $callback)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->stubUrl($url, $callback);
        }
        /**
         * Indicate that an exception should be thrown if any request is not faked.
         *
         * @param  bool                            $prevent
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function preventStrayRequests($prevent = true)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->preventStrayRequests($prevent);
        }
        /**
         * Determine if stray requests are being prevented.
         *
         * @return bool
         * @static
         */ public static function preventingStrayRequests()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->preventingStrayRequests();
        }
        /**
         * Indicate that an exception should not be thrown if any request is not faked.
         *
         * @return \Illuminate\Http\Client\Factory
         * @static
         */ public static function allowStrayRequests()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->allowStrayRequests();
        }
        /**
         * Record a request response pair.
         *
         * @param \Illuminate\Http\Client\Request       $request
         * @param \Illuminate\Http\Client\Response|null $response
         * @static
         */ public static function recordRequestResponsePair($request, $response): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->recordRequestResponsePair($request, $response);
        }
        /**
         * Assert that a request / response pair was recorded matching a given truth test.
         *
         * @param callable $callback
         * @static
         */ public static function assertSent($callback): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSent($callback);
        }
        /**
         * Assert that the given request was sent in the given order.
         *
         * @param array $callbacks
         * @static
         */ public static function assertSentInOrder($callbacks): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentInOrder($callbacks);
        }
        /**
         * Assert that a request / response pair was not recorded matching a given truth test.
         *
         * @param callable $callback
         * @static
         */ public static function assertNotSent($callback): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNotSent($callback);
        }
        /**
         * Assert that no request / response pair was recorded.
         *
         * @static
         */ public static function assertNothingSent(): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertNothingSent();
        }
        /**
         * Assert how many requests have been recorded.
         *
         * @param int $count
         * @static
         */ public static function assertSentCount($count): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSentCount($count);
        }
        /**
         * Assert that every created response sequence is empty.
         *
         * @static
         */ public static function assertSequencesAreEmpty(): void
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            $instance->assertSequencesAreEmpty();
        }
        /**
         * Get a collection of the request / response pairs matching the given truth test.
         *
         * @param  callable                       $callback
         * @return Collection
         * @static
         */ public static function recorded($callback = null)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->recorded($callback);
        }
        /**
         * Create a new pending request instance for this factory.
         *
         * @return PendingRequest
         * @static
         */ public static function createPendingRequest()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->createPendingRequest();
        }
        /**
         * Get the current event dispatcher implementation.
         *
         * @return Dispatcher|null
         * @static
         */ public static function getDispatcher()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->getDispatcher();
        }
        /**
         * Get the array of global middleware.
         *
         * @return array
         * @static
         */ public static function getGlobalMiddleware()
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->getGlobalMiddleware();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Http\Client\Factory::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Http\Client\Factory::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Http\Client\Factory::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Http\Client\Factory::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Http\Client\Factory $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    /**
     * @see \Illuminate\Translation\Translator
     */ final class Lang
    {
        /**
         * Determine if a translation exists for a given locale.
         *
         * @param  string      $key
         * @param  string|null $locale
         * @return bool
         * @static
         */ public static function hasForLocale($key, $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->hasForLocale($key, $locale);
        }
        /**
         * Determine if a translation exists.
         *
         * @param  string      $key
         * @param  string|null $locale
         * @param  bool        $fallback
         * @return bool
         * @static
         */ public static function has($key, $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->has($key, $locale, $fallback);
        }
        /**
         * Get the translation for the given key.
         *
         * @param  string       $key
         * @param  array        $replace
         * @param  string|null  $locale
         * @param  bool         $fallback
         * @return array|string
         * @static
         */ public static function get($key, $replace = [], $locale = null, $fallback = true)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->get($key, $replace, $locale, $fallback);
        }
        /**
         * Get a translation according to an integer value.
         *
         * @param  string                     $key
         * @param  array|Countable|float|int $number
         * @param  array                      $replace
         * @param  string|null                $locale
         * @return string
         * @static
         */ public static function choice($key, $number, $replace = [], $locale = null)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->choice($key, $number, $replace, $locale);
        }
        /**
         * Add translation lines to the given locale.
         *
         * @param array  $lines
         * @param string $locale
         * @param string $namespace
         * @static
         */ public static function addLines($lines, $locale, $namespace = '*'): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addLines($lines, $locale, $namespace);
        }
        /**
         * Load the specified language group.
         *
         * @param string $namespace
         * @param string $group
         * @param string $locale
         * @static
         */ public static function load($namespace, $group, $locale): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->load($namespace, $group, $locale);
        }
        /**
         * Register a callback that is responsible for handling missing translation keys.
         *
         * @param  callable|null $callback
         * @return static
         * @static
         */ public static function handleMissingKeysUsing($callback)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->handleMissingKeysUsing($callback);
        }
        /**
         * Add a new namespace to the loader.
         *
         * @param string $namespace
         * @param string $hint
         * @static
         */ public static function addNamespace($namespace, $hint): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addNamespace($namespace, $hint);
        }
        /**
         * Add a new JSON path to the loader.
         *
         * @param string $path
         * @static
         */ public static function addJsonPath($path): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->addJsonPath($path);
        }
        /**
         * Parse a key into namespace, group, and item.
         *
         * @param  string $key
         * @return array
         * @static
         */ public static function parseKey($key)
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->parseKey($key);
        }
        /**
         * Specify a callback that should be invoked to determined the applicable locale array.
         *
         * @param callable $callback
         * @static
         */ public static function determineLocalesUsing($callback): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->determineLocalesUsing($callback);
        }
        /**
         * Get the message selector instance.
         *
         * @return MessageSelector
         * @static
         */ public static function getSelector()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getSelector();
        }
        /**
         * Set the message selector instance.
         *
         * @param MessageSelector $selector
         * @static
         */ public static function setSelector($selector): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setSelector($selector);
        }
        /**
         * Get the language line loader implementation.
         *
         * @return Loader
         * @static
         */ public static function getLoader()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLoader();
        }
        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */ public static function locale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->locale();
        }
        /**
         * Get the default locale being used.
         *
         * @return string
         * @static
         */ public static function getLocale()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getLocale();
        }
        /**
         * Set the default locale.
         *
         * @param  string                    $locale
         * @throws InvalidArgumentException
         * @static
         */ public static function setLocale($locale): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLocale($locale);
        }
        /**
         * Get the fallback locale being used.
         *
         * @return string
         * @static
         */ public static function getFallback()
        {
            /** @var \Illuminate\Translation\Translator $instance */
            return $instance->getFallback();
        }
        /**
         * Set the fallback locale being used.
         *
         * @param string $fallback
         * @static
         */ public static function setFallback($fallback): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setFallback($fallback);
        }
        /**
         * Set the loaded translation groups.
         *
         * @param array $loaded
         * @static
         */ public static function setLoaded($loaded): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setLoaded($loaded);
        }
        /**
         * Add a handler to be executed in order to format a given class to a string during translation replacements.
         *
         * @param callable|string $class
         * @param callable|null   $handler
         * @static
         */ public static function stringable($class, $handler = null): void
        {
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->stringable($class, $handler);
        }
        /**
         * Set the parsed value of a key.
         *
         * @param string $key
         * @param array  $parsed
         * @static
         */ public static function setParsedKey($key, $parsed): void
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->setParsedKey($key, $parsed);
        }
        /**
         * Flush the cache of parsed keys.
         *
         * @static
         */ public static function flushParsedKeys(): void
        {            //Method inherited from \Illuminate\Support\NamespacedItemResolver
            /** @var \Illuminate\Translation\Translator $instance */
            $instance->flushParsedKeys();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Translation\Translator::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Translation\Translator::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Translation\Translator::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Translation\Translator::flushMacros();
        }
    }
    /**
     * @method static void                                    write(string $level, Arrayable|Jsonable|Stringable|array|string $message, array $context = [])
     * @method static Logger                  withContext(array $context = [])
     * @method static void                                    listen(Closure $callback)
     * @method static LoggerInterface                getLogger()
     * @method static Dispatcher getEventDispatcher()
     * @method static void                                    setEventDispatcher(Dispatcher $dispatcher)
     * @method static Logger|mixed            when(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @method static Logger|mixed            unless(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Log\LogManager
     */ final class Log
    {
        /**
         * Build an on-demand log channel.
         *
         * @param  array                    $config
         * @return LoggerInterface
         * @static
         */ public static function build($config)
        {
            /** @var LogManager $instance */
            return $instance->build($config);
        }
        /**
         * Create a new, on-demand aggregate logger instance.
         *
         * @param  array                    $channels
         * @param  string|null              $channel
         * @return LoggerInterface
         * @static
         */ public static function stack($channels, $channel = null)
        {
            /** @var LogManager $instance */
            return $instance->stack($channels, $channel);
        }
        /**
         * Get a log channel instance.
         *
         * @param  string|null              $channel
         * @return LoggerInterface
         * @static
         */ public static function channel($channel = null)
        {
            /** @var LogManager $instance */
            return $instance->channel($channel);
        }
        /**
         * Get a log driver instance.
         *
         * @param  string|null              $driver
         * @return LoggerInterface
         * @static
         */ public static function driver($driver = null)
        {
            /** @var LogManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Share context across channels and stacks.
         *
         * @param  array                      $context
         * @return LogManager
         * @static
         */ public static function shareContext($context)
        {
            /** @var LogManager $instance */
            return $instance->shareContext($context);
        }
        /**
         * The context shared across channels and stacks.
         *
         * @return array
         * @static
         */ public static function sharedContext()
        {
            /** @var LogManager $instance */
            return $instance->sharedContext();
        }
        /**
         * Flush the log context on all currently resolved channels.
         *
         * @return LogManager
         * @static
         */ public static function withoutContext()
        {
            /** @var LogManager $instance */
            return $instance->withoutContext();
        }
        /**
         * Flush the shared context.
         *
         * @return LogManager
         * @static
         */ public static function flushSharedContext()
        {
            /** @var LogManager $instance */
            return $instance->flushSharedContext();
        }
        /**
         * Get the default log driver name.
         *
         * @return string|null
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var LogManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default log driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var LogManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                     $driver
         * @param  Closure                   $callback
         * @return LogManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var LogManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Unset the given channel instance.
         *
         * @param string|null $driver
         * @static
         */ public static function forgetChannel($driver = null): void
        {
            /** @var LogManager $instance */
            $instance->forgetChannel($driver);
        }
        /**
         * Get all of the resolved log channels.
         *
         * @return array
         * @static
         */ public static function getChannels()
        {
            /** @var LogManager $instance */
            return $instance->getChannels();
        }
        /**
         * System is unusable.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function emergency($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->emergency($message, $context);
        }
        /**
         * Commands must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function alert($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->alert($message, $context);
        }
        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function critical($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->critical($message, $context);
        }
        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function error($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->error($message, $context);
        }
        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function warning($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->warning($message, $context);
        }
        /**
         * Normal but significant events.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function notice($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->notice($message, $context);
        }
        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function info($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->info($message, $context);
        }
        /**
         * Detailed debug information.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function debug($message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->debug($message, $context);
        }
        /**
         * Logs with an arbitrary level.
         *
         * @param string|\Stringable $message
         * @param array              $context
         * @static
         */ public static function log($level, $message, $context = []): void
        {
            /** @var LogManager $instance */
            $instance->log($level, $message, $context);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return LogManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var LogManager $instance */
            return $instance->setApplication($app);
        }
    }
    /**
     * @method static void                                                   alwaysFrom(string $address, string|null $name = null)
     * @method static void                                                   alwaysReplyTo(string $address, string|null $name = null)
     * @method static void                                                   alwaysReturnPath(string $address)
     * @method static void                                                   alwaysTo(string $address, string|null $name = null)
     * @method static SentMessage|null                      html(string $html, mixed $callback)
     * @method static SentMessage|null                      plain(string $view, array $data, mixed $callback)
     * @method static string                                                 render(string|array $view, array $data = [])
     * @method static mixed                                                  onQueue(BackedEnum|string|null $queue, Mailable $view)
     * @method static mixed                                                  queueOn(string $queue, Mailable $view)
     * @method static mixed                                                  laterOn(string $queue, DateTimeInterface|DateInterval|int $delay, Mailable $view)
     * @method static TransportInterface getSymfonyTransport()
     * @method static \Illuminate\Contracts\View\Factory                     getViewFactory()
     * @method static void                                                   setSymfonyTransport(TransportInterface $transport)
     * @method static Mailer                                setQueue(\Illuminate\Contracts\Queue\Factory $queue)
     * @method static void                                                   macro(string $name, object|callable $macro)
     * @method static void                                                   mixin(object $mixin, bool $replace = true)
     * @method static bool                                                   hasMacro(string $name)
     * @method static void                                                   flushMacros()
     * @see \Illuminate\Mail\MailManager
     * @see \Illuminate\Support\Testing\Fakes\MailFake
     */ final class Mail
    {
        /**
         * Get a mailer instance by name.
         *
         * @param  string|null                       $name
         * @return \Illuminate\Contracts\Mail\Mailer
         * @static
         */ public static function mailer($name = null)
        {
            /** @var MailManager $instance */
            return $instance->mailer($name);
        }
        /**
         * Get a mailer driver instance.
         *
         * @param  string|null             $driver
         * @return Mailer
         * @static
         */ public static function driver($driver = null)
        {
            /** @var MailManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Build a new mailer instance.
         *
         * @param  array                   $config
         * @return Mailer
         * @static
         */ public static function build($config)
        {
            /** @var MailManager $instance */
            return $instance->build($config);
        }
        /**
         * Create a new transport instance.
         *
         * @param  array                                                  $config
         * @throws InvalidArgumentException
         * @return TransportInterface
         * @static
         */ public static function createSymfonyTransport($config)
        {
            /** @var MailManager $instance */
            return $instance->createSymfonyTransport($config);
        }
        /**
         * Get the default mail driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var MailManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default mail driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var MailManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Disconnect the given mailer and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {
            /** @var MailManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom transport creator Closure.
         *
         * @param  string                       $driver
         * @param  Closure                     $callback
         * @return MailManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var MailManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */ public static function getApplication()
        {
            /** @var MailManager $instance */
            return $instance->getApplication();
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return MailManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var MailManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Forget all of the resolved mailer instances.
         *
         * @return MailManager
         * @static
         */ public static function forgetMailers()
        {
            /** @var MailManager $instance */
            return $instance->forgetMailers();
        }
        /**
         * Assert if a mailable was sent based on a truth-test callback.
         *
         * @param Closure|string                $mailable
         * @param array|callable|int|string|null $callback
         * @static
         */ public static function assertSent($mailable, $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->assertSent($mailable, $callback);
        }
        /**
         * Determine if a mailable was not sent or queued to be sent based on a truth-test callback.
         *
         * @param Closure|string $mailable
         * @param callable|null   $callback
         * @static
         */ public static function assertNotOutgoing($mailable, $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->assertNotOutgoing($mailable, $callback);
        }
        /**
         * Determine if a mailable was not sent based on a truth-test callback.
         *
         * @param Closure|string            $mailable
         * @param array|callable|string|null $callback
         * @static
         */ public static function assertNotSent($mailable, $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->assertNotSent($mailable, $callback);
        }
        /**
         * Assert that no mailables were sent or queued to be sent.
         *
         * @static
         */ public static function assertNothingOutgoing(): void
        {
            /** @var MailFake $instance */
            $instance->assertNothingOutgoing();
        }
        /**
         * Assert that no mailables were sent.
         *
         * @static
         */ public static function assertNothingSent(): void
        {
            /** @var MailFake $instance */
            $instance->assertNothingSent();
        }
        /**
         * Assert if a mailable was queued based on a truth-test callback.
         *
         * @param Closure|string                $mailable
         * @param array|callable|int|string|null $callback
         * @static
         */ public static function assertQueued($mailable, $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->assertQueued($mailable, $callback);
        }
        /**
         * Determine if a mailable was not queued based on a truth-test callback.
         *
         * @param Closure|string            $mailable
         * @param array|callable|string|null $callback
         * @static
         */ public static function assertNotQueued($mailable, $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->assertNotQueued($mailable, $callback);
        }
        /**
         * Assert that no mailables were queued.
         *
         * @static
         */ public static function assertNothingQueued(): void
        {
            /** @var MailFake $instance */
            $instance->assertNothingQueued();
        }
        /**
         * Assert the total number of mailables that were sent.
         *
         * @param int $count
         * @static
         */ public static function assertSentCount($count): void
        {
            /** @var MailFake $instance */
            $instance->assertSentCount($count);
        }
        /**
         * Assert the total number of mailables that were queued.
         *
         * @param int $count
         * @static
         */ public static function assertQueuedCount($count): void
        {
            /** @var MailFake $instance */
            $instance->assertQueuedCount($count);
        }
        /**
         * Assert the total number of mailables that were sent or queued.
         *
         * @param int $count
         * @static
         */ public static function assertOutgoingCount($count): void
        {
            /** @var MailFake $instance */
            $instance->assertOutgoingCount($count);
        }
        /**
         * Get all of the mailables matching a truth-test callback.
         *
         * @param  Closure|string                $mailable
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function sent($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            return $instance->sent($mailable, $callback);
        }
        /**
         * Determine if the given mailable has been sent.
         *
         * @param  string $mailable
         * @return bool
         * @static
         */ public static function hasSent($mailable)
        {
            /** @var MailFake $instance */
            return $instance->hasSent($mailable);
        }
        /**
         * Get all of the queued mailables matching a truth-test callback.
         *
         * @param  Closure|string                $mailable
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function queued($mailable, $callback = null)
        {
            /** @var MailFake $instance */
            return $instance->queued($mailable, $callback);
        }
        /**
         * Determine if the given mailable has been queued.
         *
         * @param  string $mailable
         * @return bool
         * @static
         */ public static function hasQueued($mailable)
        {
            /** @var MailFake $instance */
            return $instance->hasQueued($mailable);
        }
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @return PendingMail
         * @static
         */ public static function to($users)
        {
            /** @var MailFake $instance */
            return $instance->to($users);
        }
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @return PendingMail
         * @static
         */ public static function cc($users)
        {
            /** @var MailFake $instance */
            return $instance->cc($users);
        }
        /**
         * Begin the process of mailing a mailable class instance.
         *
         * @return PendingMail
         * @static
         */ public static function bcc($users)
        {
            /** @var MailFake $instance */
            return $instance->bcc($users);
        }
        /**
         * Send a new message with only a raw text part.
         *
         * @param string          $text
         * @param Closure|string $callback
         * @static
         */ public static function raw($text, $callback): void
        {
            /** @var MailFake $instance */
            $instance->raw($text, $callback);
        }
        /**
         * Send a new message using a view.
         *
         * @param  array|Mailable|string $view
         * @param  array                                            $data
         * @param  Closure|string|null                             $callback
         * @return mixed|void
         * @static
         */ public static function send($view, $data = [], $callback = null)
        {
            /** @var MailFake $instance */
            return $instance->send($view, $data, $callback);
        }
        /**
         * Send a new message synchronously using a view.
         *
         * @param array|Mailable|string $mailable
         * @param array                                            $data
         * @param Closure|string|null                             $callback
         * @static
         */ public static function sendNow($mailable, $data = [], $callback = null): void
        {
            /** @var MailFake $instance */
            $instance->sendNow($mailable, $data, $callback);
        }
        /**
         * Queue a new message for sending.
         *
         * @param array|Mailable|string $view
         * @param string|null                                      $queue
         * @static
         */ public static function queue($view, $queue = null)
        {
            /** @var MailFake $instance */
            return $instance->queue($view, $queue);
        }
        /**
         * Queue a new e-mail message for sending after (n) seconds.
         *
         * @param DateInterval|DateTimeInterface|int             $delay
         * @param array|Mailable|string $view
         * @param string|null                                      $queue
         * @static
         */ public static function later($delay, $view, $queue = null)
        {
            /** @var MailFake $instance */
            return $instance->later($delay, $view, $queue);
        }
    }
    /**
     * @see \Illuminate\Notifications\ChannelManager
     * @see \Illuminate\Support\Testing\Fakes\NotificationFake
     */ final class Notification
    {
        /**
         * Send the given notification to the given notifiable entities.
         *
         * @param array|Collection|mixed $notifiables
         * @static
         */ public static function send($notifiables, $notification): void
        {
            /** @var ChannelManager $instance */
            $instance->send($notifiables, $notification);
        }
        /**
         * Send the given notification immediately.
         *
         * @param array|Collection|mixed $notifiables
         * @param array|null                                 $channels
         * @static
         */ public static function sendNow($notifiables, $notification, $channels = null): void
        {
            /** @var ChannelManager $instance */
            $instance->sendNow($notifiables, $notification, $channels);
        }
        /**
         * Get a channel instance.
         *
         * @param string|null $name
         * @static
         */ public static function channel($name = null)
        {
            /** @var ChannelManager $instance */
            return $instance->channel($name);
        }
        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var ChannelManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Get the default channel driver name.
         *
         * @return string
         * @static
         */ public static function deliversVia()
        {
            /** @var ChannelManager $instance */
            return $instance->deliversVia();
        }
        /**
         * Set the default channel driver name.
         *
         * @param string $channel
         * @static
         */ public static function deliverVia($channel): void
        {
            /** @var ChannelManager $instance */
            $instance->deliverVia($channel);
        }
        /**
         * Set the locale of notifications.
         *
         * @param  string                                   $locale
         * @return ChannelManager
         * @static
         */ public static function locale($locale)
        {
            /** @var ChannelManager $instance */
            return $instance->locale($locale);
        }
        /**
         * Get a driver instance.
         *
         * @param  string|null               $driver
         * @throws InvalidArgumentException
         * @static
         */ public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                                   $driver
         * @param  Closure                                 $callback
         * @return ChannelManager
         * @static
         */ public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */ public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->getDrivers();
        }
        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */ public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->getContainer();
        }
        /**
         * Set the container instance used by the manager.
         *
         * @param  Container $container
         * @return ChannelManager
         * @static
         */ public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->setContainer($container);
        }
        /**
         * Forget all of the resolved driver instances.
         *
         * @return ChannelManager
         * @static
         */ public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var ChannelManager $instance */
            return $instance->forgetDrivers();
        }
        /**
         * Assert if a notification was sent on-demand based on a truth-test callback.
         *
         * @param  Closure|string $notification
         * @param  callable|null   $callback
         * @throws Exception
         * @static
         */ public static function assertSentOnDemand($notification, $callback = null): void
        {
            /** @var NotificationFake $instance */
            $instance->assertSentOnDemand($notification, $callback);
        }
        /**
         * Assert if a notification was sent based on a truth-test callback.
         *
         * @param  Closure|string $notification
         * @param  callable|null   $callback
         * @throws Exception
         * @static
         */ public static function assertSentTo($notifiable, $notification, $callback = null): void
        {
            /** @var NotificationFake $instance */
            $instance->assertSentTo($notifiable, $notification, $callback);
        }
        /**
         * Assert if a notification was sent on-demand a number of times.
         *
         * @param string $notification
         * @param int    $times
         * @static
         */ public static function assertSentOnDemandTimes($notification, $times = 1): void
        {
            /** @var NotificationFake $instance */
            $instance->assertSentOnDemandTimes($notification, $times);
        }
        /**
         * Assert if a notification was sent a number of times.
         *
         * @param string $notification
         * @param int    $times
         * @static
         */ public static function assertSentToTimes($notifiable, $notification, $times = 1): void
        {
            /** @var NotificationFake $instance */
            $instance->assertSentToTimes($notifiable, $notification, $times);
        }
        /**
         * Determine if a notification was sent based on a truth-test callback.
         *
         * @param  Closure|string $notification
         * @param  callable|null   $callback
         * @throws Exception
         * @static
         */ public static function assertNotSentTo($notifiable, $notification, $callback = null): void
        {
            /** @var NotificationFake $instance */
            $instance->assertNotSentTo($notifiable, $notification, $callback);
        }
        /**
         * Assert that no notifications were sent.
         *
         * @static
         */ public static function assertNothingSent(): void
        {
            /** @var NotificationFake $instance */
            $instance->assertNothingSent();
        }
        /**
         * Assert that no notifications were sent to the given notifiable.
         *
         * @throws Exception
         * @static
         */ public static function assertNothingSentTo($notifiable): void
        {
            /** @var NotificationFake $instance */
            $instance->assertNothingSentTo($notifiable);
        }
        /**
         * Assert the total amount of times a notification was sent.
         *
         * @param string $notification
         * @param int    $expectedCount
         * @static
         */ public static function assertSentTimes($notification, $expectedCount): void
        {
            /** @var NotificationFake $instance */
            $instance->assertSentTimes($notification, $expectedCount);
        }
        /**
         * Assert the total count of notification that were sent.
         *
         * @param int $expectedCount
         * @static
         */ public static function assertCount($expectedCount): void
        {
            /** @var NotificationFake $instance */
            $instance->assertCount($expectedCount);
        }
        /**
         * Get all of the notifications matching a truth-test callback.
         *
         * @param  string                         $notification
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function sent($notifiable, $notification, $callback = null)
        {
            /** @var NotificationFake $instance */
            return $instance->sent($notifiable, $notification, $callback);
        }
        /**
         * Determine if there are more notifications left to inspect.
         *
         * @param  string $notification
         * @return bool
         * @static
         */ public static function hasSent($notifiable, $notification)
        {
            /** @var NotificationFake $instance */
            return $instance->hasSent($notifiable, $notification);
        }
        /**
         * Specify if notification should be serialized and restored when being "pushed" to the queue.
         *
         * @param  bool                                               $serializeAndRestore
         * @return NotificationFake
         * @static
         */ public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var NotificationFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }
        /**
         * Get the notifications that have been sent.
         *
         * @return array
         * @static
         */ public static function sentNotifications()
        {
            /** @var NotificationFake $instance */
            return $instance->sentNotifications();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            NotificationFake::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            NotificationFake::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return NotificationFake::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            NotificationFake::flushMacros();
        }
    }
    /**
     * @method static string                                              sendResetLink(array $credentials, Closure|null $callback = null)
     * @method static mixed                                               reset(array $credentials, Closure $callback)
     * @method static CanResetPassword|null    getUser(array $credentials)
     * @method static string                                              createToken(CanResetPassword $user)
     * @method static void                                                deleteToken(CanResetPassword $user)
     * @method static bool                                                tokenExists(CanResetPassword $user, string $token)
     * @method static TokenRepositoryInterface getRepository()
     * @see \Illuminate\Auth\Passwords\PasswordBrokerManager
     * @see \Illuminate\Auth\Passwords\PasswordBroker
     */ final class Password
    {
        /**
         * Attempt to get the broker from the local cache.
         *
         * @param  string|null                               $name
         * @return PasswordBroker
         * @static
         */ public static function broker($name = null)
        {
            /** @var PasswordBrokerManager $instance */
            return $instance->broker($name);
        }
        /**
         * Get the default password broker name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var PasswordBrokerManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default password broker name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var PasswordBrokerManager $instance */
            $instance->setDefaultDriver($name);
        }
    }
    /**
     * @method static PendingProcess          command(array|string $command)
     * @method static PendingProcess          path(string $path)
     * @method static PendingProcess          timeout(int $timeout)
     * @method static PendingProcess          idleTimeout(int $timeout)
     * @method static PendingProcess          forever()
     * @method static PendingProcess          env(array $environment)
     * @method static PendingProcess          input(Traversable|resource|string|int|float|bool|null $input)
     * @method static PendingProcess          quietly()
     * @method static PendingProcess          tty(bool $tty = true)
     * @method static PendingProcess          options(array $options)
     * @method static ProcessResult run(array|string|null $command = null, callable|null $output = null)
     * @method static InvokedProcess          start(array|string|null $command = null, callable|null $output = null)
     * @method static PendingProcess          withFakeHandlers(array $fakeHandlers)
     * @method static PendingProcess|mixed    when(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @method static PendingProcess|mixed    unless(Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
     * @see \Illuminate\Process\PendingProcess
     * @see \Illuminate\Process\Factory
     */ final class Process
    {
        /**
         * Create a new fake process response for testing purposes.
         *
         * @param  array|string                          $output
         * @param  array|string                          $errorOutput
         * @param  int                                   $exitCode
         * @return FakeProcessResult
         * @static
         */ public static function result($output = '', $errorOutput = '', $exitCode = 0)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->result($output, $errorOutput, $exitCode);
        }
        /**
         * Begin describing a fake process lifecycle.
         *
         * @return FakeProcessDescription
         * @static
         */ public static function describe()
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->describe();
        }
        /**
         * Begin describing a fake process sequence.
         *
         * @param  array                                   $processes
         * @return FakeProcessSequence
         * @static
         */ public static function sequence($processes = [])
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->sequence($processes);
        }
        /**
         * Indicate that the process factory should fake processes.
         *
         * @param  array|Closure|null         $callback
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function fake($callback = null)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->fake($callback);
        }
        /**
         * Determine if the process factory has fake process handlers and is recording processes.
         *
         * @return bool
         * @static
         */ public static function isRecording()
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->isRecording();
        }
        /**
         * Record the given process if processes should be recorded.
         *
         * @param  PendingProcess          $process
         * @param  ProcessResult $result
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function recordIfRecording($process, $result)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->recordIfRecording($process, $result);
        }
        /**
         * Record the given process.
         *
         * @param  PendingProcess          $process
         * @param  ProcessResult $result
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function record($process, $result)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->record($process, $result);
        }
        /**
         * Indicate that an exception should be thrown if any process is not faked.
         *
         * @param  bool                        $prevent
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function preventStrayProcesses($prevent = true)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->preventStrayProcesses($prevent);
        }
        /**
         * Determine if stray processes are being prevented.
         *
         * @return bool
         * @static
         */ public static function preventingStrayProcesses()
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->preventingStrayProcesses();
        }
        /**
         * Assert that a process was recorded matching a given truth test.
         *
         * @param  Closure|string             $callback
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function assertRan($callback)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertRan($callback);
        }
        /**
         * Assert that a process was recorded a given number of times matching a given truth test.
         *
         * @param  Closure|string             $callback
         * @param  int                         $times
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function assertRanTimes($callback, $times = 1)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertRanTimes($callback, $times);
        }
        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param  Closure|string             $callback
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function assertNotRan($callback)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertNotRan($callback);
        }
        /**
         * Assert that a process was not recorded matching a given truth test.
         *
         * @param  Closure|string             $callback
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function assertDidntRun($callback)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertDidntRun($callback);
        }
        /**
         * Assert that no processes were recorded.
         *
         * @return \Illuminate\Process\Factory
         * @static
         */ public static function assertNothingRan()
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->assertNothingRan();
        }
        /**
         * Start defining a pool of processes.
         *
         * @param  callable                 $callback
         * @return Pool
         * @static
         */ public static function pool($callback)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->pool($callback);
        }
        /**
         * Start defining a series of piped processes.
         *
         * @param  array|callable                              $callback
         * @return ProcessResult
         * @static
         */ public static function pipe($callback, $output = null)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->pipe($callback, $output);
        }
        /**
         * Run a pool of processes and wait for them to finish executing.
         *
         * @param  callable                               $callback
         * @param  callable|null                          $output
         * @return ProcessPoolResults
         * @static
         */ public static function concurrently($callback, $output = null)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->concurrently($callback, $output);
        }
        /**
         * Create a new pending process associated with this factory.
         *
         * @return PendingProcess
         * @static
         */ public static function newPendingProcess()
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->newPendingProcess();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Process\Factory::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Process\Factory::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Process\Factory::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Process\Factory::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Process\Factory $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    /**
     * @see \Illuminate\Queue\QueueManager
     * @see \Illuminate\Queue\Queue
     * @see \Illuminate\Support\Testing\Fakes\QueueFake
     */ final class Queue
    {
        /**
         * Register an event listener for the before job event.
         *
         * @static
         */ public static function before($callback): void
        {
            /** @var QueueManager $instance */
            $instance->before($callback);
        }
        /**
         * Register an event listener for the after job event.
         *
         * @static
         */ public static function after($callback): void
        {
            /** @var QueueManager $instance */
            $instance->after($callback);
        }
        /**
         * Register an event listener for the exception occurred job event.
         *
         * @static
         */ public static function exceptionOccurred($callback): void
        {
            /** @var QueueManager $instance */
            $instance->exceptionOccurred($callback);
        }
        /**
         * Register an event listener for the daemon queue loop.
         *
         * @static
         */ public static function looping($callback): void
        {
            /** @var QueueManager $instance */
            $instance->looping($callback);
        }
        /**
         * Register an event listener for the failed job event.
         *
         * @static
         */ public static function failing($callback): void
        {
            /** @var QueueManager $instance */
            $instance->failing($callback);
        }
        /**
         * Register an event listener for the daemon queue stopping.
         *
         * @static
         */ public static function stopping($callback): void
        {
            /** @var QueueManager $instance */
            $instance->stopping($callback);
        }
        /**
         * Determine if the driver is connected.
         *
         * @param  string|null $name
         * @return bool
         * @static
         */ public static function connected($name = null)
        {
            /** @var QueueManager $instance */
            return $instance->connected($name);
        }
        /**
         * Resolve a queue connection instance.
         *
         * @param  string|null                       $name
         * @return \Illuminate\Contracts\Queue\Queue
         * @static
         */ public static function connection($name = null)
        {
            /** @var QueueManager $instance */
            return $instance->connection($name);
        }
        /**
         * Add a queue connection resolver.
         *
         * @param string   $driver
         * @param Closure $resolver
         * @static
         */ public static function extend($driver, $resolver): void
        {
            /** @var QueueManager $instance */
            $instance->extend($driver, $resolver);
        }
        /**
         * Add a queue connection resolver.
         *
         * @param string   $driver
         * @param Closure $resolver
         * @static
         */ public static function addConnector($driver, $resolver): void
        {
            /** @var QueueManager $instance */
            $instance->addConnector($driver, $resolver);
        }
        /**
         * Get the name of the default queue connection.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var QueueManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the name of the default queue connection.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var QueueManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Get the full name for the given connection.
         *
         * @param  string|null $connection
         * @return string
         * @static
         */ public static function getName($connection = null)
        {
            /** @var QueueManager $instance */
            return $instance->getName($connection);
        }
        /**
         * Get the application instance used by the manager.
         *
         * @return Application
         * @static
         */ public static function getApplication()
        {
            /** @var QueueManager $instance */
            return $instance->getApplication();
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return QueueManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var QueueManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Specify the jobs that should be queued instead of faked.
         *
         * @param  array|string                                $jobsToBeQueued
         * @return QueueFake
         * @static
         */ public static function except($jobsToBeQueued)
        {
            /** @var QueueFake $instance */
            return $instance->except($jobsToBeQueued);
        }
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param Closure|string   $job
         * @param callable|int|null $callback
         * @static
         */ public static function assertPushed($job, $callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertPushed($job, $callback);
        }
        /**
         * Assert if a job was pushed based on a truth-test callback.
         *
         * @param string          $queue
         * @param Closure|string $job
         * @param callable|null   $callback
         * @static
         */ public static function assertPushedOn($queue, $job, $callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertPushedOn($queue, $job, $callback);
        }
        /**
         * Assert if a job was pushed with chained jobs based on a truth-test callback.
         *
         * @param string        $job
         * @param array         $expectedChain
         * @param callable|null $callback
         * @static
         */ public static function assertPushedWithChain($job, $expectedChain = [], $callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertPushedWithChain($job, $expectedChain, $callback);
        }
        /**
         * Assert if a job was pushed with an empty chain based on a truth-test callback.
         *
         * @param string        $job
         * @param callable|null $callback
         * @static
         */ public static function assertPushedWithoutChain($job, $callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertPushedWithoutChain($job, $callback);
        }
        /**
         * Assert if a closure was pushed based on a truth-test callback.
         *
         * @param callable|int|null $callback
         * @static
         */ public static function assertClosurePushed($callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertClosurePushed($callback);
        }
        /**
         * Assert that a closure was not pushed based on a truth-test callback.
         *
         * @param callable|null $callback
         * @static
         */ public static function assertClosureNotPushed($callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertClosureNotPushed($callback);
        }
        /**
         * Determine if a job was pushed based on a truth-test callback.
         *
         * @param Closure|string $job
         * @param callable|null   $callback
         * @static
         */ public static function assertNotPushed($job, $callback = null): void
        {
            /** @var QueueFake $instance */
            $instance->assertNotPushed($job, $callback);
        }
        /**
         * Assert the total count of jobs that were pushed.
         *
         * @param int $expectedCount
         * @static
         */ public static function assertCount($expectedCount): void
        {
            /** @var QueueFake $instance */
            $instance->assertCount($expectedCount);
        }
        /**
         * Assert that no jobs were pushed.
         *
         * @static
         */ public static function assertNothingPushed(): void
        {
            /** @var QueueFake $instance */
            $instance->assertNothingPushed();
        }
        /**
         * Get all of the jobs matching a truth-test callback.
         *
         * @param  string                         $job
         * @param  callable|null                  $callback
         * @return Collection
         * @static
         */ public static function pushed($job, $callback = null)
        {
            /** @var QueueFake $instance */
            return $instance->pushed($job, $callback);
        }
        /**
         * Determine if there are any stored jobs for a given class.
         *
         * @param  string $job
         * @return bool
         * @static
         */ public static function hasPushed($job)
        {
            /** @var QueueFake $instance */
            return $instance->hasPushed($job);
        }
        /**
         * Get the size of the queue.
         *
         * @param  string|null $queue
         * @return int
         * @static
         */ public static function size($queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->size($queue);
        }
        /**
         * Push a new job onto the queue.
         *
         * @param object|string $job
         * @param string|null   $queue
         * @static
         */ public static function push($job, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->push($job, $data, $queue);
        }
        /**
         * Determine if a job should be faked or actually dispatched.
         *
         * @param  object $job
         * @return bool
         * @static
         */ public static function shouldFakeJob($job)
        {
            /** @var QueueFake $instance */
            return $instance->shouldFakeJob($job);
        }
        /**
         * Push a raw payload onto the queue.
         *
         * @param string      $payload
         * @param string|null $queue
         * @param array       $options
         * @static
         */ public static function pushRaw($payload, $queue = null, $options = [])
        {
            /** @var QueueFake $instance */
            return $instance->pushRaw($payload, $queue, $options);
        }
        /**
         * Push a new job onto the queue after (n) seconds.
         *
         * @param DateInterval|DateTimeInterface|int $delay
         * @param object|string                        $job
         * @param string|null                          $queue
         * @static
         */ public static function later($delay, $job, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->later($delay, $job, $data, $queue);
        }
        /**
         * Push a new job onto the queue.
         *
         * @param string        $queue
         * @param object|string $job
         * @static
         */ public static function pushOn($queue, $job, $data = '')
        {
            /** @var QueueFake $instance */
            return $instance->pushOn($queue, $job, $data);
        }
        /**
         * Push a new job onto a specific queue after (n) seconds.
         *
         * @param string                               $queue
         * @param DateInterval|DateTimeInterface|int $delay
         * @param object|string                        $job
         * @static
         */ public static function laterOn($queue, $delay, $job, $data = '')
        {
            /** @var QueueFake $instance */
            return $instance->laterOn($queue, $delay, $job, $data);
        }
        /**
         * Pop the next job off of the queue.
         *
         * @param  string|null                          $queue
         * @return Job|null
         * @static
         */ public static function pop($queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->pop($queue);
        }
        /**
         * Push an array of jobs onto the queue.
         *
         * @param array       $jobs
         * @param string|null $queue
         * @static
         */ public static function bulk($jobs, $data = '', $queue = null)
        {
            /** @var QueueFake $instance */
            return $instance->bulk($jobs, $data, $queue);
        }
        /**
         * Get the jobs that have been pushed.
         *
         * @return array
         * @static
         */ public static function pushedJobs()
        {
            /** @var QueueFake $instance */
            return $instance->pushedJobs();
        }
        /**
         * Specify if jobs should be serialized and restored when being "pushed" to the queue.
         *
         * @param  bool                                        $serializeAndRestore
         * @return QueueFake
         * @static
         */ public static function serializeAndRestore($serializeAndRestore = true)
        {
            /** @var QueueFake $instance */
            return $instance->serializeAndRestore($serializeAndRestore);
        }
        /**
         * Get the connection name for the queue.
         *
         * @return string
         * @static
         */ public static function getConnectionName()
        {
            /** @var QueueFake $instance */
            return $instance->getConnectionName();
        }
        /**
         * Set the connection name for the queue.
         *
         * @param  string                                      $name
         * @return QueueFake
         * @static
         */ public static function setConnectionName($name)
        {
            /** @var QueueFake $instance */
            return $instance->setConnectionName($name);
        }
        /**
         * Release a reserved job back onto the queue after (n) seconds.
         *
         * @param string                                   $queue
         * @param DatabaseJobRecord $job
         * @param int                                      $delay
         * @static
         */ public static function release($queue, $job, $delay)
        {
            /** @var DatabaseQueue $instance */
            return $instance->release($queue, $job, $delay);
        }
        /**
         * Delete a reserved job from the queue.
         *
         * @param  string     $queue
         * @param  string     $id
         * @throws Throwable
         * @static
         */ public static function deleteReserved($queue, $id): void
        {
            /** @var DatabaseQueue $instance */
            $instance->deleteReserved($queue, $id);
        }
        /**
         * Delete a reserved job from the reserved queue and release it.
         *
         * @param string                             $queue
         * @param DatabaseJob $job
         * @param int                                $delay
         * @static
         */ public static function deleteAndRelease($queue, $job, $delay): void
        {
            /** @var DatabaseQueue $instance */
            $instance->deleteAndRelease($queue, $job, $delay);
        }
        /**
         * Delete all of the jobs from the queue.
         *
         * @param  string $queue
         * @return int
         * @static
         */ public static function clear($queue)
        {
            /** @var DatabaseQueue $instance */
            return $instance->clear($queue);
        }
        /**
         * Get the queue or return the default.
         *
         * @param  string|null $queue
         * @return string
         * @static
         */ public static function getQueue($queue)
        {
            /** @var DatabaseQueue $instance */
            return $instance->getQueue($queue);
        }
        /**
         * Get the underlying database instance.
         *
         * @return Connection
         * @static
         */ public static function getDatabase()
        {
            /** @var DatabaseQueue $instance */
            return $instance->getDatabase();
        }
        /**
         * Get the maximum number of attempts for an object-based queue handler.
         *
         * @static
         */ public static function getJobTries($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var DatabaseQueue $instance */
            return $instance->getJobTries($job);
        }
        /**
         * Get the backoff for an object-based queue handler.
         *
         * @static
         */ public static function getJobBackoff($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var DatabaseQueue $instance */
            return $instance->getJobBackoff($job);
        }
        /**
         * Get the expiration timestamp for an object-based queue handler.
         *
         * @static
         */ public static function getJobExpiration($job)
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var DatabaseQueue $instance */
            return $instance->getJobExpiration($job);
        }
        /**
         * Register a callback to be executed when creating job payloads.
         *
         * @param callable|null $callback
         * @static
         */ public static function createPayloadUsing($callback): void
        {            //Method inherited from \Illuminate\Queue\Queue
            DatabaseQueue::createPayloadUsing($callback);
        }
        /**
         * Get the container instance being used by the connection.
         *
         * @return \Illuminate\Container\Container
         * @static
         */ public static function getContainer()
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var DatabaseQueue $instance */
            return $instance->getContainer();
        }
        /**
         * Set the IoC container instance.
         *
         * @param \Illuminate\Container\Container $container
         * @static
         */ public static function setContainer($container): void
        {            //Method inherited from \Illuminate\Queue\Queue
            /** @var DatabaseQueue $instance */
            $instance->setContainer($container);
        }
    }
    /**
     * @see \Illuminate\Cache\RateLimiter
     */ final class RateLimiter
    {
        /**
         * Register a named limiter configuration.
         *
         * @param  BackedEnum|string|UnitEnum  $name
         * @param  Closure                      $callback
         * @return \Illuminate\Cache\RateLimiter
         * @static
         */ public static function for($name, $callback)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->for($name, $callback);
        }
        /**
         * Get the given named rate limiter.
         *
         * @param  BackedEnum|string|UnitEnum $name
         * @return Closure|null
         * @static
         */ public static function limiter($name)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->limiter($name);
        }
        /**
         * Attempts to execute a callback if it's not limited.
         *
         * @param string   $key
         * @param int      $maxAttempts
         * @param Closure $callback
         * @param int      $decaySeconds
         * @static
         */ public static function attempt($key, $maxAttempts, $callback, $decaySeconds = 60)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempt($key, $maxAttempts, $callback, $decaySeconds);
        }
        /**
         * Determine if the given key has been "accessed" too many times.
         *
         * @param  string $key
         * @param  int    $maxAttempts
         * @return bool
         * @static
         */ public static function tooManyAttempts($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->tooManyAttempts($key, $maxAttempts);
        }
        /**
         * Increment (by 1) the counter for a given key for a given decay time.
         *
         * @param  string $key
         * @param  int    $decaySeconds
         * @return int
         * @static
         */ public static function hit($key, $decaySeconds = 60)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->hit($key, $decaySeconds);
        }
        /**
         * Increment the counter for a given key for a given decay time by a given amount.
         *
         * @param  string $key
         * @param  int    $decaySeconds
         * @param  int    $amount
         * @return int
         * @static
         */ public static function increment($key, $decaySeconds = 60, $amount = 1)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->increment($key, $decaySeconds, $amount);
        }
        /**
         * Decrement the counter for a given key for a given decay time by a given amount.
         *
         * @param  string $key
         * @param  int    $decaySeconds
         * @param  int    $amount
         * @return int
         * @static
         */ public static function decrement($key, $decaySeconds = 60, $amount = 1)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->decrement($key, $decaySeconds, $amount);
        }
        /**
         * Get the number of attempts for the given key.
         *
         * @param string $key
         * @static
         */ public static function attempts($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->attempts($key);
        }
        /**
         * Reset the number of attempts for the given key.
         *
         * @param string $key
         * @static
         */ public static function resetAttempts($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->resetAttempts($key);
        }
        /**
         * Get the number of retries left for the given key.
         *
         * @param  string $key
         * @param  int    $maxAttempts
         * @return int
         * @static
         */ public static function remaining($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->remaining($key, $maxAttempts);
        }
        /**
         * Get the number of retries left for the given key.
         *
         * @param  string $key
         * @param  int    $maxAttempts
         * @return int
         * @static
         */ public static function retriesLeft($key, $maxAttempts)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->retriesLeft($key, $maxAttempts);
        }
        /**
         * Clear the hits and lockout timer for the given key.
         *
         * @param string $key
         * @static
         */ public static function clear($key): void
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            $instance->clear($key);
        }
        /**
         * Get the number of seconds until the "key" is accessible again.
         *
         * @param  string $key
         * @return int
         * @static
         */ public static function availableIn($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->availableIn($key);
        }
        /**
         * Clean the rate limiter key from unicode characters.
         *
         * @param  string $key
         * @return string
         * @static
         */ public static function cleanRateLimiterKey($key)
        {
            /** @var \Illuminate\Cache\RateLimiter $instance */
            return $instance->cleanRateLimiterKey($key);
        }
    }
    /**
     * @see \Illuminate\Routing\Redirector
     */ final class Redirect
    {
        /**
         * Create a new redirect response to the previous location.
         *
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function back($status = 302, $headers = [], $fallback = false)
        {
            /** @var Redirector $instance */
            return $instance->back($status, $headers, $fallback);
        }
        /**
         * Create a new redirect response to the current URI.
         *
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function refresh($status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->refresh($status, $headers);
        }
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function guest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->guest($path, $status, $headers, $secure);
        }
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function intended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->intended($default, $status, $headers, $secure);
        }
        /**
         * Create a new redirect response to the given path.
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function to($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var Redirector $instance */
            return $instance->to($path, $status, $headers, $secure);
        }
        /**
         * Create a new redirect response to an external URL (no validation).
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function away($path, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->away($path, $status, $headers);
        }
        /**
         * Create a new redirect response to the given HTTPS path.
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function secure($path, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->secure($path, $status, $headers);
        }
        /**
         * Create a new redirect response to a named route.
         *
         * @param  BackedEnum|string                $route
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function route($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->route($route, $parameters, $status, $headers);
        }
        /**
         * Create a new redirect response to a signed named route.
         *
         * @param  BackedEnum|string                        $route
         * @param  DateInterval|DateTimeInterface|int|null $expiration
         * @param  int                                       $status
         * @param  array                                     $headers
         * @return RedirectResponse
         * @static
         */ public static function signedRoute($route, $parameters = [], $expiration = null, $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->signedRoute($route, $parameters, $expiration, $status, $headers);
        }
        /**
         * Create a new redirect response to a signed named route.
         *
         * @param  BackedEnum|string                        $route
         * @param  DateInterval|DateTimeInterface|int|null $expiration
         * @param  int                                       $status
         * @param  array                                     $headers
         * @return RedirectResponse
         * @static
         */ public static function temporarySignedRoute($route, $expiration, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->temporarySignedRoute($route, $expiration, $parameters, $status, $headers);
        }
        /**
         * Create a new redirect response to a controller action.
         *
         * @param  array|string                      $action
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function action($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var Redirector $instance */
            return $instance->action($action, $parameters, $status, $headers);
        }
        /**
         * Get the URL generator instance.
         *
         * @return UrlGenerator
         * @static
         */ public static function getUrlGenerator()
        {
            /** @var Redirector $instance */
            return $instance->getUrlGenerator();
        }
        /**
         * Set the active session store.
         *
         * @param Store $session
         * @static
         */ public static function setSession($session): void
        {
            /** @var Redirector $instance */
            $instance->setSession($session);
        }
        /**
         * Get the "intended" URL from the session.
         *
         * @return string|null
         * @static
         */ public static function getIntendedUrl()
        {
            /** @var Redirector $instance */
            return $instance->getIntendedUrl();
        }
        /**
         * Set the "intended" URL in the session.
         *
         * @param  string                         $url
         * @return Redirector
         * @static
         */ public static function setIntendedUrl($url)
        {
            /** @var Redirector $instance */
            return $instance->setIntendedUrl($url);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Redirector::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Redirector::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Redirector::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Redirector::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Http\Request
     */ final class Request
    {
        /**
         * Create a new Illuminate HTTP request from server variables.
         *
         * @return static
         * @static
         */ public static function capture()
        {
            return \Illuminate\Http\Request::capture();
        }
        /**
         * Return the Request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */ public static function instance()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->instance();
        }
        /**
         * Get the request method.
         *
         * @return string
         * @static
         */ public static function method()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->method();
        }
        /**
         * Get a URI instance for the request.
         *
         * @return Uri
         * @static
         */ public static function uri()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->uri();
        }
        /**
         * Get the root URL for the application.
         *
         * @return string
         * @static
         */ public static function root()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->root();
        }
        /**
         * Get the URL (no query string) for the request.
         *
         * @return string
         * @static
         */ public static function url()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->url();
        }
        /**
         * Get the full URL for the request.
         *
         * @return string
         * @static
         */ public static function fullUrl()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrl();
        }
        /**
         * Get the full URL for the request with the added query string parameters.
         *
         * @param  array  $query
         * @return string
         * @static
         */ public static function fullUrlWithQuery($query)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithQuery($query);
        }
        /**
         * Get the full URL for the request without the given query string parameters.
         *
         * @param  array|string $keys
         * @return string
         * @static
         */ public static function fullUrlWithoutQuery($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlWithoutQuery($keys);
        }
        /**
         * Get the current path info for the request.
         *
         * @return string
         * @static
         */ public static function path()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->path();
        }
        /**
         * Get the current decoded path info for the request.
         *
         * @return string
         * @static
         */ public static function decodedPath()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->decodedPath();
        }
        /**
         * Get a segment from the URI (1 based index).
         *
         * @param  int         $index
         * @param  string|null $default
         * @return string|null
         * @static
         */ public static function segment($index, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segment($index, $default);
        }
        /**
         * Get all of the segments for the request path.
         *
         * @return array
         * @static
         */ public static function segments()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->segments();
        }
        /**
         * Determine if the current request URI matches a pattern.
         *
         * @return bool
         * @static
         */ public static function is(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->is(...$patterns);
        }
        /**
         * Determine if the route name matches a given pattern.
         *
         * @return bool
         * @static
         */ public static function routeIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->routeIs(...$patterns);
        }
        /**
         * Determine if the current request URL and query string match a pattern.
         *
         * @return bool
         * @static
         */ public static function fullUrlIs(...$patterns)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fullUrlIs(...$patterns);
        }
        /**
         * Get the host name.
         *
         * @return string
         * @static
         */ public static function host()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->host();
        }
        /**
         * Get the HTTP host being requested.
         *
         * @return string
         * @static
         */ public static function httpHost()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->httpHost();
        }
        /**
         * Get the scheme and HTTP host.
         *
         * @return string
         * @static
         */ public static function schemeAndHttpHost()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->schemeAndHttpHost();
        }
        /**
         * Determine if the request is the result of an AJAX call.
         *
         * @return bool
         * @static
         */ public static function ajax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ajax();
        }
        /**
         * Determine if the request is the result of a PJAX call.
         *
         * @return bool
         * @static
         */ public static function pjax()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->pjax();
        }
        /**
         * Determine if the request is the result of a prefetch call.
         *
         * @return bool
         * @static
         */ public static function prefetch()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefetch();
        }
        /**
         * Determine if the request is over HTTPS.
         *
         * @return bool
         * @static
         */ public static function secure()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->secure();
        }
        /**
         * Get the client IP address.
         *
         * @return string|null
         * @static
         */ public static function ip()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ip();
        }
        /**
         * Get the client IP addresses.
         *
         * @return array
         * @static
         */ public static function ips()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->ips();
        }
        /**
         * Get the client user agent.
         *
         * @return string|null
         * @static
         */ public static function userAgent()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->userAgent();
        }
        /**
         * Merge new input into the current request's input array.
         *
         * @param  array                    $input
         * @return \Illuminate\Http\Request
         * @static
         */ public static function merge($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->merge($input);
        }
        /**
         * Merge new input into the request's input, but only when that key is missing from the request.
         *
         * @param  array                    $input
         * @return \Illuminate\Http\Request
         * @static
         */ public static function mergeIfMissing($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->mergeIfMissing($input);
        }
        /**
         * Replace the input values for the current request.
         *
         * @param  array                    $input
         * @return \Illuminate\Http\Request
         * @static
         */ public static function replace($input)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->replace($input);
        }
        /**
         * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
         *
         * Instead, you may use the "input" method.
         *
         * @param string $key
         * @static
         */ public static function get($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->get($key, $default);
        }
        /**
         * Get the JSON payload for the request.
         *
         * @param  string|null                                      $key
         * @return mixed|InputBag
         * @static
         */ public static function json($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->json($key, $default);
        }
        /**
         * Create a new request instance from the given Laravel request.
         *
         * @param  \Illuminate\Http\Request      $from
         * @param  \Illuminate\Http\Request|null $to
         * @return static
         * @static
         */ public static function createFrom($from, $to = null)
        {
            return \Illuminate\Http\Request::createFrom($from, $to);
        }
        /**
         * Create an Illuminate request from a Symfony instance.
         *
         * @param  \Symfony\Component\HttpFoundation\Request $request
         * @return static
         * @static
         */ public static function createFromBase($request)
        {
            return \Illuminate\Http\Request::createFromBase($request);
        }
        /**
         * Clones a request and overrides some of its parameters.
         *
         * @param  array|null $query      The GET parameters
         * @param  array|null $request    The POST parameters
         * @param  array|null $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param  array|null $cookies    The COOKIE parameters
         * @param  array|null $files      The FILES parameters
         * @param  array|null $server     The SERVER parameters
         * @return static
         * @static
         */ public static function duplicate($query = null, $request = null, $attributes = null, $cookies = null, $files = null, $server = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->duplicate($query, $request, $attributes, $cookies, $files, $server);
        }
        /**
         * Whether the request contains a Session object.
         *
         * This method does not give any information about the state of the session object,
         * like whether the session is started or not. It is just a way to check if this Request
         * is associated with a Session instance.
         *
         * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
         * @static
         */ public static function hasSession($skipIfUninitialized = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasSession($skipIfUninitialized);
        }
        /**
         * Gets the Session.
         *
         * @throws SessionNotFoundException When session is not set properly
         * @static
         */ public static function getSession()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSession();
        }
        /**
         * Get the session associated with the request.
         *
         * @throws RuntimeException
         * @return \Illuminate\Contracts\Session\Session
         * @static
         */ public static function session()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->session();
        }
        /**
         * Set the session instance on the request.
         *
         * @param \Illuminate\Contracts\Session\Session $session
         * @static
         */ public static function setLaravelSession($session): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setLaravelSession($session);
        }
        /**
         * Set the locale for the request instance.
         *
         * @param string $locale
         * @static
         */ public static function setRequestLocale($locale): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setRequestLocale($locale);
        }
        /**
         * Set the default locale for the request instance.
         *
         * @param string $locale
         * @static
         */ public static function setDefaultRequestLocale($locale): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->setDefaultRequestLocale($locale);
        }
        /**
         * Get the user making the request.
         *
         * @param string|null $guard
         * @static
         */ public static function user($guard = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->user($guard);
        }
        /**
         * Get the route handling the request.
         *
         * @param  string|null                                  $param
         * @return \Illuminate\Routing\Route|object|string|null
         * @static
         */ public static function route($param = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->route($param, $default);
        }
        /**
         * Get a unique fingerprint for the request / route / IP address.
         *
         * @throws RuntimeException
         * @return string
         * @static
         */ public static function fingerprint()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fingerprint();
        }
        /**
         * Set the JSON payload for the request.
         *
         * @param  InputBag $json
         * @return \Illuminate\Http\Request
         * @static
         */ public static function setJson($json)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setJson($json);
        }
        /**
         * Get the user resolver callback.
         *
         * @return Closure
         * @static
         */ public static function getUserResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserResolver();
        }
        /**
         * Set the user resolver callback.
         *
         * @param  Closure                 $callback
         * @return \Illuminate\Http\Request
         * @static
         */ public static function setUserResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setUserResolver($callback);
        }
        /**
         * Get the route resolver callback.
         *
         * @return Closure
         * @static
         */ public static function getRouteResolver()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRouteResolver();
        }
        /**
         * Set the route resolver callback.
         *
         * @param  Closure                 $callback
         * @return \Illuminate\Http\Request
         * @static
         */ public static function setRouteResolver($callback)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRouteResolver($callback);
        }
        /**
         * Get all of the input and files for the request.
         *
         * @return array
         * @static
         */ public static function toArray()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->toArray();
        }
        /**
         * Determine if the given offset exists.
         *
         * @param  string $offset
         * @return bool
         * @static
         */ public static function offsetExists($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetExists($offset);
        }
        /**
         * Get the value at the given offset.
         *
         * @param string $offset
         * @static
         */ public static function offsetGet($offset)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->offsetGet($offset);
        }
        /**
         * Set the value at the given offset.
         *
         * @param string $offset
         * @static
         */ public static function offsetSet($offset, $value): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetSet($offset, $value);
        }
        /**
         * Remove the value at the given offset.
         *
         * @param string $offset
         * @static
         */ public static function offsetUnset($offset): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->offsetUnset($offset);
        }
        /**
         * Sets the parameters for this request.
         *
         * This method also re-initializes all properties.
         *
         * @param array                $query      The GET parameters
         * @param array                $request    The POST parameters
         * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
         * @param array                $cookies    The COOKIE parameters
         * @param array                $files      The FILES parameters
         * @param array                $server     The SERVER parameters
         * @param resource|string|null $content    The raw body data
         * @static
         */ public static function initialize($query = [], $request = [], $attributes = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->initialize($query, $request, $attributes, $cookies, $files, $server, $content);
        }
        /**
         * Creates a new request with values from PHP's super globals.
         *
         * @static
         */ public static function createFromGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::createFromGlobals();
        }
        /**
         * Creates a Request based on a given URI and configuration.
         *
         * The information contained in the URI always take precedence
         * over the other information (server and parameters).
         *
         * @param  string               $uri        The URI
         * @param  string               $method     The HTTP method
         * @param  array                $parameters The query (GET) or request (POST) parameters
         * @param  array                $cookies    The request cookies ($_COOKIE)
         * @param  array                $files      The request files ($_FILES)
         * @param  array                $server     The server parameters ($_SERVER)
         * @param  resource|string|null $content    The raw body data
         * @throws BadRequestException  When the URI is invalid
         * @static
         */ public static function create($uri, $method = 'GET', $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::create($uri, $method, $parameters, $cookies, $files, $server, $content);
        }
        /**
         * Sets a callable able to create a Request instance.
         *
         * This is mainly useful when you need to override the Request class
         * to keep BC with an existing system. It should not be used for any
         * other purpose.
         *
         * @static
         */ public static function setFactory($callable)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setFactory($callable);
        }
        /**
         * Overrides the PHP global variables according to this request instance.
         *
         * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
         * $_FILES is never overridden, see rfc1867
         *
         * @static
         */ public static function overrideGlobals()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->overrideGlobals();
        }
        /**
         * Sets a list of trusted proxies.
         *
         * You should only list the reverse proxies that you manage directly.
         *
         * @param array                                                            $proxies          A list of trusted proxies, the string 'REMOTE_ADDR' will be replaced with $_SERVER['REMOTE_ADDR'] and 'PRIVATE_SUBNETS' by IpUtils::PRIVATE_SUBNETS
         * @param int-mask-of<Request::HEADER_*> $trustedHeaderSet A bit field to set which headers to trust from your proxies
         * @static
         */ public static function setTrustedProxies($proxies, $trustedHeaderSet)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedProxies($proxies, $trustedHeaderSet);
        }
        /**
         * Gets the list of trusted proxies.
         *
         * @return string[]
         * @static
         */ public static function getTrustedProxies()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedProxies();
        }
        /**
         * Gets the set of trusted headers from trusted proxies.
         *
         * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
         * @static
         */ public static function getTrustedHeaderSet()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHeaderSet();
        }
        /**
         * Sets a list of trusted host patterns.
         *
         * You should only list the hosts you manage using regexs.
         *
         * @param array $hostPatterns A list of trusted host patterns
         * @static
         */ public static function setTrustedHosts($hostPatterns)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::setTrustedHosts($hostPatterns);
        }
        /**
         * Gets the list of trusted host patterns.
         *
         * @return string[]
         * @static
         */ public static function getTrustedHosts()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getTrustedHosts();
        }
        /**
         * Normalizes a query string.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized,
         * have consistent escaping and unneeded delimiters are removed.
         *
         * @static
         */ public static function normalizeQueryString($qs)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::normalizeQueryString($qs);
        }
        /**
         * Enables support for the _method request parameter to determine the intended HTTP method.
         *
         * Be warned that enabling this feature might lead to CSRF issues in your code.
         * Check that you are using CSRF tokens when required.
         * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
         * and used to send a "PUT" or "DELETE" request via the _method request parameter.
         * If these methods are not protected against CSRF, this presents a possible vulnerability.
         *
         * The HTTP method can only be overridden when the real HTTP method is POST.
         *
         * @static
         */ public static function enableHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::enableHttpMethodParameterOverride();
        }
        /**
         * Checks whether support for the _method request parameter is enabled.
         *
         * @static
         */ public static function getHttpMethodParameterOverride()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getHttpMethodParameterOverride();
        }
        /**
         * Whether the request contains a Session which was started in one of the
         * previous requests.
         *
         * @static
         */ public static function hasPreviousSession()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasPreviousSession();
        }
        /**
         * @static
         */ public static function setSession($session)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSession($session);
        }
        /**
         * @internal
         * @param callable():  SessionInterface $factory
         * @static
         */ public static function setSessionFactory($factory)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setSessionFactory($factory);
        }
        /**
         * Returns the client IP addresses.
         *
         * In the returned array the most trusted IP address is first, and the
         * least trusted one last. The "real" client IP address is the last one,
         * but this is also the least trusted one. Trusted proxies are stripped.
         *
         * Use this method carefully; you should use getClientIp() instead.
         *
         * @see getClientIp()
         * @static
         */ public static function getClientIps()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIps();
        }
        /**
         * Returns the client IP address.
         *
         * This method can read the client IP address from the "X-Forwarded-For" header
         * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
         * header value is a comma+space separated list of IP addresses, the left-most
         * being the original client, and each successive proxy that passed the request
         * adding the IP address where it received the request from.
         *
         * If your reverse proxy uses a different header name than "X-Forwarded-For",
         * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
         * argument of the Request::setTrustedProxies() method instead.
         *
         * @see getClientIps()
         * @see https://wikipedia.org/wiki/X-Forwarded-For
         * @static
         */ public static function getClientIp()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getClientIp();
        }
        /**
         * Returns current script name.
         *
         * @static
         */ public static function getScriptName()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScriptName();
        }
        /**
         * Returns the path being requested relative to the executed script.
         *
         * The path info always starts with a /.
         *
         * Suppose this request is instantiated from /mysite on localhost:
         *
         *  * http://localhost/mysite              returns an empty string
         *  * http://localhost/mysite/about        returns '/about'
         *  * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
         *  * http://localhost/mysite/about?var=1  returns '/about'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */ public static function getPathInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPathInfo();
        }
        /**
         * Returns the root path from which this request is executed.
         *
         * Suppose that an index.php file instantiates this request object:
         *
         *  * http://localhost/index.php         returns an empty string
         *  * http://localhost/index.php/page    returns an empty string
         *  * http://localhost/web/index.php     returns '/web'
         *  * http://localhost/we%20b/index.php  returns '/we%20b'
         *
         * @return string The raw path (i.e. not urldecoded)
         * @static
         */ public static function getBasePath()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBasePath();
        }
        /**
         * Returns the root URL from which this request is executed.
         *
         * The base URL never ends with a /.
         *
         * This is similar to getBasePath(), except that it also includes the
         * script filename (e.g. index.php) if one exists.
         *
         * @return string The raw URL (i.e. not urldecoded)
         * @static
         */ public static function getBaseUrl()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getBaseUrl();
        }
        /**
         * Gets the request's scheme.
         *
         * @static
         */ public static function getScheme()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getScheme();
        }
        /**
         * Returns the port on which the request is made.
         *
         * This method can read the client port from the "X-Forwarded-Port" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Port" header must contain the client port.
         *
         * @return int|string|null Can be a string if fetched from the server bag
         * @static
         */ public static function getPort()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPort();
        }
        /**
         * Returns the user.
         *
         * @static
         */ public static function getUser()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUser();
        }
        /**
         * Returns the password.
         *
         * @static
         */ public static function getPassword()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPassword();
        }
        /**
         * Gets the user info.
         *
         * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
         * @static
         */ public static function getUserInfo()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUserInfo();
        }
        /**
         * Returns the HTTP host being requested.
         *
         * The port name will be appended to the host if it's non-standard.
         *
         * @static
         */ public static function getHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHttpHost();
        }
        /**
         * Returns the requested URI (path and query string).
         *
         * @return string The raw URI (i.e. not URI decoded)
         * @static
         */ public static function getRequestUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestUri();
        }
        /**
         * Gets the scheme and HTTP host.
         *
         * If the URL was called with basic authentication, the user
         * and the password are not added to the generated string.
         *
         * @static
         */ public static function getSchemeAndHttpHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getSchemeAndHttpHost();
        }
        /**
         * Generates a normalized URI (URL) for the Request.
         *
         * @see getQueryString()
         * @static
         */ public static function getUri()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUri();
        }
        /**
         * Generates a normalized URI for the given path.
         *
         * @param string $path A path to use instead of the current one
         * @static
         */ public static function getUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getUriForPath($path);
        }
        /**
         * Returns the path as relative reference from the current Request path.
         *
         * Only the URIs path component (no schema, host etc.) is relevant and must be given.
         * Both paths must be absolute and not contain relative parts.
         * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
         * Furthermore, they can be used to reduce the link size in documents.
         *
         * Example target paths, given a base path of "/a/b/c/d":
         * - "/a/b/c/d"     -> ""
         * - "/a/b/c/"      -> "./"
         * - "/a/b/"        -> "../"
         * - "/a/b/c/other" -> "other"
         * - "/a/x/y"       -> "../../x/y"
         *
         * @static
         */ public static function getRelativeUriForPath($path)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRelativeUriForPath($path);
        }
        /**
         * Generates the normalized query string for the Request.
         *
         * It builds a normalized query string, where keys/value pairs are alphabetized
         * and have consistent escaping.
         *
         * @static
         */ public static function getQueryString()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getQueryString();
        }
        /**
         * Checks whether the request is secure or not.
         *
         * This method can read the client protocol from the "X-Forwarded-Proto" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
         *
         * @static
         */ public static function isSecure()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isSecure();
        }
        /**
         * Returns the host name.
         *
         * This method can read the client host name from the "X-Forwarded-Host" header
         * when trusted proxies were set via "setTrustedProxies()".
         *
         * The "X-Forwarded-Host" header must contain the client host name.
         *
         * @throws SuspiciousOperationException when the host name is invalid or not trusted
         * @static
         */ public static function getHost()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getHost();
        }
        /**
         * Sets the request method.
         *
         * @static
         */ public static function setMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setMethod($method);
        }
        /**
         * Gets the request "intended" method.
         *
         * If the X-HTTP-Method-Override header is set, and if the method is a POST,
         * then it is used to determine the "real" intended HTTP method.
         *
         * The _method request parameter can also be used to determine the HTTP method,
         * but only if enableHttpMethodParameterOverride() has been called.
         *
         * The method is always an uppercased string.
         *
         * @see getRealMethod()
         * @static
         */ public static function getMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMethod();
        }
        /**
         * Gets the "real" request method.
         *
         * @see getMethod()
         * @static
         */ public static function getRealMethod()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRealMethod();
        }
        /**
         * Gets the mime type associated with the format.
         *
         * @static
         */ public static function getMimeType($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getMimeType($format);
        }
        /**
         * Gets the mime types associated with the format.
         *
         * @return string[]
         * @static
         */ public static function getMimeTypes($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            return \Illuminate\Http\Request::getMimeTypes($format);
        }
        /**
         * Gets the format associated with the mime type.
         *
         * @static
         */ public static function getFormat($mimeType)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getFormat($mimeType);
        }
        /**
         * Associates a format with mime types.
         *
         * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
         * @static
         */ public static function setFormat($format, $mimeTypes)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setFormat($format, $mimeTypes);
        }
        /**
         * Gets the request format.
         *
         * Here is the process to determine the format:
         *
         *  * format defined by the user (with setRequestFormat())
         *  * _format request attribute
         *  * $default
         *
         * @see getPreferredFormat
         * @static
         */ public static function getRequestFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getRequestFormat($default);
        }
        /**
         * Sets the request format.
         *
         * @static
         */ public static function setRequestFormat($format)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setRequestFormat($format);
        }
        /**
         * Gets the usual name of the format associated with the request's media type (provided in the Content-Type header).
         *
         * @see Request::$formats
         * @static
         */ public static function getContentTypeFormat()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContentTypeFormat();
        }
        /**
         * Sets the default locale.
         *
         * @static
         */ public static function setDefaultLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setDefaultLocale($locale);
        }
        /**
         * Get the default locale.
         *
         * @static
         */ public static function getDefaultLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getDefaultLocale();
        }
        /**
         * Sets the locale.
         *
         * @static
         */ public static function setLocale($locale)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->setLocale($locale);
        }
        /**
         * Get the locale.
         *
         * @static
         */ public static function getLocale()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLocale();
        }
        /**
         * Checks if the request method is of specified type.
         *
         * @param string $method Uppercase request method (GET, POST etc)
         * @static
         */ public static function isMethod($method)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethod($method);
        }
        /**
         * Checks whether or not the method is safe.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
         * @static
         */ public static function isMethodSafe()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodSafe();
        }
        /**
         * Checks whether or not the method is idempotent.
         *
         * @static
         */ public static function isMethodIdempotent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodIdempotent();
        }
        /**
         * Checks whether the method is cacheable or not.
         *
         * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
         * @static
         */ public static function isMethodCacheable()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isMethodCacheable();
        }
        /**
         * Returns the protocol version.
         *
         * If the application is behind a proxy, the protocol version used in the
         * requests between the client and the proxy and between the proxy and the
         * server might be different. This returns the former (from the "Via" header)
         * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
         * the latter (from the "SERVER_PROTOCOL" server parameter).
         *
         * @static
         */ public static function getProtocolVersion()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getProtocolVersion();
        }
        /**
         * Returns the request body content.
         *
         * @param  bool            $asResource If true, a resource will be returned
         * @return resource|string
         * @psalm-return ($asResource is true ? resource : string)
         * @static
         */ public static function getContent($asResource = false)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getContent($asResource);
        }
        /**
         * Gets the decoded form or json request body.
         *
         * @throws JsonException When the body cannot be decoded to an array
         * @static
         */ public static function getPayload()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPayload();
        }
        /**
         * Gets the Etags.
         *
         * @static
         */ public static function getETags()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getETags();
        }
        /**
         * @static
         */ public static function isNoCache()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNoCache();
        }
        /**
         * Gets the preferred format for the response by inspecting, in the following order:
         *   * the request format set using setRequestFormat;
         *   * the values of the Accept HTTP header.
         *
         * Note that if you use this method, you should send the "Vary: Accept" header
         * in the response to prevent any issues with intermediary HTTP caches.
         *
         * @static
         */ public static function getPreferredFormat($default = 'html')
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredFormat($default);
        }
        /**
         * Returns the preferred language.
         *
         * @param string[] $locales An array of ordered available locales
         * @static
         */ public static function getPreferredLanguage($locales = null)
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getPreferredLanguage($locales);
        }
        /**
         * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
         *
         * @return string[]
         * @static
         */ public static function getLanguages()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getLanguages();
        }
        /**
         * Gets a list of charsets acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */ public static function getCharsets()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getCharsets();
        }
        /**
         * Gets a list of encodings acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */ public static function getEncodings()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getEncodings();
        }
        /**
         * Gets a list of content types acceptable by the client browser in preferable order.
         *
         * @return string[]
         * @static
         */ public static function getAcceptableContentTypes()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->getAcceptableContentTypes();
        }
        /**
         * Returns true if the request is an XMLHttpRequest.
         *
         * It works if your JavaScript library sets an X-Requested-With HTTP header.
         * It is known to work with common JavaScript frameworks:
         *
         * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
         * @static
         */ public static function isXmlHttpRequest()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isXmlHttpRequest();
        }
        /**
         * Checks whether the client browser prefers safe content or not according to RFC8674.
         *
         * @see https://tools.ietf.org/html/rfc8674
         * @static
         */ public static function preferSafeContent()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->preferSafeContent();
        }
        /**
         * Indicates whether this request originated from a trusted proxy.
         *
         * This can be useful to determine whether or not to trust the
         * contents of a proxy-specific header.
         *
         * @static
         */ public static function isFromTrustedProxy()
        {            //Method inherited from \Symfony\Component\HttpFoundation\Request
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isFromTrustedProxy();
        }
        /**
         * Filter the given array of rules into an array of rules that are included in precognitive headers.
         *
         * @param  array $rules
         * @return array
         * @static
         */ public static function filterPrecognitiveRules($rules)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filterPrecognitiveRules($rules);
        }
        /**
         * Determine if the request is attempting to be precognitive.
         *
         * @return bool
         * @static
         */ public static function isAttemptingPrecognition()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isAttemptingPrecognition();
        }
        /**
         * Determine if the request is precognitive.
         *
         * @return bool
         * @static
         */ public static function isPrecognitive()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isPrecognitive();
        }
        /**
         * Determine if the request is sending JSON.
         *
         * @return bool
         * @static
         */ public static function isJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isJson();
        }
        /**
         * Determine if the current request probably expects a JSON response.
         *
         * @return bool
         * @static
         */ public static function expectsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->expectsJson();
        }
        /**
         * Determine if the current request is asking for JSON.
         *
         * @return bool
         * @static
         */ public static function wantsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->wantsJson();
        }
        /**
         * Determines whether the current requests accepts a given content type.
         *
         * @param  array|string $contentTypes
         * @return bool
         * @static
         */ public static function accepts($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->accepts($contentTypes);
        }
        /**
         * Return the most suitable content type from the given array based on content negotiation.
         *
         * @param  array|string $contentTypes
         * @return string|null
         * @static
         */ public static function prefers($contentTypes)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->prefers($contentTypes);
        }
        /**
         * Determine if the current request accepts any content type.
         *
         * @return bool
         * @static
         */ public static function acceptsAnyContentType()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsAnyContentType();
        }
        /**
         * Determines whether a request accepts JSON.
         *
         * @return bool
         * @static
         */ public static function acceptsJson()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsJson();
        }
        /**
         * Determines whether a request accepts HTML.
         *
         * @return bool
         * @static
         */ public static function acceptsHtml()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->acceptsHtml();
        }
        /**
         * Determine if the given content types match.
         *
         * @param  string $actual
         * @param  string $type
         * @return bool
         * @static
         */ public static function matchesType($actual, $type)
        {
            return \Illuminate\Http\Request::matchesType($actual, $type);
        }
        /**
         * Get the data format expected in the response.
         *
         * @param  string $default
         * @return string
         * @static
         */ public static function format($default = 'html')
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->format($default);
        }
        /**
         * Retrieve an old input item.
         *
         * @param  string|null                                           $key
         * @param  array|Model|string|null $default
         * @return array|string|null
         * @static
         */ public static function old($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->old($key, $default);
        }
        /**
         * Flash the input for the current request to the session.
         *
         * @static
         */ public static function flash(): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flash();
        }
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @static
         */ public static function flashOnly($keys): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashOnly($keys);
        }
        /**
         * Flash only some of the input to the session.
         *
         * @param array|mixed $keys
         * @static
         */ public static function flashExcept($keys): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flashExcept($keys);
        }
        /**
         * Flush all of the old input from the session.
         *
         * @static
         */ public static function flush(): void
        {
            /** @var \Illuminate\Http\Request $instance */
            $instance->flush();
        }
        /**
         * Retrieve a server variable from the request.
         *
         * @param  string|null       $key
         * @param  array|string|null $default
         * @return array|string|null
         * @static
         */ public static function server($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->server($key, $default);
        }
        /**
         * Determine if a header is set on the request.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function hasHeader($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasHeader($key);
        }
        /**
         * Retrieve a header from the request.
         *
         * @param  string|null       $key
         * @param  array|string|null $default
         * @return array|string|null
         * @static
         */ public static function header($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->header($key, $default);
        }
        /**
         * Get the bearer token from the request headers.
         *
         * @return string|null
         * @static
         */ public static function bearerToken()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->bearerToken();
        }
        /**
         * Get the keys for all of the input and files.
         *
         * @return array
         * @static
         */ public static function keys()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->keys();
        }
        /**
         * Get all of the input and files for the request.
         *
         * @param  array|mixed|null $keys
         * @return array
         * @static
         */ public static function all($keys = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->all($keys);
        }
        /**
         * Retrieve an input item from the request.
         *
         * @param string|null $key
         * @static
         */ public static function input($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->input($key, $default);
        }
        /**
         * Retrieve input from the request as a Fluent object instance.
         *
         * @param  array|string|null          $key
         * @return Fluent
         * @static
         */ public static function fluent($key = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->fluent($key);
        }
        /**
         * Retrieve a query string item from the request.
         *
         * @param  string|null       $key
         * @param  array|string|null $default
         * @return array|string|null
         * @static
         */ public static function query($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->query($key, $default);
        }
        /**
         * Retrieve a request payload item from the request.
         *
         * @param  string|null       $key
         * @param  array|string|null $default
         * @return array|string|null
         * @static
         */ public static function post($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->post($key, $default);
        }
        /**
         * Determine if a cookie is set on the request.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function hasCookie($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasCookie($key);
        }
        /**
         * Retrieve a cookie from the request.
         *
         * @param  string|null       $key
         * @param  array|string|null $default
         * @return array|string|null
         * @static
         */ public static function cookie($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->cookie($key, $default);
        }
        /**
         * Get an array of all of the files on the request.
         *
         * @return array
         * @static
         */ public static function allFiles()
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->allFiles();
        }
        /**
         * Determine if the uploaded data contains a file.
         *
         * @param  string $key
         * @return bool
         * @static
         */ public static function hasFile($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasFile($key);
        }
        /**
         * Retrieve a file from the request.
         *
         * @param  string|null                                                              $key
         * @return array|UploadedFile|UploadedFile[]|null
         * @static
         */ public static function file($key = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->file($key, $default);
        }
        /**
         * Dump the items.
         *
         * @return \Illuminate\Http\Request
         * @static
         */ public static function dump($keys = [])
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dump($keys);
        }
        /**
         * Dump the given arguments and terminate execution.
         *
         * @return never
         * @static
         */ public static function dd(...$args)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->dd(...$args);
        }
        /**
         * Determine if the data contains a given key.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function exists($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->exists($key);
        }
        /**
         * Determine if the data contains a given key.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function has($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->has($key);
        }
        /**
         * Determine if the instance contains any of the given keys.
         *
         * @param  array|string $keys
         * @return bool
         * @static
         */ public static function hasAny($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->hasAny($keys);
        }
        /**
         * Apply the callback if the instance contains the given key.
         *
         * @param  string        $key
         * @param  callable      $callback
         * @param  callable|null $default
         * @return $this|mixed
         * @static
         */ public static function whenHas($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenHas($key, $callback, $default);
        }
        /**
         * Determine if the instance contains a non-empty value for the given key.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function filled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->filled($key);
        }
        /**
         * Determine if the instance contains an empty value for the given key.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function isNotFilled($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->isNotFilled($key);
        }
        /**
         * Determine if the instance contains a non-empty value for any of the given keys.
         *
         * @param  array|string $keys
         * @return bool
         * @static
         */ public static function anyFilled($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->anyFilled($keys);
        }
        /**
         * Apply the callback if the instance contains a non-empty value for the given key.
         *
         * @param  string        $key
         * @param  callable      $callback
         * @param  callable|null $default
         * @return $this|mixed
         * @static
         */ public static function whenFilled($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenFilled($key, $callback, $default);
        }
        /**
         * Determine if the instance is missing a given key.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function missing($key)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->missing($key);
        }
        /**
         * Apply the callback if the instance is missing the given key.
         *
         * @param  string        $key
         * @param  callable      $callback
         * @param  callable|null $default
         * @return $this|mixed
         * @static
         */ public static function whenMissing($key, $callback, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->whenMissing($key, $callback, $default);
        }
        /**
         * Retrieve data from the instnce as a Stringable instance.
         *
         * @param  string                         $key
         * @return Stringable
         * @static
         */ public static function str($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->str($key, $default);
        }
        /**
         * Retrieve data from the instance as a Stringable instance.
         *
         * @param  string                         $key
         * @return Stringable
         * @static
         */ public static function string($key, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->string($key, $default);
        }
        /**
         * Retrieve data as a boolean value.
         *
         * Returns true when value is "1", "true", "on", and "yes". Otherwise, returns false.
         *
         * @param  string|null $key
         * @param  bool        $default
         * @return bool
         * @static
         */ public static function boolean($key = null, $default = false)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->boolean($key, $default);
        }
        /**
         * Retrieve data as an integer value.
         *
         * @param  string $key
         * @param  int    $default
         * @return int
         * @static
         */ public static function integer($key, $default = 0)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->integer($key, $default);
        }
        /**
         * Retrieve data as a float value.
         *
         * @param  string $key
         * @param  float  $default
         * @return float
         * @static
         */ public static function float($key, $default = 0.0)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->float($key, $default);
        }
        /**
         * Retrieve data from the instance as a Carbon instance.
         *
         * @param  string                                    $key
         * @param  string|null                               $format
         * @param  string|null                               $tz
         * @throws InvalidFormatException
         * @return Carbon|null
         * @static
         */ public static function date($key, $format = null, $tz = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->date($key, $format, $tz);
        }
        /**
         * Retrieve data from the instance as an enum.
         *
         * @template TEnum of BackedEnum
         * @param  string                               $key
         * @param  class-string<TEnum> $enumClass
         * @return TEnum|null
         * @static
         */ public static function enum($key, $enumClass)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->enum($key, $enumClass);
        }
        /**
         * Retrieve data from the instance as an array of enums.
         *
         * @template TEnum of BackedEnum
         * @param  string                               $key
         * @param  class-string<TEnum> $enumClass
         * @return TEnum[]
         * @static
         */ public static function enums($key, $enumClass)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->enums($key, $enumClass);
        }
        /**
         * Retrieve data from the instance as a collection.
         *
         * @param  array|string|null              $key
         * @return Collection
         * @static
         */ public static function collect($key = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->collect($key);
        }
        /**
         * Get a subset containing the provided keys with values from the instance data.
         *
         * @param  array|mixed $keys
         * @return array
         * @static
         */ public static function only($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->only($keys);
        }
        /**
         * Get all of the data except for a specified array of items.
         *
         * @param  array|mixed $keys
         * @return array
         * @static
         */ public static function except($keys)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->except($keys);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param  (Closure($this): TWhenParameter)|\Illuminate\Http\TWhenParameter|null $value
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                $callback
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                $default
         * @return $this|\Illuminate\Http\TWhenReturnType
         * @static
         */ public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param  (Closure($this): TUnlessParameter)|\Illuminate\Http\TUnlessParameter|null $value
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                $callback
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                $default
         * @return $this|\Illuminate\Http\TUnlessReturnType
         * @static
         */ public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Http\Request $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Http\Request::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Http\Request::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Http\Request::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Http\Request::flushMacros();
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @static
         */ public static function validate($rules, ...$params)
        {
            return \Illuminate\Http\Request::validate($rules, ...$params);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array  $rules
         * @static
         */ public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidSignature($absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidRelativeSignature()
        {
            return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
            return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }
    }
    /**
     * @see \Illuminate\Routing\ResponseFactory
     */ final class Response
    {
        /**
         * Create a new response instance.
         *
         * @param  int                       $status
         * @param  array                     $headers
         * @return \Illuminate\Http\Response
         * @static
         */ public static function make($content = '', $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->make($content, $status, $headers);
        }
        /**
         * Create a new "no content" response.
         *
         * @param  int                       $status
         * @param  array                     $headers
         * @return \Illuminate\Http\Response
         * @static
         */ public static function noContent($status = 204, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->noContent($status, $headers);
        }
        /**
         * Create a new response for a given view.
         *
         * @param  array|string              $view
         * @param  array                     $data
         * @param  int                       $status
         * @param  array                     $headers
         * @return \Illuminate\Http\Response
         * @static
         */ public static function view($view, $data = [], $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->view($view, $data, $status, $headers);
        }
        /**
         * Create a new JSON response instance.
         *
         * @param  int                           $status
         * @param  array                         $headers
         * @param  int                           $options
         * @return JsonResponse
         * @static
         */ public static function json($data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var ResponseFactory $instance */
            return $instance->json($data, $status, $headers, $options);
        }
        /**
         * Create a new JSONP response instance.
         *
         * @param  string                        $callback
         * @param  int                           $status
         * @param  array                         $headers
         * @param  int                           $options
         * @return JsonResponse
         * @static
         */ public static function jsonp($callback, $data = [], $status = 200, $headers = [], $options = 0)
        {
            /** @var ResponseFactory $instance */
            return $instance->jsonp($callback, $data, $status, $headers, $options);
        }
        /**
         * Create a new streamed response instance.
         *
         * @param  callable                                           $callback
         * @param  int                                                $status
         * @param  array                                              $headers
         * @return StreamedResponse
         * @static
         */ public static function stream($callback, $status = 200, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->stream($callback, $status, $headers);
        }
        /**
         * Create a new streamed response instance.
         *
         * @param  array                                                  $data
         * @param  int                                                    $status
         * @param  array                                                  $headers
         * @param  int                                                    $encodingOptions
         * @return StreamedJsonResponse
         * @static
         */ public static function streamJson($data, $status = 200, $headers = [], $encodingOptions = 15)
        {
            /** @var ResponseFactory $instance */
            return $instance->streamJson($data, $status, $headers, $encodingOptions);
        }
        /**
         * Create a new streamed response instance as a file download.
         *
         * @param  callable                                                 $callback
         * @param  string|null                                              $name
         * @param  array                                                    $headers
         * @param  string|null                                              $disposition
         * @throws StreamedResponseException
         * @return StreamedResponse
         * @static
         */ public static function streamDownload($callback, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var ResponseFactory $instance */
            return $instance->streamDownload($callback, $name, $headers, $disposition);
        }
        /**
         * Create a new file download response.
         *
         * @param  SplFileInfo|string                                  $file
         * @param  string|null                                          $name
         * @param  array                                                $headers
         * @param  string|null                                          $disposition
         * @return BinaryFileResponse
         * @static
         */ public static function download($file, $name = null, $headers = [], $disposition = 'attachment')
        {
            /** @var ResponseFactory $instance */
            return $instance->download($file, $name, $headers, $disposition);
        }
        /**
         * Return the raw contents of a binary file.
         *
         * @param  SplFileInfo|string                                  $file
         * @param  array                                                $headers
         * @return BinaryFileResponse
         * @static
         */ public static function file($file, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->file($file, $headers);
        }
        /**
         * Create a new redirect response to the given path.
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function redirectTo($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectTo($path, $status, $headers, $secure);
        }
        /**
         * Create a new redirect response to a named route.
         *
         * @param  BackedEnum|string                $route
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function redirectToRoute($route, $parameters = [], $status = 302, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToRoute($route, $parameters, $status, $headers);
        }
        /**
         * Create a new redirect response to a controller action.
         *
         * @param  array|string                      $action
         * @param  int                               $status
         * @param  array                             $headers
         * @return RedirectResponse
         * @static
         */ public static function redirectToAction($action, $parameters = [], $status = 302, $headers = [])
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToAction($action, $parameters, $status, $headers);
        }
        /**
         * Create a new redirect response, while putting the current URL in the session.
         *
         * @param  string                            $path
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function redirectGuest($path, $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectGuest($path, $status, $headers, $secure);
        }
        /**
         * Create a new redirect response to the previously intended location.
         *
         * @param  string                            $default
         * @param  int                               $status
         * @param  array                             $headers
         * @param  bool|null                         $secure
         * @return RedirectResponse
         * @static
         */ public static function redirectToIntended($default = '/', $status = 302, $headers = [], $secure = null)
        {
            /** @var ResponseFactory $instance */
            return $instance->redirectToIntended($default, $status, $headers, $secure);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            ResponseFactory::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            ResponseFactory::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return ResponseFactory::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            ResponseFactory::flushMacros();
        }
    }
    /**
     * @method static RouteRegistrar attribute(string $key, mixed $value)
     * @method static RouteRegistrar whereAlpha(array|string $parameters)
     * @method static RouteRegistrar whereAlphaNumeric(array|string $parameters)
     * @method static RouteRegistrar whereNumber(array|string $parameters)
     * @method static RouteRegistrar whereUlid(array|string $parameters)
     * @method static RouteRegistrar whereUuid(array|string $parameters)
     * @method static RouteRegistrar whereIn(array|string $parameters, array $values)
     * @method static RouteRegistrar as(string $value)
     * @method static RouteRegistrar controller(string $controller)
     * @method static RouteRegistrar domain(BackedEnum|string $value)
     * @method static RouteRegistrar middleware(array|string|null $middleware)
     * @method static RouteRegistrar missing(Closure $missing)
     * @method static RouteRegistrar name(BackedEnum|string $value)
     * @method static RouteRegistrar namespace(string|null $value)
     * @method static RouteRegistrar prefix(string $prefix)
     * @method static RouteRegistrar scopeBindings()
     * @method static RouteRegistrar where(array $where)
     * @method static RouteRegistrar withoutMiddleware(array|string $middleware)
     * @method static RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\Router
     */ final class Route
    {
        /**
         * Register a new GET route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function get($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->get($uri, $action);
        }
        /**
         * Register a new POST route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function post($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->post($uri, $action);
        }
        /**
         * Register a new PUT route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function put($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->put($uri, $action);
        }
        /**
         * Register a new PATCH route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function patch($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->patch($uri, $action);
        }
        /**
         * Register a new DELETE route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function delete($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->delete($uri, $action);
        }
        /**
         * Register a new OPTIONS route with the router.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function options($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->options($uri, $action);
        }
        /**
         * Register a new route responding to all verbs.
         *
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function any($uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->any($uri, $action);
        }
        /**
         * Register a new fallback route with the router.
         *
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function fallback($action)
        {
            /** @var Router $instance */
            return $instance->fallback($action);
        }
        /**
         * Create a redirect from one URI to another.
         *
         * @param  string                    $uri
         * @param  string                    $destination
         * @param  int                       $status
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function redirect($uri, $destination, $status = 302)
        {
            /** @var Router $instance */
            return $instance->redirect($uri, $destination, $status);
        }
        /**
         * Create a permanent redirect from one URI to another.
         *
         * @param  string                    $uri
         * @param  string                    $destination
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function permanentRedirect($uri, $destination)
        {
            /** @var Router $instance */
            return $instance->permanentRedirect($uri, $destination);
        }
        /**
         * Register a new route that returns a view.
         *
         * @param  string                    $uri
         * @param  string                    $view
         * @param  array                     $data
         * @param  array|int                 $status
         * @param  array                     $headers
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
            /** @var Router $instance */
            return $instance->view($uri, $view, $data, $status, $headers);
        }
        /**
         * Register a new route with the given verbs.
         *
         * @param  array|string               $methods
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function match($methods, $uri, $action = null)
        {
            /** @var Router $instance */
            return $instance->match($methods, $uri, $action);
        }
        /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @static
         */ public static function resources($resources, $options = []): void
        {
            /** @var Router $instance */
            $instance->resources($resources, $options);
        }
        /**
         * Route a resource to a controller.
         *
         * @param  string                                          $name
         * @param  string                                          $controller
         * @param  array                                           $options
         * @return PendingResourceRegistration
         * @static
         */ public static function resource($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->resource($name, $controller, $options);
        }
        /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @static
         */ public static function apiResources($resources, $options = []): void
        {
            /** @var Router $instance */
            $instance->apiResources($resources, $options);
        }
        /**
         * Route an API resource to a controller.
         *
         * @param  string                                          $name
         * @param  string                                          $controller
         * @param  array                                           $options
         * @return PendingResourceRegistration
         * @static
         */ public static function apiResource($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->apiResource($name, $controller, $options);
        }
        /**
         * Register an array of singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @static
         */ public static function singletons($singletons, $options = []): void
        {
            /** @var Router $instance */
            $instance->singletons($singletons, $options);
        }
        /**
         * Route a singleton resource to a controller.
         *
         * @param  string                                                   $name
         * @param  string                                                   $controller
         * @param  array                                                    $options
         * @return PendingSingletonResourceRegistration
         * @static
         */ public static function singleton($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->singleton($name, $controller, $options);
        }
        /**
         * Register an array of API singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @static
         */ public static function apiSingletons($singletons, $options = []): void
        {
            /** @var Router $instance */
            $instance->apiSingletons($singletons, $options);
        }
        /**
         * Route an API singleton resource to a controller.
         *
         * @param  string                                                   $name
         * @param  string                                                   $controller
         * @param  array                                                    $options
         * @return PendingSingletonResourceRegistration
         * @static
         */ public static function apiSingleton($name, $controller, $options = [])
        {
            /** @var Router $instance */
            return $instance->apiSingleton($name, $controller, $options);
        }
        /**
         * Create a route group with shared attributes.
         *
         * @param  array                      $attributes
         * @param  array|Closure|string      $routes
         * @return Router
         * @static
         */ public static function group($attributes, $routes)
        {
            /** @var Router $instance */
            return $instance->group($attributes, $routes);
        }
        /**
         * Merge the given array with the last group stack.
         *
         * @param  array $new
         * @param  bool  $prependExistingPrefix
         * @return array
         * @static
         */ public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
            /** @var Router $instance */
            return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }
        /**
         * Get the prefix from the last group on the stack.
         *
         * @return string
         * @static
         */ public static function getLastGroupPrefix()
        {
            /** @var Router $instance */
            return $instance->getLastGroupPrefix();
        }
        /**
         * Add a route to the underlying route collection.
         *
         * @param  array|string               $methods
         * @param  string                     $uri
         * @param  array|callable|string|null $action
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function addRoute($methods, $uri, $action)
        {
            /** @var Router $instance */
            return $instance->addRoute($methods, $uri, $action);
        }
        /**
         * Create a new Route object.
         *
         * @param  array|string              $methods
         * @param  string                    $uri
         * @return \Illuminate\Routing\Route
         * @static
         */ public static function newRoute($methods, $uri, $action)
        {
            /** @var Router $instance */
            return $instance->newRoute($methods, $uri, $action);
        }
        /**
         * Return the response returned by the given route.
         *
         * @param  string                                     $name
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function respondWithRoute($name)
        {
            /** @var Router $instance */
            return $instance->respondWithRoute($name);
        }
        /**
         * Dispatch the request to the application.
         *
         * @param  \Illuminate\Http\Request                   $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function dispatch($request)
        {
            /** @var Router $instance */
            return $instance->dispatch($request);
        }
        /**
         * Dispatch the request to a route and return the response.
         *
         * @param  \Illuminate\Http\Request                   $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function dispatchToRoute($request)
        {
            /** @var Router $instance */
            return $instance->dispatchToRoute($request);
        }
        /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param  \Illuminate\Routing\Route $route
         * @return array
         * @static
         */ public static function gatherRouteMiddleware($route)
        {
            /** @var Router $instance */
            return $instance->gatherRouteMiddleware($route);
        }
        /**
         * Resolve a flat array of middleware classes from the provided array.
         *
         * @param  array $middleware
         * @param  array $excluded
         * @return array
         * @static
         */ public static function resolveMiddleware($middleware, $excluded = [])
        {
            /** @var Router $instance */
            return $instance->resolveMiddleware($middleware, $excluded);
        }
        /**
         * Create a response instance from the given value.
         *
         * @param  \Symfony\Component\HttpFoundation\Request  $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function prepareResponse($request, $response)
        {
            /** @var Router $instance */
            return $instance->prepareResponse($request, $response);
        }
        /**
         * Static version of prepareResponse.
         *
         * @param  \Symfony\Component\HttpFoundation\Request  $request
         * @return \Symfony\Component\HttpFoundation\Response
         * @static
         */ public static function toResponse($request, $response)
        {
            return Router::toResponse($request, $response);
        }
        /**
         * Substitute the route bindings onto the route.
         *
         * @param  \Illuminate\Routing\Route                                                                 $route
         * @return \Illuminate\Routing\Route
         * @static
         *@throws BackedEnumCaseNotFoundException
         * @throws ModelNotFoundException<Model>
         */ public static function substituteBindings($route)
        {
            /** @var Router $instance */
            return $instance->substituteBindings($route);
        }
        /**
         * Substitute the implicit route bindings for the given route.
         *
         * @param  \Illuminate\Routing\Route                                                                 $route
         * @throws ModelNotFoundException<Model>
         * @throws BackedEnumCaseNotFoundException
         * @static
         */ public static function substituteImplicitBindings($route): void
        {
            /** @var Router $instance */
            $instance->substituteImplicitBindings($route);
        }
        /**
         * Register a callback to run after implicit bindings are substituted.
         *
         * @param  callable                   $callback
         * @return Router
         * @static
         */ public static function substituteImplicitBindingsUsing($callback)
        {
            /** @var Router $instance */
            return $instance->substituteImplicitBindingsUsing($callback);
        }
        /**
         * Register a route matched event listener.
         *
         * @param callable|string $callback
         * @static
         */ public static function matched($callback): void
        {
            /** @var Router $instance */
            $instance->matched($callback);
        }
        /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array
         * @static
         */ public static function getMiddleware()
        {
            /** @var Router $instance */
            return $instance->getMiddleware();
        }
        /**
         * Register a short-hand name for a middleware.
         *
         * @param  string                     $name
         * @param  string                     $class
         * @return Router
         * @static
         */ public static function aliasMiddleware($name, $class)
        {
            /** @var Router $instance */
            return $instance->aliasMiddleware($name, $class);
        }
        /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMiddlewareGroup($name)
        {
            /** @var Router $instance */
            return $instance->hasMiddlewareGroup($name);
        }
        /**
         * Get all of the defined middleware groups.
         *
         * @return array
         * @static
         */ public static function getMiddlewareGroups()
        {
            /** @var Router $instance */
            return $instance->getMiddlewareGroups();
        }
        /**
         * Register a group of middleware.
         *
         * @param  string                     $name
         * @param  array                      $middleware
         * @return Router
         * @static
         */ public static function middlewareGroup($name, $middleware)
        {
            /** @var Router $instance */
            return $instance->middlewareGroup($name, $middleware);
        }
        /**
         * Add a middleware to the beginning of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param  string                     $group
         * @param  string                     $middleware
         * @return Router
         * @static
         */ public static function prependMiddlewareToGroup($group, $middleware)
        {
            /** @var Router $instance */
            return $instance->prependMiddlewareToGroup($group, $middleware);
        }
        /**
         * Add a middleware to the end of a middleware group.
         *
         * If the middleware is already in the group, it will not be added again.
         *
         * @param  string                     $group
         * @param  string                     $middleware
         * @return Router
         * @static
         */ public static function pushMiddlewareToGroup($group, $middleware)
        {
            /** @var Router $instance */
            return $instance->pushMiddlewareToGroup($group, $middleware);
        }
        /**
         * Remove the given middleware from the specified group.
         *
         * @param  string                     $group
         * @param  string                     $middleware
         * @return Router
         * @static
         */ public static function removeMiddlewareFromGroup($group, $middleware)
        {
            /** @var Router $instance */
            return $instance->removeMiddlewareFromGroup($group, $middleware);
        }
        /**
         * Flush the router's middleware groups.
         *
         * @return Router
         * @static
         */ public static function flushMiddlewareGroups()
        {
            /** @var Router $instance */
            return $instance->flushMiddlewareGroups();
        }
        /**
         * Add a new route parameter binder.
         *
         * @param string          $key
         * @param callable|string $binder
         * @static
         */ public static function bind($key, $binder): void
        {
            /** @var Router $instance */
            $instance->bind($key, $binder);
        }
        /**
         * Register a model binder for a wildcard.
         *
         * @param string        $key
         * @param string        $class
         * @param Closure|null $callback
         * @static
         */ public static function model($key, $class, $callback = null): void
        {
            /** @var Router $instance */
            $instance->model($key, $class, $callback);
        }
        /**
         * Get the binding callback for a given binding.
         *
         * @param  string        $key
         * @return Closure|null
         * @static
         */ public static function getBindingCallback($key)
        {
            /** @var Router $instance */
            return $instance->getBindingCallback($key);
        }
        /**
         * Get the global "where" patterns.
         *
         * @return array
         * @static
         */ public static function getPatterns()
        {
            /** @var Router $instance */
            return $instance->getPatterns();
        }
        /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @static
         */ public static function pattern($key, $pattern): void
        {
            /** @var Router $instance */
            $instance->pattern($key, $pattern);
        }
        /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @static
         */ public static function patterns($patterns): void
        {
            /** @var Router $instance */
            $instance->patterns($patterns);
        }
        /**
         * Determine if the router currently has a group stack.
         *
         * @return bool
         * @static
         */ public static function hasGroupStack()
        {
            /** @var Router $instance */
            return $instance->hasGroupStack();
        }
        /**
         * Get the current group stack for the router.
         *
         * @return array
         * @static
         */ public static function getGroupStack()
        {
            /** @var Router $instance */
            return $instance->getGroupStack();
        }
        /**
         * Get a route parameter for the current route.
         *
         * @param string      $key
         * @param string|null $default
         * @static
         */ public static function input($key, $default = null)
        {
            /** @var Router $instance */
            return $instance->input($key, $default);
        }
        /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request
         * @static
         */ public static function getCurrentRequest()
        {
            /** @var Router $instance */
            return $instance->getCurrentRequest();
        }
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */ public static function getCurrentRoute()
        {
            /** @var Router $instance */
            return $instance->getCurrentRoute();
        }
        /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null
         * @static
         */ public static function current()
        {
            /** @var Router $instance */
            return $instance->current();
        }
        /**
         * Check if a route with the given name exists.
         *
         * @param  array|string $name
         * @return bool
         * @static
         */ public static function has($name)
        {
            /** @var Router $instance */
            return $instance->has($name);
        }
        /**
         * Get the current route name.
         *
         * @return string|null
         * @static
         */ public static function currentRouteName()
        {
            /** @var Router $instance */
            return $instance->currentRouteName();
        }
        /**
         * Alias for the "currentRouteNamed" method.
         *
         * @return bool
         * @static
         */ public static function is(...$patterns)
        {
            /** @var Router $instance */
            return $instance->is(...$patterns);
        }
        /**
         * Determine if the current route matches a pattern.
         *
         * @return bool
         * @static
         */ public static function currentRouteNamed(...$patterns)
        {
            /** @var Router $instance */
            return $instance->currentRouteNamed(...$patterns);
        }
        /**
         * Get the current route action.
         *
         * @return string|null
         * @static
         */ public static function currentRouteAction()
        {
            /** @var Router $instance */
            return $instance->currentRouteAction();
        }
        /**
         * Alias for the "currentRouteUses" method.
         *
         * @param  array|string $patterns
         * @return bool
         * @static
         */ public static function uses(...$patterns)
        {
            /** @var Router $instance */
            return $instance->uses(...$patterns);
        }
        /**
         * Determine if the current route action matches a given action.
         *
         * @param  string $action
         * @return bool
         * @static
         */ public static function currentRouteUses($action)
        {
            /** @var Router $instance */
            return $instance->currentRouteUses($action);
        }
        /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @static
         */ public static function singularResourceParameters($singular = true): void
        {
            /** @var Router $instance */
            $instance->singularResourceParameters($singular);
        }
        /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @static
         */ public static function resourceParameters($parameters = []): void
        {
            /** @var Router $instance */
            $instance->resourceParameters($parameters);
        }
        /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param  array      $verbs
         * @return array|null
         * @static
         */ public static function resourceVerbs($verbs = [])
        {
            /** @var Router $instance */
            return $instance->resourceVerbs($verbs);
        }
        /**
         * Get the underlying route collection.
         *
         * @return RouteCollectionInterface
         * @static
         */ public static function getRoutes()
        {
            /** @var Router $instance */
            return $instance->getRoutes();
        }
        /**
         * Set the route collection instance.
         *
         * @param RouteCollection $routes
         * @static
         */ public static function setRoutes($routes): void
        {
            /** @var Router $instance */
            $instance->setRoutes($routes);
        }
        /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @static
         */ public static function setCompiledRoutes($routes): void
        {
            /** @var Router $instance */
            $instance->setCompiledRoutes($routes);
        }
        /**
         * Remove any duplicate middleware from the given array.
         *
         * @param  array $middleware
         * @return array
         * @static
         */ public static function uniqueMiddleware($middleware)
        {
            return Router::uniqueMiddleware($middleware);
        }
        /**
         * Set the container instance used by the router.
         *
         * @param  \Illuminate\Container\Container $container
         * @return Router
         * @static
         */ public static function setContainer($container)
        {
            /** @var Router $instance */
            return $instance->setContainer($container);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Router::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Router::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Router::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Router::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var Router $instance */
            return $instance->macroCall($method, $parameters);
        }
        /**
         * Call the given Closure with this instance then return the instance.
         *
         * @param  (callable($this): mixed)|null                                         $callback
         * @return ($callback is null ? HigherOrderTapProxy : $this)
         * @static
         */ public static function tap($callback = null)
        {
            /** @var Router $instance */
            return $instance->tap($callback);
        }
    }
    /**
     * @method static PendingEventAttributes withoutOverlapping(int $expiresAt = 1440)
     * @method static void                                                  mergeAttributes(\Illuminate\Console\Scheduling\Event $event)
     * @method static PendingEventAttributes user(string $user)
     * @method static PendingEventAttributes environments(array|mixed $environments)
     * @method static PendingEventAttributes evenInMaintenanceMode()
     * @method static PendingEventAttributes onOneServer()
     * @method static PendingEventAttributes runInBackground()
     * @method static PendingEventAttributes when(Closure|bool $callback)
     * @method static PendingEventAttributes skip(Closure|bool $callback)
     * @method static PendingEventAttributes name(string $description)
     * @method static PendingEventAttributes description(string $description)
     * @method static PendingEventAttributes cron(string $expression)
     * @method static PendingEventAttributes between(string $startTime, string $endTime)
     * @method static PendingEventAttributes unlessBetween(string $startTime, string $endTime)
     * @method static PendingEventAttributes everySecond()
     * @method static PendingEventAttributes everyTwoSeconds()
     * @method static PendingEventAttributes everyFiveSeconds()
     * @method static PendingEventAttributes everyTenSeconds()
     * @method static PendingEventAttributes everyFifteenSeconds()
     * @method static PendingEventAttributes everyTwentySeconds()
     * @method static PendingEventAttributes everyThirtySeconds()
     * @method static PendingEventAttributes everyMinute()
     * @method static PendingEventAttributes everyTwoMinutes()
     * @method static PendingEventAttributes everyThreeMinutes()
     * @method static PendingEventAttributes everyFourMinutes()
     * @method static PendingEventAttributes everyFiveMinutes()
     * @method static PendingEventAttributes everyTenMinutes()
     * @method static PendingEventAttributes everyFifteenMinutes()
     * @method static PendingEventAttributes everyThirtyMinutes()
     * @method static PendingEventAttributes hourly()
     * @method static PendingEventAttributes hourlyAt(array|string|int $offset)
     * @method static PendingEventAttributes everyOddHour(array|string|int $offset = 0)
     * @method static PendingEventAttributes everyTwoHours(array|string|int $offset = 0)
     * @method static PendingEventAttributes everyThreeHours(array|string|int $offset = 0)
     * @method static PendingEventAttributes everyFourHours(array|string|int $offset = 0)
     * @method static PendingEventAttributes everySixHours(array|string|int $offset = 0)
     * @method static PendingEventAttributes daily()
     * @method static PendingEventAttributes at(string $time)
     * @method static PendingEventAttributes dailyAt(string $time)
     * @method static PendingEventAttributes twiceDaily(int $first = 1, int $second = 13)
     * @method static PendingEventAttributes twiceDailyAt(int $first = 1, int $second = 13, int $offset = 0)
     * @method static PendingEventAttributes weekdays()
     * @method static PendingEventAttributes weekends()
     * @method static PendingEventAttributes mondays()
     * @method static PendingEventAttributes tuesdays()
     * @method static PendingEventAttributes wednesdays()
     * @method static PendingEventAttributes thursdays()
     * @method static PendingEventAttributes fridays()
     * @method static PendingEventAttributes saturdays()
     * @method static PendingEventAttributes sundays()
     * @method static PendingEventAttributes weekly()
     * @method static PendingEventAttributes weeklyOn(array|mixed $dayOfWeek, string $time = '0:0')
     * @method static PendingEventAttributes monthly()
     * @method static PendingEventAttributes monthlyOn(int $dayOfMonth = 1, string $time = '0:0')
     * @method static PendingEventAttributes twiceMonthly(int $first = 1, int $second = 16, string $time = '0:0')
     * @method static PendingEventAttributes lastDayOfMonth(string $time = '0:0')
     * @method static PendingEventAttributes quarterly()
     * @method static PendingEventAttributes quarterlyOn(int $dayOfQuarter = 1, string $time = '0:0')
     * @method static PendingEventAttributes yearly()
     * @method static PendingEventAttributes yearlyOn(int $month = 1, int|string $dayOfMonth = 1, string $time = '0:0')
     * @method static PendingEventAttributes days(array|mixed $days)
     * @method static PendingEventAttributes timezone(DateTimeZone|string $timezone)
     * @see \Illuminate\Console\Scheduling\Schedule
     */ final class Schedule
    {
        /**
         * Add a new callback event to the schedule.
         *
         * @param  callable|string                              $callback
         * @param  array                                        $parameters
         * @return CallbackEvent
         * @static
         */ public static function call($callback, $parameters = [])
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->call($callback, $parameters);
        }
        /**
         * Add a new Artisan command event to the schedule.
         *
         * @param  string                               $command
         * @param  array                                $parameters
         * @return \Illuminate\Console\Scheduling\Event
         * @static
         */ public static function command($command, $parameters = [])
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->command($command, $parameters);
        }
        /**
         * Add a new job callback event to the schedule.
         *
         * @param  object|string                                $job
         * @param  string|null                                  $queue
         * @param  string|null                                  $connection
         * @return CallbackEvent
         * @static
         */ public static function job($job, $queue = null, $connection = null)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->job($job, $queue, $connection);
        }
        /**
         * Add a new command event to the schedule.
         *
         * @param  string                               $command
         * @param  array                                $parameters
         * @return \Illuminate\Console\Scheduling\Event
         * @static
         */ public static function exec($command, $parameters = [])
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->exec($command, $parameters);
        }
        /**
         * Create new schedule group.
         *
         * @throws RuntimeException
         * @static
         */ public static function group($events): void
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            $instance->group($events);
        }
        /**
         * Compile array input for a command.
         *
         * @param  int|string $key
         * @param  array      $value
         * @return string
         * @static
         */ public static function compileArrayInput($key, $value)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->compileArrayInput($key, $value);
        }
        /**
         * Determine if the server is allowed to run this event.
         *
         * @param  \Illuminate\Console\Scheduling\Event $event
         * @param  DateTimeInterface                   $time
         * @return bool
         * @static
         */ public static function serverShouldRun($event, $time)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->serverShouldRun($event, $time);
        }
        /**
         * Get all of the events on the schedule that are due.
         *
         * @param  Application $app
         * @return Collection
         * @static
         */ public static function dueEvents($app)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->dueEvents($app);
        }
        /**
         * Get all of the events on the schedule.
         *
         * @return \Illuminate\Console\Scheduling\Event[]
         * @static
         */ public static function events()
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->events();
        }
        /**
         * Specify the cache store that should be used to store mutexes.
         *
         * @param  string                                  $store
         * @return \Illuminate\Console\Scheduling\Schedule
         * @static
         */ public static function useCache($store)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->useCache($store);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Console\Scheduling\Schedule::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Console\Scheduling\Schedule::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Console\Scheduling\Schedule::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Console\Scheduling\Schedule::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {
            /** @var \Illuminate\Console\Scheduling\Schedule $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    /**
     * @see \Illuminate\Database\Schema\Builder
     */ final class Schema
    {
        /**
         * Create a database in the schema.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function createDatabase($name)
        {
            /** @var PostgresBuilder $instance */
            return $instance->createDatabase($name);
        }
        /**
         * Drop a database from the schema if the database exists.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function dropDatabaseIfExists($name)
        {
            /** @var PostgresBuilder $instance */
            return $instance->dropDatabaseIfExists($name);
        }
        /**
         * Determine if the given table exists.
         *
         * @param  string $table
         * @return bool
         * @static
         */ public static function hasTable($table)
        {
            /** @var PostgresBuilder $instance */
            return $instance->hasTable($table);
        }
        /**
         * Determine if the given view exists.
         *
         * @param  string $view
         * @return bool
         * @static
         */ public static function hasView($view)
        {
            /** @var PostgresBuilder $instance */
            return $instance->hasView($view);
        }
        /**
         * Get the user-defined types that belong to the database.
         *
         * @return array
         * @static
         */ public static function getTypes()
        {
            /** @var PostgresBuilder $instance */
            return $instance->getTypes();
        }
        /**
         * Drop all tables from the database.
         *
         * @static
         */ public static function dropAllTables(): void
        {
            /** @var PostgresBuilder $instance */
            $instance->dropAllTables();
        }
        /**
         * Drop all views from the database.
         *
         * @static
         */ public static function dropAllViews(): void
        {
            /** @var PostgresBuilder $instance */
            $instance->dropAllViews();
        }
        /**
         * Drop all types from the database.
         *
         * @static
         */ public static function dropAllTypes(): void
        {
            /** @var PostgresBuilder $instance */
            $instance->dropAllTypes();
        }
        /**
         * Get the columns for a given table.
         *
         * @param  string $table
         * @return array
         * @static
         */ public static function getColumns($table)
        {
            /** @var PostgresBuilder $instance */
            return $instance->getColumns($table);
        }
        /**
         * Get the indexes for a given table.
         *
         * @param  string $table
         * @return array
         * @static
         */ public static function getIndexes($table)
        {
            /** @var PostgresBuilder $instance */
            return $instance->getIndexes($table);
        }
        /**
         * Get the foreign keys for a given table.
         *
         * @param  string $table
         * @return array
         * @static
         */ public static function getForeignKeys($table)
        {
            /** @var PostgresBuilder $instance */
            return $instance->getForeignKeys($table);
        }
        /**
         * Get the schemas for the connection.
         *
         * @return array
         * @static
         */ public static function getSchemas()
        {
            /** @var PostgresBuilder $instance */
            return $instance->getSchemas();
        }
        /**
         * Parse the database object reference and extract the schema and table.
         *
         * @param  string $reference
         * @return array
         * @static
         */ public static function parseSchemaAndTable($reference)
        {
            /** @var PostgresBuilder $instance */
            return $instance->parseSchemaAndTable($reference);
        }
        /**
         * Set the default string length for migrations.
         *
         * @param int $length
         * @static
         */ public static function defaultStringLength($length): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::defaultStringLength($length);
        }
        /**
         * Set the default morph key type for migrations.
         *
         * @param  string                    $type
         * @throws InvalidArgumentException
         * @static
         */ public static function defaultMorphKeyType($type): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::defaultMorphKeyType($type);
        }
        /**
         * Set the default morph key type for migrations to UUIDs.
         *
         * @static
         */ public static function morphUsingUuids(): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::morphUsingUuids();
        }
        /**
         * Set the default morph key type for migrations to ULIDs.
         *
         * @static
         */ public static function morphUsingUlids(): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::morphUsingUlids();
        }
        /**
         * Get the tables that belong to the database.
         *
         * @return array
         * @static
         */ public static function getTables()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getTables();
        }
        /**
         * Get the names of the tables that belong to the database.
         *
         * @return array
         * @static
         */ public static function getTableListing()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getTableListing();
        }
        /**
         * Get the views that belong to the database.
         *
         * @return array
         * @static
         */ public static function getViews()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getViews();
        }
        /**
         * Determine if the given table has a given column.
         *
         * @param  string $table
         * @param  string $column
         * @return bool
         * @static
         */ public static function hasColumn($table, $column)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->hasColumn($table, $column);
        }
        /**
         * Determine if the given table has given columns.
         *
         * @param  string $table
         * @param  array  $columns
         * @return bool
         * @static
         */ public static function hasColumns($table, $columns)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->hasColumns($table, $columns);
        }
        /**
         * Execute a table builder callback if the given table has a given column.
         *
         * @param string   $table
         * @param string   $column
         * @param Closure $callback
         * @static
         */ public static function whenTableHasColumn($table, $column, $callback): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->whenTableHasColumn($table, $column, $callback);
        }
        /**
         * Execute a table builder callback if the given table doesn't have a given column.
         *
         * @param string   $table
         * @param string   $column
         * @param Closure $callback
         * @static
         */ public static function whenTableDoesntHaveColumn($table, $column, $callback): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->whenTableDoesntHaveColumn($table, $column, $callback);
        }
        /**
         * Get the data type for the given column name.
         *
         * @param  string $table
         * @param  string $column
         * @param  bool   $fullDefinition
         * @return string
         * @static
         */ public static function getColumnType($table, $column, $fullDefinition = false)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getColumnType($table, $column, $fullDefinition);
        }
        /**
         * Get the column listing for a given table.
         *
         * @param  string $table
         * @return array
         * @static
         */ public static function getColumnListing($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getColumnListing($table);
        }
        /**
         * Get the names of the indexes for a given table.
         *
         * @param  string $table
         * @return array
         * @static
         */ public static function getIndexListing($table)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getIndexListing($table);
        }
        /**
         * Determine if the given table has a given index.
         *
         * @param  string       $table
         * @param  array|string $index
         * @param  string|null  $type
         * @return bool
         * @static
         */ public static function hasIndex($table, $index, $type = null)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->hasIndex($table, $index, $type);
        }
        /**
         * Modify a table on the schema.
         *
         * @param string   $table
         * @param Closure $callback
         * @static
         */ public static function table($table, $callback): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->table($table, $callback);
        }
        /**
         * Create a new table on the schema.
         *
         * @param string   $table
         * @param Closure $callback
         * @static
         */ public static function create($table, $callback): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->create($table, $callback);
        }
        /**
         * Drop a table from the schema.
         *
         * @param string $table
         * @static
         */ public static function drop($table): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->drop($table);
        }
        /**
         * Drop a table from the schema if it exists.
         *
         * @param string $table
         * @static
         */ public static function dropIfExists($table): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->dropIfExists($table);
        }
        /**
         * Drop columns from a table schema.
         *
         * @param string       $table
         * @param array|string $columns
         * @static
         */ public static function dropColumns($table, $columns): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->dropColumns($table, $columns);
        }
        /**
         * Rename a table on the schema.
         *
         * @param string $from
         * @param string $to
         * @static
         */ public static function rename($from, $to): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->rename($from, $to);
        }
        /**
         * Enable foreign key constraints.
         *
         * @return bool
         * @static
         */ public static function enableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->enableForeignKeyConstraints();
        }
        /**
         * Disable foreign key constraints.
         *
         * @return bool
         * @static
         */ public static function disableForeignKeyConstraints()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->disableForeignKeyConstraints();
        }
        /**
         * Disable foreign key constraints during the execution of a callback.
         *
         * @param Closure $callback
         * @static
         */ public static function withoutForeignKeyConstraints($callback)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->withoutForeignKeyConstraints($callback);
        }
        /**
         * Get the database connection instance.
         *
         * @return Connection
         * @static
         */ public static function getConnection()
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->getConnection();
        }
        /**
         * Set the database connection instance.
         *
         * @param  Connection             $connection
         * @return PostgresBuilder
         * @static
         */ public static function setConnection($connection)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            return $instance->setConnection($connection);
        }
        /**
         * Set the Schema Blueprint resolver callback.
         *
         * @param Closure $resolver
         * @static
         */ public static function blueprintResolver($resolver): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            /** @var PostgresBuilder $instance */
            $instance->blueprintResolver($resolver);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            return PostgresBuilder::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {            //Method inherited from \Illuminate\Database\Schema\Builder
            PostgresBuilder::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Session\SessionManager
     */ final class Session
    {
        /**
         * Determine if requests for the same session should wait for each to finish before executing.
         *
         * @return bool
         * @static
         */ public static function shouldBlock()
        {
            /** @var SessionManager $instance */
            return $instance->shouldBlock();
        }
        /**
         * Get the name of the cache store / driver that should be used to acquire session locks.
         *
         * @return string|null
         * @static
         */ public static function blockDriver()
        {
            /** @var SessionManager $instance */
            return $instance->blockDriver();
        }
        /**
         * Get the maximum number of seconds the session lock should be held for.
         *
         * @return int
         * @static
         */ public static function defaultRouteBlockLockSeconds()
        {
            /** @var SessionManager $instance */
            return $instance->defaultRouteBlockLockSeconds();
        }
        /**
         * Get the maximum number of seconds to wait while attempting to acquire a route block session lock.
         *
         * @return int
         * @static
         */ public static function defaultRouteBlockWaitSeconds()
        {
            /** @var SessionManager $instance */
            return $instance->defaultRouteBlockWaitSeconds();
        }
        /**
         * Get the session configuration.
         *
         * @return array
         * @static
         */ public static function getSessionConfig()
        {
            /** @var SessionManager $instance */
            return $instance->getSessionConfig();
        }
        /**
         * Get the default session driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var SessionManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Set the default session driver name.
         *
         * @param string $name
         * @static
         */ public static function setDefaultDriver($name): void
        {
            /** @var SessionManager $instance */
            $instance->setDefaultDriver($name);
        }
        /**
         * Get a driver instance.
         *
         * @param  string|null               $driver
         * @throws InvalidArgumentException
         * @static
         */ public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->driver($driver);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                             $driver
         * @param  Closure                           $callback
         * @return SessionManager
         * @static
         */ public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */ public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->getDrivers();
        }
        /**
         * Get the container instance used by the manager.
         *
         * @return Container
         * @static
         */ public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->getContainer();
        }
        /**
         * Set the container instance used by the manager.
         *
         * @param  Container $container
         * @return SessionManager
         * @static
         */ public static function setContainer($container)
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->setContainer($container);
        }
        /**
         * Forget all of the resolved driver instances.
         *
         * @return SessionManager
         * @static
         */ public static function forgetDrivers()
        {            //Method inherited from \Illuminate\Support\Manager
            /** @var SessionManager $instance */
            return $instance->forgetDrivers();
        }
        /**
         * Start the session, reading the data from a handler.
         *
         * @return bool
         * @static
         */ public static function start()
        {
            /** @var Store $instance */
            return $instance->start();
        }
        /**
         * Save the session data to storage.
         *
         * @static
         */ public static function save(): void
        {
            /** @var Store $instance */
            $instance->save();
        }
        /**
         * Age the flash data for the session.
         *
         * @static
         */ public static function ageFlashData(): void
        {
            /** @var Store $instance */
            $instance->ageFlashData();
        }
        /**
         * Get all of the session data.
         *
         * @return array
         * @static
         */ public static function all()
        {
            /** @var Store $instance */
            return $instance->all();
        }
        /**
         * Get a subset of the session data.
         *
         * @param  array $keys
         * @return array
         * @static
         */ public static function only($keys)
        {
            /** @var Store $instance */
            return $instance->only($keys);
        }
        /**
         * Get all the session data except for a specified array of items.
         *
         * @param  array $keys
         * @return array
         * @static
         */ public static function except($keys)
        {
            /** @var Store $instance */
            return $instance->except($keys);
        }
        /**
         * Checks if a key exists.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function exists($key)
        {
            /** @var Store $instance */
            return $instance->exists($key);
        }
        /**
         * Determine if the given key is missing from the session data.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function missing($key)
        {
            /** @var Store $instance */
            return $instance->missing($key);
        }
        /**
         * Determine if a key is present and not null.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function has($key)
        {
            /** @var Store $instance */
            return $instance->has($key);
        }
        /**
         * Determine if any of the given keys are present and not null.
         *
         * @param  array|string $key
         * @return bool
         * @static
         */ public static function hasAny($key)
        {
            /** @var Store $instance */
            return $instance->hasAny($key);
        }
        /**
         * Get an item from the session.
         *
         * @param string $key
         * @static
         */ public static function get($key, $default = null)
        {
            /** @var Store $instance */
            return $instance->get($key, $default);
        }
        /**
         * Get the value of a given key and then forget it.
         *
         * @param string $key
         * @static
         */ public static function pull($key, $default = null)
        {
            /** @var Store $instance */
            return $instance->pull($key, $default);
        }
        /**
         * Determine if the session contains old input.
         *
         * @param  string|null $key
         * @return bool
         * @static
         */ public static function hasOldInput($key = null)
        {
            /** @var Store $instance */
            return $instance->hasOldInput($key);
        }
        /**
         * Get the requested item from the flashed input array.
         *
         * @param string|null $key
         * @static
         */ public static function getOldInput($key = null, $default = null)
        {
            /** @var Store $instance */
            return $instance->getOldInput($key, $default);
        }
        /**
         * Replace the given session attributes entirely.
         *
         * @param array $attributes
         * @static
         */ public static function replace($attributes): void
        {
            /** @var Store $instance */
            $instance->replace($attributes);
        }
        /**
         * Put a key / value pair or array of key / value pairs in the session.
         *
         * @param array|string $key
         * @static
         */ public static function put($key, $value = null): void
        {
            /** @var Store $instance */
            $instance->put($key, $value);
        }
        /**
         * Get an item from the session, or store the default value.
         *
         * @param string   $key
         * @param Closure $callback
         * @static
         */ public static function remember($key, $callback)
        {
            /** @var Store $instance */
            return $instance->remember($key, $callback);
        }
        /**
         * Push a value onto a session array.
         *
         * @param string $key
         * @static
         */ public static function push($key, $value): void
        {
            /** @var Store $instance */
            $instance->push($key, $value);
        }
        /**
         * Increment the value of an item in the session.
         *
         * @param string $key
         * @param int    $amount
         * @static
         */ public static function increment($key, $amount = 1)
        {
            /** @var Store $instance */
            return $instance->increment($key, $amount);
        }
        /**
         * Decrement the value of an item in the session.
         *
         * @param  string $key
         * @param  int    $amount
         * @return int
         * @static
         */ public static function decrement($key, $amount = 1)
        {
            /** @var Store $instance */
            return $instance->decrement($key, $amount);
        }
        /**
         * Flash a key / value pair to the session.
         *
         * @param string $key
         * @static
         */ public static function flash($key, $value = true): void
        {
            /** @var Store $instance */
            $instance->flash($key, $value);
        }
        /**
         * Flash a key / value pair to the session for immediate use.
         *
         * @param string $key
         * @static
         */ public static function now($key, $value): void
        {
            /** @var Store $instance */
            $instance->now($key, $value);
        }
        /**
         * Reflash all of the session flash data.
         *
         * @static
         */ public static function reflash(): void
        {
            /** @var Store $instance */
            $instance->reflash();
        }
        /**
         * Reflash a subset of the current flash data.
         *
         * @param array|mixed $keys
         * @static
         */ public static function keep($keys = null): void
        {
            /** @var Store $instance */
            $instance->keep($keys);
        }
        /**
         * Flash an input array to the session.
         *
         * @param array $value
         * @static
         */ public static function flashInput($value): void
        {
            /** @var Store $instance */
            $instance->flashInput($value);
        }
        /**
         * Remove an item from the session, returning its value.
         *
         * @param string $key
         * @static
         */ public static function remove($key)
        {
            /** @var Store $instance */
            return $instance->remove($key);
        }
        /**
         * Remove one or many items from the session.
         *
         * @param array|string $keys
         * @static
         */ public static function forget($keys): void
        {
            /** @var Store $instance */
            $instance->forget($keys);
        }
        /**
         * Remove all of the items from the session.
         *
         * @static
         */ public static function flush(): void
        {
            /** @var Store $instance */
            $instance->flush();
        }
        /**
         * Flush the session data and regenerate the ID.
         *
         * @return bool
         * @static
         */ public static function invalidate()
        {
            /** @var Store $instance */
            return $instance->invalidate();
        }
        /**
         * Generate a new session identifier.
         *
         * @param  bool $destroy
         * @return bool
         * @static
         */ public static function regenerate($destroy = false)
        {
            /** @var Store $instance */
            return $instance->regenerate($destroy);
        }
        /**
         * Generate a new session ID for the session.
         *
         * @param  bool $destroy
         * @return bool
         * @static
         */ public static function migrate($destroy = false)
        {
            /** @var Store $instance */
            return $instance->migrate($destroy);
        }
        /**
         * Determine if the session has been started.
         *
         * @return bool
         * @static
         */ public static function isStarted()
        {
            /** @var Store $instance */
            return $instance->isStarted();
        }
        /**
         * Get the name of the session.
         *
         * @return string
         * @static
         */ public static function getName()
        {
            /** @var Store $instance */
            return $instance->getName();
        }
        /**
         * Set the name of the session.
         *
         * @param string $name
         * @static
         */ public static function setName($name): void
        {
            /** @var Store $instance */
            $instance->setName($name);
        }
        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */ public static function id()
        {
            /** @var Store $instance */
            return $instance->id();
        }
        /**
         * Get the current session ID.
         *
         * @return string
         * @static
         */ public static function getId()
        {
            /** @var Store $instance */
            return $instance->getId();
        }
        /**
         * Set the session ID.
         *
         * @param string|null $id
         * @static
         */ public static function setId($id): void
        {
            /** @var Store $instance */
            $instance->setId($id);
        }
        /**
         * Determine if this is a valid session ID.
         *
         * @param  string|null $id
         * @return bool
         * @static
         */ public static function isValidId($id)
        {
            /** @var Store $instance */
            return $instance->isValidId($id);
        }
        /**
         * Set the existence of the session on the handler if applicable.
         *
         * @param bool $value
         * @static
         */ public static function setExists($value): void
        {
            /** @var Store $instance */
            $instance->setExists($value);
        }
        /**
         * Get the CSRF token value.
         *
         * @return string
         * @static
         */ public static function token()
        {
            /** @var Store $instance */
            return $instance->token();
        }
        /**
         * Regenerate the CSRF token value.
         *
         * @static
         */ public static function regenerateToken(): void
        {
            /** @var Store $instance */
            $instance->regenerateToken();
        }
        /**
         * Determine if the previous URI is available.
         *
         * @return bool
         * @static
         */ public static function hasPreviousUri()
        {
            /** @var Store $instance */
            return $instance->hasPreviousUri();
        }
        /**
         * Get the previous URL from the session as a URI instance.
         *
         * @throws RuntimeException
         * @return Uri
         * @static
         */ public static function previousUri()
        {
            /** @var Store $instance */
            return $instance->previousUri();
        }
        /**
         * Get the previous URL from the session.
         *
         * @return string|null
         * @static
         */ public static function previousUrl()
        {
            /** @var Store $instance */
            return $instance->previousUrl();
        }
        /**
         * Set the "previous" URL in the session.
         *
         * @param string $url
         * @static
         */ public static function setPreviousUrl($url): void
        {
            /** @var Store $instance */
            $instance->setPreviousUrl($url);
        }
        /**
         * Specify that the user has confirmed their password.
         *
         * @static
         */ public static function passwordConfirmed(): void
        {
            /** @var Store $instance */
            $instance->passwordConfirmed();
        }
        /**
         * Get the underlying session handler implementation.
         *
         * @return SessionHandlerInterface
         * @static
         */ public static function getHandler()
        {
            /** @var Store $instance */
            return $instance->getHandler();
        }
        /**
         * Set the underlying session handler implementation.
         *
         * @param  SessionHandlerInterface $handler
         * @return SessionHandlerInterface
         * @static
         */ public static function setHandler($handler)
        {
            /** @var Store $instance */
            return $instance->setHandler($handler);
        }
        /**
         * Determine if the session handler needs a request.
         *
         * @return bool
         * @static
         */ public static function handlerNeedsRequest()
        {
            /** @var Store $instance */
            return $instance->handlerNeedsRequest();
        }
        /**
         * Set the request on the handler instance.
         *
         * @param \Illuminate\Http\Request $request
         * @static
         */ public static function setRequestOnHandler($request): void
        {
            /** @var Store $instance */
            $instance->setRequestOnHandler($request);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Store::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Store::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Store::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Store::flushMacros();
        }
    }
    /**
     * @method static bool                               has(string $location)
     * @method static string                             read(string $location)
     * @method static DirectoryListing listContents(string $location, bool $deep = false)
     * @method static int                                fileSize(string $path)
     * @method static string                             visibility(string $path)
     * @method static void                               write(string $location, string $contents, array $config = [])
     * @method static void                               createDirectory(string $location, array $config = [])
     * @see \Illuminate\Filesystem\FilesystemManager
     */ final class Storage
    {
        /**
         * Get a filesystem instance.
         *
         * @param  string|null                                   $name
         * @return LocalFilesystemAdapter
         * @static
         */ public static function drive($name = null)
        {
            /** @var FilesystemManager $instance */
            return $instance->drive($name);
        }
        /**
         * Get a filesystem instance.
         *
         * @param  string|null                                   $name
         * @return LocalFilesystemAdapter
         * @static
         */ public static function disk($name = null)
        {
            /** @var FilesystemManager $instance */
            return $instance->disk($name);
        }
        /**
         * Get a default cloud filesystem instance.
         *
         * @return Cloud
         * @static
         */ public static function cloud()
        {
            /** @var FilesystemManager $instance */
            return $instance->cloud();
        }
        /**
         * Build an on-demand disk.
         *
         * @param  array|string                                  $config
         * @return LocalFilesystemAdapter
         * @static
         */ public static function build($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->build($config);
        }
        /**
         * Create an instance of the local driver.
         *
         * @param  array                                         $config
         * @param  string                                        $name
         * @return LocalFilesystemAdapter
         * @static
         */ public static function createLocalDriver($config, $name = 'local')
        {
            /** @var FilesystemManager $instance */
            return $instance->createLocalDriver($config, $name);
        }
        /**
         * Create an instance of the ftp driver.
         *
         * @param  array                                         $config
         * @return LocalFilesystemAdapter
         * @static
         */ public static function createFtpDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createFtpDriver($config);
        }
        /**
         * Create an instance of the sftp driver.
         *
         * @param  array                                         $config
         * @return LocalFilesystemAdapter
         * @static
         */ public static function createSftpDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createSftpDriver($config);
        }
        /**
         * Create an instance of the Amazon S3 driver.
         *
         * @param  array                                  $config
         * @return Cloud
         * @static
         */ public static function createS3Driver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createS3Driver($config);
        }
        /**
         * Create a scoped driver.
         *
         * @param  array                                         $config
         * @return LocalFilesystemAdapter
         * @static
         */ public static function createScopedDriver($config)
        {
            /** @var FilesystemManager $instance */
            return $instance->createScopedDriver($config);
        }
        /**
         * Set the given disk instance.
         *
         * @param  string                                   $name
         * @return FilesystemManager
         * @static
         */ public static function set($name, $disk)
        {
            /** @var FilesystemManager $instance */
            return $instance->set($name, $disk);
        }
        /**
         * Get the default driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultDriver()
        {
            /** @var FilesystemManager $instance */
            return $instance->getDefaultDriver();
        }
        /**
         * Get the default cloud driver name.
         *
         * @return string
         * @static
         */ public static function getDefaultCloudDriver()
        {
            /** @var FilesystemManager $instance */
            return $instance->getDefaultCloudDriver();
        }
        /**
         * Unset the given disk instances.
         *
         * @param  array|string                             $disk
         * @return FilesystemManager
         * @static
         */ public static function forgetDisk($disk)
        {
            /** @var FilesystemManager $instance */
            return $instance->forgetDisk($disk);
        }
        /**
         * Disconnect the given disk and remove from local cache.
         *
         * @param string|null $name
         * @static
         */ public static function purge($name = null): void
        {
            /** @var FilesystemManager $instance */
            $instance->purge($name);
        }
        /**
         * Register a custom driver creator Closure.
         *
         * @param  string                                   $driver
         * @param  Closure                                 $callback
         * @return FilesystemManager
         * @static
         */ public static function extend($driver, $callback)
        {
            /** @var FilesystemManager $instance */
            return $instance->extend($driver, $callback);
        }
        /**
         * Set the application instance used by the manager.
         *
         * @param  Application $app
         * @return FilesystemManager
         * @static
         */ public static function setApplication($app)
        {
            /** @var FilesystemManager $instance */
            return $instance->setApplication($app);
        }
        /**
         * Determine if temporary URLs can be generated.
         *
         * @return bool
         * @static
         */ public static function providesTemporaryUrls()
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->providesTemporaryUrls();
        }
        /**
         * Get a temporary URL for the file at the given path.
         *
         * @param  string             $path
         * @param  DateTimeInterface $expiration
         * @param  array              $options
         * @return string
         * @static
         */ public static function temporaryUrl($path, $expiration, $options = [])
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->temporaryUrl($path, $expiration, $options);
        }
        /**
         * Specify the name of the disk the adapter is managing.
         *
         * @param  string                                        $disk
         * @return LocalFilesystemAdapter
         * @static
         */ public static function diskName($disk)
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->diskName($disk);
        }
        /**
         * Indiate that signed URLs should serve the corresponding files.
         *
         * @param  bool                                          $serve
         * @param  Closure|null                                 $urlGeneratorResolver
         * @return LocalFilesystemAdapter
         * @static
         */ public static function shouldServeSignedUrls($serve = true, $urlGeneratorResolver = null)
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->shouldServeSignedUrls($serve, $urlGeneratorResolver);
        }
        /**
         * Assert that the given file or directory exists.
         *
         * @param  array|string                                  $path
         * @param  string|null                                   $content
         * @return LocalFilesystemAdapter
         * @static
         */ public static function assertExists($path, $content = null)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->assertExists($path, $content);
        }
        /**
         * Assert that the number of files in path equals the expected count.
         *
         * @param  string                                        $path
         * @param  int                                           $count
         * @param  bool                                          $recursive
         * @return LocalFilesystemAdapter
         * @static
         */ public static function assertCount($path, $count, $recursive = false)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->assertCount($path, $count, $recursive);
        }
        /**
         * Assert that the given file or directory does not exist.
         *
         * @param  array|string                                  $path
         * @return LocalFilesystemAdapter
         * @static
         */ public static function assertMissing($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->assertMissing($path);
        }
        /**
         * Assert that the given directory is empty.
         *
         * @param  string                                        $path
         * @return LocalFilesystemAdapter
         * @static
         */ public static function assertDirectoryEmpty($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->assertDirectoryEmpty($path);
        }
        /**
         * Determine if a file or directory exists.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function exists($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->exists($path);
        }
        /**
         * Determine if a file or directory is missing.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function missing($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->missing($path);
        }
        /**
         * Determine if a file exists.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function fileExists($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->fileExists($path);
        }
        /**
         * Determine if a file is missing.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function fileMissing($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->fileMissing($path);
        }
        /**
         * Determine if a directory exists.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function directoryExists($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->directoryExists($path);
        }
        /**
         * Determine if a directory is missing.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function directoryMissing($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->directoryMissing($path);
        }
        /**
         * Get the full path to the file that exists at the given relative path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function path($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->path($path);
        }
        /**
         * Get the contents of a file.
         *
         * @param  string      $path
         * @return string|null
         * @static
         */ public static function get($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->get($path);
        }
        /**
         * Get the contents of a file as decoded JSON.
         *
         * @param  string     $path
         * @param  int        $flags
         * @return array|null
         * @static
         */ public static function json($path, $flags = 0)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->json($path, $flags);
        }
        /**
         * Create a streamed response for a given file.
         *
         * @param  string                                             $path
         * @param  string|null                                        $name
         * @param  array                                              $headers
         * @param  string|null                                        $disposition
         * @return StreamedResponse
         * @static
         */ public static function response($path, $name = null, $headers = [], $disposition = 'inline')
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->response($path, $name, $headers, $disposition);
        }
        /**
         * Create a streamed download response for a given file.
         *
         * @param  \Illuminate\Http\Request                           $request
         * @param  string                                             $path
         * @param  string|null                                        $name
         * @param  array                                              $headers
         * @return StreamedResponse
         * @static
         */ public static function serve($request, $path, $name = null, $headers = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->serve($request, $path, $name, $headers);
        }
        /**
         * Create a streamed download response for a given file.
         *
         * @param  string                                             $path
         * @param  string|null                                        $name
         * @param  array                                              $headers
         * @return StreamedResponse
         * @static
         */ public static function download($path, $name = null, $headers = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->download($path, $name, $headers);
        }
        /**
         * Write the contents of a file.
         *
         * @param  string                                                                                                $path
         * @param  \Illuminate\Http\File|UploadedFile|StreamInterface|resource|string $contents
         * @return bool|string
         * @static
         */ public static function put($path, $contents, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->put($path, $contents, $options);
        }
        /**
         * Store the uploaded file on the disk.
         *
         * @param  \Illuminate\Http\File|UploadedFile|string            $path
         * @param  array|\Illuminate\Http\File|UploadedFile|string|null $file
         * @return false|string
         * @static
         */ public static function putFile($path, $file = null, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->putFile($path, $file, $options);
        }
        /**
         * Store the uploaded file on the disk with a given name.
         *
         * @param  \Illuminate\Http\File|UploadedFile|string            $path
         * @param  array|\Illuminate\Http\File|UploadedFile|string|null $file
         * @param  array|string|null                                                     $name
         * @return false|string
         * @static
         */ public static function putFileAs($path, $file, $name = null, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->putFileAs($path, $file, $name, $options);
        }
        /**
         * Get the visibility for the given path.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function getVisibility($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->getVisibility($path);
        }
        /**
         * Set the visibility for the given path.
         *
         * @param  string $path
         * @param  string $visibility
         * @return bool
         * @static
         */ public static function setVisibility($path, $visibility)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->setVisibility($path, $visibility);
        }
        /**
         * Prepend to a file.
         *
         * @param  string $path
         * @param  string $data
         * @param  string $separator
         * @return bool
         * @static
         */ public static function prepend($path, $data, $separator = '
')
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->prepend($path, $data, $separator);
        }
        /**
         * Append to a file.
         *
         * @param  string $path
         * @param  string $data
         * @param  string $separator
         * @return bool
         * @static
         */ public static function append($path, $data, $separator = '
')
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->append($path, $data, $separator);
        }
        /**
         * Delete the file at a given path.
         *
         * @param  array|string $paths
         * @return bool
         * @static
         */ public static function delete($paths)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->delete($paths);
        }
        /**
         * Copy a file to a new location.
         *
         * @param  string $from
         * @param  string $to
         * @return bool
         * @static
         */ public static function copy($from, $to)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->copy($from, $to);
        }
        /**
         * Move a file to a new location.
         *
         * @param  string $from
         * @param  string $to
         * @return bool
         * @static
         */ public static function move($from, $to)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->move($from, $to);
        }
        /**
         * Get the file size of a given file.
         *
         * @param  string $path
         * @return int
         * @static
         */ public static function size($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->size($path);
        }
        /**
         * Get the checksum for a file.
         *
         * @throws UnableToProvideChecksum
         * @return false|string
         * @static
         */ public static function checksum($path, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->checksum($path, $options);
        }
        /**
         * Get the mime-type of a given file.
         *
         * @param  string       $path
         * @return false|string
         * @static
         */ public static function mimeType($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->mimeType($path);
        }
        /**
         * Get the file's last modification time.
         *
         * @param  string $path
         * @return int
         * @static
         */ public static function lastModified($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->lastModified($path);
        }
        /**
         * Get a resource to read the file.
         *
         * @param  string        $path
         * @return resource|null The path resource or null on failure.
         * @static
         */ public static function readStream($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->readStream($path);
        }
        /**
         * Write a new file using a stream.
         *
         * @param  string   $path
         * @param  resource $resource
         * @param  array    $options
         * @return bool
         * @static
         */ public static function writeStream($path, $resource, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->writeStream($path, $resource, $options);
        }
        /**
         * Get the URL for the file at the given path.
         *
         * @param  string            $path
         * @throws RuntimeException
         * @return string
         * @static
         */ public static function url($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->url($path);
        }
        /**
         * Get a temporary upload URL for the file at the given path.
         *
         * @param  string             $path
         * @param  DateTimeInterface $expiration
         * @param  array              $options
         * @throws RuntimeException
         * @return array
         * @static
         */ public static function temporaryUploadUrl($path, $expiration, $options = [])
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->temporaryUploadUrl($path, $expiration, $options);
        }
        /**
         * Get an array of all files in a directory.
         *
         * @param  string|null $directory
         * @param  bool        $recursive
         * @return array
         * @static
         */ public static function files($directory = null, $recursive = false)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->files($directory, $recursive);
        }
        /**
         * Get all of the files from the given directory (recursive).
         *
         * @param  string|null $directory
         * @return array
         * @static
         */ public static function allFiles($directory = null)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->allFiles($directory);
        }
        /**
         * Get all of the directories within a given directory.
         *
         * @param  string|null $directory
         * @param  bool        $recursive
         * @return array
         * @static
         */ public static function directories($directory = null, $recursive = false)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->directories($directory, $recursive);
        }
        /**
         * Get all the directories within a given directory (recursive).
         *
         * @param  string|null $directory
         * @return array
         * @static
         */ public static function allDirectories($directory = null)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->allDirectories($directory);
        }
        /**
         * Create a directory.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function makeDirectory($path)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->makeDirectory($path);
        }
        /**
         * Recursively delete a directory.
         *
         * @param  string $directory
         * @return bool
         * @static
         */ public static function deleteDirectory($directory)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->deleteDirectory($directory);
        }
        /**
         * Get the Flysystem driver.
         *
         * @return FilesystemOperator
         * @static
         */ public static function getDriver()
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->getDriver();
        }
        /**
         * Get the Flysystem adapter.
         *
         * @return FilesystemAdapter
         * @static
         */ public static function getAdapter()
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->getAdapter();
        }
        /**
         * Get the configuration values.
         *
         * @return array
         * @static
         */ public static function getConfig()
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->getConfig();
        }
        /**
         * Define a custom callback that generates file download responses.
         *
         * @param Closure $callback
         * @static
         */ public static function serveUsing($callback): void
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            $instance->serveUsing($callback);
        }
        /**
         * Define a custom temporary URL builder callback.
         *
         * @param Closure $callback
         * @static
         */ public static function buildTemporaryUrlsUsing($callback): void
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            $instance->buildTemporaryUrlsUsing($callback);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) truthy.
         *
         * @template TWhenParameter
         * @template TWhenReturnType
         * @param  (Closure($this): TWhenParameter)|TWhenParameter|null $value
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                      $callback
         * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                      $default
         * @return $this|TWhenReturnType
         * @static
         */ public static function when($value = null, $callback = null, $default = null)
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
         * Apply the callback if the given "value" is (or resolves to) falsy.
         *
         * @template TUnlessParameter
         * @template TUnlessReturnType
         * @param  (Closure($this): TUnlessParameter)|TUnlessParameter|null $value
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                      $callback
         * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                      $default
         * @return $this|TUnlessReturnType
         * @static
         */ public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var LocalFilesystemAdapter $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            LocalFilesystemAdapter::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            LocalFilesystemAdapter::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            return LocalFilesystemAdapter::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            LocalFilesystemAdapter::flushMacros();
        }
        /**
         * Dynamically handle calls to the class.
         *
         * @param  string                  $method
         * @param  array                   $parameters
         * @throws BadMethodCallException
         * @static
         */ public static function macroCall($method, $parameters)
        {            //Method inherited from \Illuminate\Filesystem\FilesystemAdapter
            /** @var LocalFilesystemAdapter $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    /**
     * @see \Illuminate\Routing\UrlGenerator
     */ final class URL
    {
        /**
         * Get the full URL for the current request.
         *
         * @return string
         * @static
         */ public static function full()
        {
            /** @var UrlGenerator $instance */
            return $instance->full();
        }
        /**
         * Get the current URL for the request.
         *
         * @return string
         * @static
         */ public static function current()
        {
            /** @var UrlGenerator $instance */
            return $instance->current();
        }
        /**
         * Get the URL for the previous request.
         *
         * @return string
         * @static
         */ public static function previous($fallback = false)
        {
            /** @var UrlGenerator $instance */
            return $instance->previous($fallback);
        }
        /**
         * Get the previous path info for the request.
         *
         * @return string
         * @static
         */ public static function previousPath($fallback = false)
        {
            /** @var UrlGenerator $instance */
            return $instance->previousPath($fallback);
        }
        /**
         * Generate an absolute URL to the given path.
         *
         * @param  string    $path
         * @param  bool|null $secure
         * @return string
         * @static
         */ public static function to($path, $extra = [], $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->to($path, $extra, $secure);
        }
        /**
         * Generate an absolute URL with the given query parameters.
         *
         * @param  string    $path
         * @param  array     $query
         * @param  bool|null $secure
         * @return string
         * @static
         */ public static function query($path, $query = [], $extra = [], $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->query($path, $query, $extra, $secure);
        }
        /**
         * Generate a secure, absolute URL to the given path.
         *
         * @param  string $path
         * @param  array  $parameters
         * @return string
         * @static
         */ public static function secure($path, $parameters = [])
        {
            /** @var UrlGenerator $instance */
            return $instance->secure($path, $parameters);
        }
        /**
         * Generate the URL to an application asset.
         *
         * @param  string    $path
         * @param  bool|null $secure
         * @return string
         * @static
         */ public static function asset($path, $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->asset($path, $secure);
        }
        /**
         * Generate the URL to a secure asset.
         *
         * @param  string $path
         * @return string
         * @static
         */ public static function secureAsset($path)
        {
            /** @var UrlGenerator $instance */
            return $instance->secureAsset($path);
        }
        /**
         * Generate the URL to an asset from a custom root domain such as CDN, etc.
         *
         * @param  string    $root
         * @param  string    $path
         * @param  bool|null $secure
         * @return string
         * @static
         */ public static function assetFrom($root, $path, $secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->assetFrom($root, $path, $secure);
        }
        /**
         * Get the default scheme for a raw URL.
         *
         * @param  bool|null $secure
         * @return string
         * @static
         */ public static function formatScheme($secure = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatScheme($secure);
        }
        /**
         * Create a signed route URL for a named route.
         *
         * @param  BackedEnum|string                        $name
         * @param  DateInterval|DateTimeInterface|int|null $expiration
         * @param  bool                                      $absolute
         * @return string
         * @static
         *@throws InvalidArgumentException
         */ public static function signedRoute($name, $parameters = [], $expiration = null, $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->signedRoute($name, $parameters, $expiration, $absolute);
        }
        /**
         * Create a temporary signed route URL for a named route.
         *
         * @param  BackedEnum|string                   $name
         * @param  DateInterval|DateTimeInterface|int $expiration
         * @param  array                                $parameters
         * @param  bool                                 $absolute
         * @return string
         * @static
         */ public static function temporarySignedRoute($name, $expiration, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->temporarySignedRoute($name, $expiration, $parameters, $absolute);
        }
        /**
         * Determine if the given request has a valid signature.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  bool                     $absolute
         * @param  array                    $ignoreQuery
         * @return bool
         * @static
         */ public static function hasValidSignature($request, $absolute = true, $ignoreQuery = [])
        {
            /** @var UrlGenerator $instance */
            return $instance->hasValidSignature($request, $absolute, $ignoreQuery);
        }
        /**
         * Determine if the given request has a valid signature for a relative URL.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  array                    $ignoreQuery
         * @return bool
         * @static
         */ public static function hasValidRelativeSignature($request, $ignoreQuery = [])
        {
            /** @var UrlGenerator $instance */
            return $instance->hasValidRelativeSignature($request, $ignoreQuery);
        }
        /**
         * Determine if the signature from the given request matches the URL.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  bool                     $absolute
         * @param  array                    $ignoreQuery
         * @return bool
         * @static
         */ public static function hasCorrectSignature($request, $absolute = true, $ignoreQuery = [])
        {
            /** @var UrlGenerator $instance */
            return $instance->hasCorrectSignature($request, $absolute, $ignoreQuery);
        }
        /**
         * Determine if the expires timestamp from the given request is not from the past.
         *
         * @param  \Illuminate\Http\Request $request
         * @return bool
         * @static
         */ public static function signatureHasNotExpired($request)
        {
            /** @var UrlGenerator $instance */
            return $instance->signatureHasNotExpired($request);
        }
        /**
         * Get the URL to a named route.
         *
         * @param  BackedEnum|string                                                                    $name
         * @param  bool                                                                                  $absolute
         * @return string
         * @static
         *@throws InvalidArgumentException|RouteNotFoundException
         */ public static function route($name, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->route($name, $parameters, $absolute);
        }
        /**
         * Get the URL for a given route instance.
         *
         * @param  \Illuminate\Routing\Route                             $route
         * @param  bool                                                  $absolute
         * @throws UrlGenerationException
         * @return string
         * @static
         */ public static function toRoute($route, $parameters, $absolute)
        {
            /** @var UrlGenerator $instance */
            return $instance->toRoute($route, $parameters, $absolute);
        }
        /**
         * Get the URL to a controller action.
         *
         * @param  array|string              $action
         * @param  bool                      $absolute
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function action($action, $parameters = [], $absolute = true)
        {
            /** @var UrlGenerator $instance */
            return $instance->action($action, $parameters, $absolute);
        }
        /**
         * Format the array of URL parameters.
         *
         * @return array
         * @static
         */ public static function formatParameters($parameters)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatParameters($parameters);
        }
        /**
         * Get the base URL for the request.
         *
         * @param  string      $scheme
         * @param  string|null $root
         * @return string
         * @static
         */ public static function formatRoot($scheme, $root = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatRoot($scheme, $root);
        }
        /**
         * Format the given URL segments into a single URL.
         *
         * @param  string                         $root
         * @param  string                         $path
         * @param  \Illuminate\Routing\Route|null $route
         * @return string
         * @static
         */ public static function format($root, $path, $route = null)
        {
            /** @var UrlGenerator $instance */
            return $instance->format($root, $path, $route);
        }
        /**
         * Determine if the given path is a valid URL.
         *
         * @param  string $path
         * @return bool
         * @static
         */ public static function isValidUrl($path)
        {
            /** @var UrlGenerator $instance */
            return $instance->isValidUrl($path);
        }
        /**
         * Set the default named parameters used by the URL generator.
         *
         * @param array $defaults
         * @static
         */ public static function defaults($defaults): void
        {
            /** @var UrlGenerator $instance */
            $instance->defaults($defaults);
        }
        /**
         * Get the default named parameters used by the URL generator.
         *
         * @return array
         * @static
         */ public static function getDefaultParameters()
        {
            /** @var UrlGenerator $instance */
            return $instance->getDefaultParameters();
        }
        /**
         * Force the scheme for URLs.
         *
         * @param string|null $scheme
         * @static
         */ public static function forceScheme($scheme): void
        {
            /** @var UrlGenerator $instance */
            $instance->forceScheme($scheme);
        }
        /**
         * Force the use of the HTTPS scheme for all generated URLs.
         *
         * @param bool $force
         * @static
         */ public static function forceHttps($force = true): void
        {
            /** @var UrlGenerator $instance */
            $instance->forceHttps($force);
        }
        /**
         * Set the forced root URL.
         *
         * @param string|null $root
         * @static
         */ public static function forceRootUrl($root): void
        {
            /** @var UrlGenerator $instance */
            $instance->forceRootUrl($root);
        }
        /**
         * Set a callback to be used to format the host of generated URLs.
         *
         * @param  Closure                         $callback
         * @return UrlGenerator
         * @static
         */ public static function formatHostUsing($callback)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatHostUsing($callback);
        }
        /**
         * Set a callback to be used to format the path of generated URLs.
         *
         * @param  Closure                         $callback
         * @return UrlGenerator
         * @static
         */ public static function formatPathUsing($callback)
        {
            /** @var UrlGenerator $instance */
            return $instance->formatPathUsing($callback);
        }
        /**
         * Get the path formatter being used by the URL generator.
         *
         * @return Closure
         * @static
         */ public static function pathFormatter()
        {
            /** @var UrlGenerator $instance */
            return $instance->pathFormatter();
        }
        /**
         * Get the request instance.
         *
         * @return \Illuminate\Http\Request
         * @static
         */ public static function getRequest()
        {
            /** @var UrlGenerator $instance */
            return $instance->getRequest();
        }
        /**
         * Set the current request instance.
         *
         * @param \Illuminate\Http\Request $request
         * @static
         */ public static function setRequest($request): void
        {
            /** @var UrlGenerator $instance */
            $instance->setRequest($request);
        }
        /**
         * Set the route collection.
         *
         * @param  RouteCollectionInterface $routes
         * @return UrlGenerator
         * @static
         */ public static function setRoutes($routes)
        {
            /** @var UrlGenerator $instance */
            return $instance->setRoutes($routes);
        }
        /**
         * Set the session resolver for the generator.
         *
         * @param  callable                         $sessionResolver
         * @return UrlGenerator
         * @static
         */ public static function setSessionResolver($sessionResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->setSessionResolver($sessionResolver);
        }
        /**
         * Set the encryption key resolver.
         *
         * @param  callable                         $keyResolver
         * @return UrlGenerator
         * @static
         */ public static function setKeyResolver($keyResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->setKeyResolver($keyResolver);
        }
        /**
         * Clone a new instance of the URL generator with a different encryption key resolver.
         *
         * @param  callable                         $keyResolver
         * @return UrlGenerator
         * @static
         */ public static function withKeyResolver($keyResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->withKeyResolver($keyResolver);
        }
        /**
         * Set the callback that should be used to attempt to resolve missing named routes.
         *
         * @param  callable                         $missingNamedRouteResolver
         * @return UrlGenerator
         * @static
         */ public static function resolveMissingNamedRoutesUsing($missingNamedRouteResolver)
        {
            /** @var UrlGenerator $instance */
            return $instance->resolveMissingNamedRoutesUsing($missingNamedRouteResolver);
        }
        /**
         * Get the root controller namespace.
         *
         * @return string
         * @static
         */ public static function getRootControllerNamespace()
        {
            /** @var UrlGenerator $instance */
            return $instance->getRootControllerNamespace();
        }
        /**
         * Set the root controller namespace.
         *
         * @param  string                           $rootNamespace
         * @return UrlGenerator
         * @static
         */ public static function setRootControllerNamespace($rootNamespace)
        {
            /** @var UrlGenerator $instance */
            return $instance->setRootControllerNamespace($rootNamespace);
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            UrlGenerator::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            UrlGenerator::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return UrlGenerator::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            UrlGenerator::flushMacros();
        }
    }
    /**
     * @see \Illuminate\Validation\Factory
     */ final class Validator
    {
        /**
         * Create a new Validator instance.
         *
         * @param  array                            $data
         * @param  array                            $rules
         * @param  array                            $messages
         * @param  array                            $attributes
         * @return \Illuminate\Validation\Validator
         * @static
         */ public static function make($data, $rules, $messages = [], $attributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->make($data, $rules, $messages, $attributes);
        }
        /**
         * Validate the given data against the provided rules.
         *
         * @param  array                                      $data
         * @param  array                                      $rules
         * @param  array                                      $messages
         * @param  array                                      $attributes
         * @throws ValidationException
         * @return array
         * @static
         */ public static function validate($data, $rules, $messages = [], $attributes = [])
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->validate($data, $rules, $messages, $attributes);
        }
        /**
         * Register a custom validator extension.
         *
         * @param string          $rule
         * @param Closure|string $extension
         * @param string|null     $message
         * @static
         */ public static function extend($rule, $extension, $message = null): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extend($rule, $extension, $message);
        }
        /**
         * Register a custom implicit validator extension.
         *
         * @param string          $rule
         * @param Closure|string $extension
         * @param string|null     $message
         * @static
         */ public static function extendImplicit($rule, $extension, $message = null): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendImplicit($rule, $extension, $message);
        }
        /**
         * Register a custom dependent validator extension.
         *
         * @param string          $rule
         * @param Closure|string $extension
         * @param string|null     $message
         * @static
         */ public static function extendDependent($rule, $extension, $message = null): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->extendDependent($rule, $extension, $message);
        }
        /**
         * Register a custom validator message replacer.
         *
         * @param string          $rule
         * @param Closure|string $replacer
         * @static
         */ public static function replacer($rule, $replacer): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->replacer($rule, $replacer);
        }
        /**
         * Indicate that unvalidated array keys should be included in validated data when the parent array is validated.
         *
         * @static
         */ public static function includeUnvalidatedArrayKeys(): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->includeUnvalidatedArrayKeys();
        }
        /**
         * Indicate that unvalidated array keys should be excluded from the validated data, even if the parent array was validated.
         *
         * @static
         */ public static function excludeUnvalidatedArrayKeys(): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->excludeUnvalidatedArrayKeys();
        }
        /**
         * Set the Validator instance resolver.
         *
         * @param Closure $resolver
         * @static
         */ public static function resolver($resolver): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->resolver($resolver);
        }
        /**
         * Get the Translator implementation.
         *
         * @return Translator
         * @static
         */ public static function getTranslator()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getTranslator();
        }
        /**
         * Get the Presence Verifier implementation.
         *
         * @return PresenceVerifierInterface
         * @static
         */ public static function getPresenceVerifier()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getPresenceVerifier();
        }
        /**
         * Set the Presence Verifier implementation.
         *
         * @param PresenceVerifierInterface $presenceVerifier
         * @static
         */ public static function setPresenceVerifier($presenceVerifier): void
        {
            /** @var \Illuminate\Validation\Factory $instance */
            $instance->setPresenceVerifier($presenceVerifier);
        }
        /**
         * Get the container instance used by the validation factory.
         *
         * @return Container|null
         * @static
         */ public static function getContainer()
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->getContainer();
        }
        /**
         * Set the container instance used by the validation factory.
         *
         * @param  Container $container
         * @return \Illuminate\Validation\Factory
         * @static
         */ public static function setContainer($container)
        {
            /** @var \Illuminate\Validation\Factory $instance */
            return $instance->setContainer($container);
        }
    }
    /**
     * @see \Illuminate\View\Factory
     */ final class View
    {
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param  string                                        $path
         * @param  array|Arrayable $data
         * @param  array                                         $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */ public static function file($path, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->file($path, $data, $mergeData);
        }
        /**
         * Get the evaluated view contents for the given view.
         *
         * @param  string                                        $view
         * @param  array|Arrayable $data
         * @param  array                                         $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         */ public static function make($view, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->make($view, $data, $mergeData);
        }
        /**
         * Get the first view that actually exists from the given list.
         *
         * @param  array                                         $views
         * @param  array|Arrayable $data
         * @param  array                                         $mergeData
         * @return \Illuminate\Contracts\View\View
         * @static
         *@throws InvalidArgumentException
         */ public static function first($views, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->first($views, $data, $mergeData);
        }
        /**
         * Get the rendered content of the view based on a given condition.
         *
         * @param  bool                                          $condition
         * @param  string                                        $view
         * @param  array|Arrayable $data
         * @param  array                                         $mergeData
         * @return string
         * @static
         */ public static function renderWhen($condition, $view, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->renderWhen($condition, $view, $data, $mergeData);
        }
        /**
         * Get the rendered content of the view based on the negation of a given condition.
         *
         * @param  bool                                          $condition
         * @param  string                                        $view
         * @param  array|Arrayable $data
         * @param  array                                         $mergeData
         * @return string
         * @static
         */ public static function renderUnless($condition, $view, $data = [], $mergeData = [])
        {
            /** @var Factory $instance */
            return $instance->renderUnless($condition, $view, $data, $mergeData);
        }
        /**
         * Get the rendered contents of a partial from a loop.
         *
         * @param  string $view
         * @param  array  $data
         * @param  string $iterator
         * @param  string $empty
         * @return string
         * @static
         */ public static function renderEach($view, $data, $iterator, $empty = 'raw|')
        {
            /** @var Factory $instance */
            return $instance->renderEach($view, $data, $iterator, $empty);
        }
        /**
         * Determine if a given view exists.
         *
         * @param  string $view
         * @return bool
         * @static
         */ public static function exists($view)
        {
            /** @var Factory $instance */
            return $instance->exists($view);
        }
        /**
         * Get the appropriate view engine for the given path.
         *
         * @param  string                            $path
         * @throws InvalidArgumentException
         * @return Engine
         * @static
         */ public static function getEngineFromPath($path)
        {
            /** @var Factory $instance */
            return $instance->getEngineFromPath($path);
        }
        /**
         * Add a piece of shared data to the environment.
         *
         * @param array|string $key
         * @param mixed|null   $value
         * @static
         */ public static function share($key, $value = null)
        {
            /** @var Factory $instance */
            return $instance->share($key, $value);
        }
        /**
         * Increment the rendering counter.
         *
         * @static
         */ public static function incrementRender(): void
        {
            /** @var Factory $instance */
            $instance->incrementRender();
        }
        /**
         * Decrement the rendering counter.
         *
         * @static
         */ public static function decrementRender(): void
        {
            /** @var Factory $instance */
            $instance->decrementRender();
        }
        /**
         * Check if there are no active render operations.
         *
         * @return bool
         * @static
         */ public static function doneRendering()
        {
            /** @var Factory $instance */
            return $instance->doneRendering();
        }
        /**
         * Determine if the given once token has been rendered.
         *
         * @param  string $id
         * @return bool
         * @static
         */ public static function hasRenderedOnce($id)
        {
            /** @var Factory $instance */
            return $instance->hasRenderedOnce($id);
        }
        /**
         * Mark the given once token as having been rendered.
         *
         * @param string $id
         * @static
         */ public static function markAsRenderedOnce($id): void
        {
            /** @var Factory $instance */
            $instance->markAsRenderedOnce($id);
        }
        /**
         * Add a location to the array of view locations.
         *
         * @param string $location
         * @static
         */ public static function addLocation($location): void
        {
            /** @var Factory $instance */
            $instance->addLocation($location);
        }
        /**
         * Prepend a location to the array of view locations.
         *
         * @param string $location
         * @static
         */ public static function prependLocation($location): void
        {
            /** @var Factory $instance */
            $instance->prependLocation($location);
        }
        /**
         * Add a new namespace to the loader.
         *
         * @param  string                   $namespace
         * @param  array|string             $hints
         * @return Factory
         * @static
         */ public static function addNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->addNamespace($namespace, $hints);
        }
        /**
         * Prepend a new namespace to the loader.
         *
         * @param  string                   $namespace
         * @param  array|string             $hints
         * @return Factory
         * @static
         */ public static function prependNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->prependNamespace($namespace, $hints);
        }
        /**
         * Replace the namespace hints for the given namespace.
         *
         * @param  string                   $namespace
         * @param  array|string             $hints
         * @return Factory
         * @static
         */ public static function replaceNamespace($namespace, $hints)
        {
            /** @var Factory $instance */
            return $instance->replaceNamespace($namespace, $hints);
        }
        /**
         * Register a valid view extension and its engine.
         *
         * @param string        $extension
         * @param string        $engine
         * @param Closure|null $resolver
         * @static
         */ public static function addExtension($extension, $engine, $resolver = null): void
        {
            /** @var Factory $instance */
            $instance->addExtension($extension, $engine, $resolver);
        }
        /**
         * Flush all of the factory state like sections and stacks.
         *
         * @static
         */ public static function flushState(): void
        {
            /** @var Factory $instance */
            $instance->flushState();
        }
        /**
         * Flush all of the section contents if done rendering.
         *
         * @static
         */ public static function flushStateIfDoneRendering(): void
        {
            /** @var Factory $instance */
            $instance->flushStateIfDoneRendering();
        }
        /**
         * Get the extension to engine bindings.
         *
         * @return array
         * @static
         */ public static function getExtensions()
        {
            /** @var Factory $instance */
            return $instance->getExtensions();
        }
        /**
         * Get the engine resolver instance.
         *
         * @return EngineResolver
         * @static
         */ public static function getEngineResolver()
        {
            /** @var Factory $instance */
            return $instance->getEngineResolver();
        }
        /**
         * Get the view finder instance.
         *
         * @return ViewFinderInterface
         * @static
         */ public static function getFinder()
        {
            /** @var Factory $instance */
            return $instance->getFinder();
        }
        /**
         * Set the view finder instance.
         *
         * @param ViewFinderInterface $finder
         * @static
         */ public static function setFinder($finder): void
        {
            /** @var Factory $instance */
            $instance->setFinder($finder);
        }
        /**
         * Flush the cache of views located by the finder.
         *
         * @static
         */ public static function flushFinderCache(): void
        {
            /** @var Factory $instance */
            $instance->flushFinderCache();
        }
        /**
         * Get the event dispatcher instance.
         *
         * @return Dispatcher
         * @static
         */ public static function getDispatcher()
        {
            /** @var Factory $instance */
            return $instance->getDispatcher();
        }
        /**
         * Set the event dispatcher instance.
         *
         * @param Dispatcher $events
         * @static
         */ public static function setDispatcher($events): void
        {
            /** @var Factory $instance */
            $instance->setDispatcher($events);
        }
        /**
         * Get the IoC container instance.
         *
         * @return Container
         * @static
         */ public static function getContainer()
        {
            /** @var Factory $instance */
            return $instance->getContainer();
        }
        /**
         * Set the IoC container instance.
         *
         * @param Container $container
         * @static
         */ public static function setContainer($container): void
        {
            /** @var Factory $instance */
            $instance->setContainer($container);
        }
        /**
         * Get an item from the shared data.
         *
         * @param string $key
         * @static
         */ public static function shared($key, $default = null)
        {
            /** @var Factory $instance */
            return $instance->shared($key, $default);
        }
        /**
         * Get all of the shared data for the environment.
         *
         * @return array
         * @static
         */ public static function getShared()
        {
            /** @var Factory $instance */
            return $instance->getShared();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            Factory::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            Factory::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return Factory::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            Factory::flushMacros();
        }
        /**
         * Start a component rendering process.
         *
         * @param Closure|Htmlable|\Illuminate\Contracts\View\View|string $view
         * @param array                                                                                  $data
         * @static
         */ public static function startComponent($view, $data = []): void
        {
            /** @var Factory $instance */
            $instance->startComponent($view, $data);
        }
        /**
         * Get the first view that actually exists from the given list, and start a component.
         *
         * @param array $names
         * @param array $data
         * @static
         */ public static function startComponentFirst($names, $data = []): void
        {
            /** @var Factory $instance */
            $instance->startComponentFirst($names, $data);
        }
        /**
         * Render the current component.
         *
         * @return string
         * @static
         */ public static function renderComponent()
        {
            /** @var Factory $instance */
            return $instance->renderComponent();
        }
        /**
         * Get an item from the component data that exists above the current component.
         *
         * @param  string     $key
         * @return mixed|null
         * @static
         */ public static function getConsumableComponentData($key, $default = null)
        {
            /** @var Factory $instance */
            return $instance->getConsumableComponentData($key, $default);
        }
        /**
         * Start the slot rendering process.
         *
         * @param string      $name
         * @param string|null $content
         * @param array       $attributes
         * @static
         */ public static function slot($name, $content = null, $attributes = []): void
        {
            /** @var Factory $instance */
            $instance->slot($name, $content, $attributes);
        }
        /**
         * Save the slot content for rendering.
         *
         * @static
         */ public static function endSlot(): void
        {
            /** @var Factory $instance */
            $instance->endSlot();
        }
        /**
         * Register a view creator event.
         *
         * @param  array|string    $views
         * @param  Closure|string $callback
         * @return array
         * @static
         */ public static function creator($views, $callback)
        {
            /** @var Factory $instance */
            return $instance->creator($views, $callback);
        }
        /**
         * Register multiple view composers via an array.
         *
         * @param  array $composers
         * @return array
         * @static
         */ public static function composers($composers)
        {
            /** @var Factory $instance */
            return $instance->composers($composers);
        }
        /**
         * Register a view composer event.
         *
         * @param  array|string    $views
         * @param  Closure|string $callback
         * @return array
         * @static
         */ public static function composer($views, $callback)
        {
            /** @var Factory $instance */
            return $instance->composer($views, $callback);
        }
        /**
         * Call the composer for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @static
         */ public static function callComposer($view): void
        {
            /** @var Factory $instance */
            $instance->callComposer($view);
        }
        /**
         * Call the creator for a given view.
         *
         * @param \Illuminate\Contracts\View\View $view
         * @static
         */ public static function callCreator($view): void
        {
            /** @var Factory $instance */
            $instance->callCreator($view);
        }
        /**
         * Start injecting content into a fragment.
         *
         * @param string $fragment
         * @static
         */ public static function startFragment($fragment): void
        {
            /** @var Factory $instance */
            $instance->startFragment($fragment);
        }
        /**
         * Stop injecting content into a fragment.
         *
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function stopFragment()
        {
            /** @var Factory $instance */
            return $instance->stopFragment();
        }
        /**
         * Get the contents of a fragment.
         *
         * @param string      $name
         * @param string|null $default
         * @static
         */ public static function getFragment($name, $default = null)
        {
            /** @var Factory $instance */
            return $instance->getFragment($name, $default);
        }
        /**
         * Get the entire array of rendered fragments.
         *
         * @return array
         * @static
         */ public static function getFragments()
        {
            /** @var Factory $instance */
            return $instance->getFragments();
        }
        /**
         * Flush all of the fragments.
         *
         * @static
         */ public static function flushFragments(): void
        {
            /** @var Factory $instance */
            $instance->flushFragments();
        }
        /**
         * Start injecting content into a section.
         *
         * @param string      $section
         * @param string|null $content
         * @static
         */ public static function startSection($section, $content = null): void
        {
            /** @var Factory $instance */
            $instance->startSection($section, $content);
        }
        /**
         * Inject inline content into a section.
         *
         * @param string $section
         * @param string $content
         * @static
         */ public static function inject($section, $content): void
        {
            /** @var Factory $instance */
            $instance->inject($section, $content);
        }
        /**
         * Stop injecting content into a section and return its contents.
         *
         * @return string
         * @static
         */ public static function yieldSection()
        {
            /** @var Factory $instance */
            return $instance->yieldSection();
        }
        /**
         * Stop injecting content into a section.
         *
         * @param  bool                      $overwrite
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function stopSection($overwrite = false)
        {
            /** @var Factory $instance */
            return $instance->stopSection($overwrite);
        }
        /**
         * Stop injecting content into a section and append it.
         *
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function appendSection()
        {
            /** @var Factory $instance */
            return $instance->appendSection();
        }
        /**
         * Get the string contents of a section.
         *
         * @param  string $section
         * @param  string $default
         * @return string
         * @static
         */ public static function yieldContent($section, $default = '')
        {
            /** @var Factory $instance */
            return $instance->yieldContent($section, $default);
        }
        /**
         * Get the parent placeholder for the current request.
         *
         * @param  string $section
         * @return string
         * @static
         */ public static function parentPlaceholder($section = '')
        {
            return Factory::parentPlaceholder($section);
        }
        /**
         * Check if section exists.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasSection($name)
        {
            /** @var Factory $instance */
            return $instance->hasSection($name);
        }
        /**
         * Check if section does not exist.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function sectionMissing($name)
        {
            /** @var Factory $instance */
            return $instance->sectionMissing($name);
        }
        /**
         * Get the contents of a section.
         *
         * @param string      $name
         * @param string|null $default
         * @static
         */ public static function getSection($name, $default = null)
        {
            /** @var Factory $instance */
            return $instance->getSection($name, $default);
        }
        /**
         * Get the entire array of sections.
         *
         * @return array
         * @static
         */ public static function getSections()
        {
            /** @var Factory $instance */
            return $instance->getSections();
        }
        /**
         * Flush all of the sections.
         *
         * @static
         */ public static function flushSections(): void
        {
            /** @var Factory $instance */
            $instance->flushSections();
        }
        /**
         * Add new loop to the stack.
         *
         * @param array|Countable $data
         * @static
         */ public static function addLoop($data): void
        {
            /** @var Factory $instance */
            $instance->addLoop($data);
        }
        /**
         * Increment the top loop's indices.
         *
         * @static
         */ public static function incrementLoopIndices(): void
        {
            /** @var Factory $instance */
            $instance->incrementLoopIndices();
        }
        /**
         * Pop a loop from the top of the loop stack.
         *
         * @static
         */ public static function popLoop(): void
        {
            /** @var Factory $instance */
            $instance->popLoop();
        }
        /**
         * Get an instance of the last loop in the stack.
         *
         * @return stdClass|null
         * @static
         */ public static function getLastLoop()
        {
            /** @var Factory $instance */
            return $instance->getLastLoop();
        }
        /**
         * Get the entire loop stack.
         *
         * @return array
         * @static
         */ public static function getLoopStack()
        {
            /** @var Factory $instance */
            return $instance->getLoopStack();
        }
        /**
         * Start injecting content into a push section.
         *
         * @param string $section
         * @param string $content
         * @static
         */ public static function startPush($section, $content = ''): void
        {
            /** @var Factory $instance */
            $instance->startPush($section, $content);
        }
        /**
         * Stop injecting content into a push section.
         *
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function stopPush()
        {
            /** @var Factory $instance */
            return $instance->stopPush();
        }
        /**
         * Start prepending content into a push section.
         *
         * @param string $section
         * @param string $content
         * @static
         */ public static function startPrepend($section, $content = ''): void
        {
            /** @var Factory $instance */
            $instance->startPrepend($section, $content);
        }
        /**
         * Stop prepending content into a push section.
         *
         * @throws InvalidArgumentException
         * @return string
         * @static
         */ public static function stopPrepend()
        {
            /** @var Factory $instance */
            return $instance->stopPrepend();
        }
        /**
         * Get the string contents of a push section.
         *
         * @param  string $section
         * @param  string $default
         * @return string
         * @static
         */ public static function yieldPushContent($section, $default = '')
        {
            /** @var Factory $instance */
            return $instance->yieldPushContent($section, $default);
        }
        /**
         * Flush all of the stacks.
         *
         * @static
         */ public static function flushStacks(): void
        {
            /** @var Factory $instance */
            $instance->flushStacks();
        }
        /**
         * Start a translation block.
         *
         * @param array $replacements
         * @static
         */ public static function startTranslation($replacements = []): void
        {
            /** @var Factory $instance */
            $instance->startTranslation($replacements);
        }
        /**
         * Render the current translation.
         *
         * @return string
         * @static
         */ public static function renderTranslation()
        {
            /** @var Factory $instance */
            return $instance->renderTranslation();
        }
    }
    /**
     * @see \Illuminate\Foundation\Vite
     */ final class Vite
    {
        /**
         * Get the preloaded assets.
         *
         * @return array
         * @static
         */ public static function preloadedAssets()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->preloadedAssets();
        }
        /**
         * Get the Content Security Policy nonce applied to all generated tags.
         *
         * @return string|null
         * @static
         */ public static function cspNonce()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->cspNonce();
        }
        /**
         * Generate or set a Content Security Policy nonce to apply to all generated tags.
         *
         * @param  string|null $nonce
         * @return string
         * @static
         */ public static function useCspNonce($nonce = null)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useCspNonce($nonce);
        }
        /**
         * Use the given key to detect integrity hashes in the manifest.
         *
         * @param  false|string                $key
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useIntegrityKey($key)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useIntegrityKey($key);
        }
        /**
         * Set the Vite entry points.
         *
         * @param  array                       $entryPoints
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function withEntryPoints($entryPoints)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->withEntryPoints($entryPoints);
        }
        /**
         * Merge additional Vite entry points with the current set.
         *
         * @param  array                       $entryPoints
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function mergeEntryPoints($entryPoints)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->mergeEntryPoints($entryPoints);
        }
        /**
         * Set the filename for the manifest file.
         *
         * @param  string                      $filename
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useManifestFilename($filename)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useManifestFilename($filename);
        }
        /**
         * Resolve asset paths using the provided resolver.
         *
         * @param  callable|null               $resolver
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function createAssetPathsUsing($resolver)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->createAssetPathsUsing($resolver);
        }
        /**
         * Get the Vite "hot" file path.
         *
         * @return string
         * @static
         */ public static function hotFile()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->hotFile();
        }
        /**
         * Set the Vite "hot" file path.
         *
         * @param  string                      $path
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useHotFile($path)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useHotFile($path);
        }
        /**
         * Set the Vite build directory.
         *
         * @param  string                      $path
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useBuildDirectory($path)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useBuildDirectory($path);
        }
        /**
         * Use the given callback to resolve attributes for script tags.
         *
         * @param  array|(callable(string, string, ?array, ?array): array) $attributes
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useScriptTagAttributes($attributes)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useScriptTagAttributes($attributes);
        }
        /**
         * Use the given callback to resolve attributes for style tags.
         *
         * @param  array|(callable(string, string, ?array, ?array): array) $attributes
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useStyleTagAttributes($attributes)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useStyleTagAttributes($attributes);
        }
        /**
         * Use the given callback to resolve attributes for preload tags.
         *
         * @param  array|(callable(string, string, ?array, ?array): (array|false))|false $attributes
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function usePreloadTagAttributes($attributes)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->usePreloadTagAttributes($attributes);
        }
        /**
         * Eagerly prefetch assets.
         *
         * @param  int|null                    $concurrency
         * @param  string                      $event
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function prefetch($concurrency = null, $event = 'load')
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->prefetch($concurrency, $event);
        }
        /**
         * Use the "waterfall" prefetching strategy.
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useWaterfallPrefetching($concurrency = null)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useWaterfallPrefetching($concurrency);
        }
        /**
         * Use the "aggressive" prefetching strategy.
         *
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function useAggressivePrefetching()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->useAggressivePrefetching();
        }
        /**
         * Set the prefetching strategy.
         *
         * @param 'waterfall'|\Illuminate\Foundation\'aggressive'|null $strategy
         * @param  array                       $config
         * @return \Illuminate\Foundation\Vite
         * @static
         */ public static function usePrefetchStrategy($strategy, $config = [])
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->usePrefetchStrategy($strategy, $config);
        }
        /**
         * Generate React refresh runtime script.
         *
         * @return HtmlString|void
         * @static
         */ public static function reactRefresh()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->reactRefresh();
        }
        /**
         * Get the URL for an asset.
         *
         * @param  string      $asset
         * @param  string|null $buildDirectory
         * @return string
         * @static
         */ public static function asset($asset, $buildDirectory = null)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->asset($asset, $buildDirectory);
        }
        /**
         * Get the content of a given asset.
         *
         * @param  string                               $asset
         * @param  string|null                          $buildDirectory
         * @throws ViteException
         * @return string
         * @static
         */ public static function content($asset, $buildDirectory = null)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->content($asset, $buildDirectory);
        }
        /**
         * Get a unique hash representing the current manifest, or null if there is no manifest.
         *
         * @param  string|null $buildDirectory
         * @return string|null
         * @static
         */ public static function manifestHash($buildDirectory = null)
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->manifestHash($buildDirectory);
        }
        /**
         * Determine if the HMR server is running.
         *
         * @return bool
         * @static
         */ public static function isRunningHot()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->isRunningHot();
        }
        /**
         * Get the Vite tag content as a string of HTML.
         *
         * @return string
         * @static
         */ public static function toHtml()
        {
            /** @var \Illuminate\Foundation\Vite $instance */
            return $instance->toHtml();
        }
        /**
         * Register a custom macro.
         *
         * @param string          $name
         * @param callable|object $macro
         * @param-closure-this static  $macro
         * @static
         */ public static function macro($name, $macro): void
        {
            \Illuminate\Foundation\Vite::macro($name, $macro);
        }
        /**
         * Mix another object into the class.
         *
         * @param  object               $mixin
         * @param  bool                 $replace
         * @throws ReflectionException
         * @static
         */ public static function mixin($mixin, $replace = true): void
        {
            \Illuminate\Foundation\Vite::mixin($mixin, $replace);
        }
        /**
         * Checks if macro is registered.
         *
         * @param  string $name
         * @return bool
         * @static
         */ public static function hasMacro($name)
        {
            return \Illuminate\Foundation\Vite::hasMacro($name);
        }
        /**
         * Flush the existing macros.
         *
         * @static
         */ public static function flushMacros(): void
        {
            \Illuminate\Foundation\Vite::flushMacros();
        }
    }
}

namespace Illuminate\Http {
    /**
     *
     */ final class Request
    {
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @static
         */ public static function validate($rules, ...$params)
        {
            return Request::validate($rules, ...$params);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array  $rules
         * @static
         */ public static function validateWithBag($errorBag, $rules, ...$params)
        {
            return Request::validateWithBag($errorBag, $rules, ...$params);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidSignature($absolute = true)
        {
            return Request::hasValidSignature($absolute);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidRelativeSignature()
        {
            return Request::hasValidRelativeSignature();
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
            return Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
        /**
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static
         */ public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
            return Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }
    }
}

namespace {
    use Illuminate\Contracts\Database\Query\Expression;use Illuminate\Contracts\Pagination\CursorPaginator;use Illuminate\Contracts\Pagination\Paginator;use Illuminate\Contracts\Support\Arrayable;use Illuminate\Database\Eloquent\callable;use Illuminate\Database\Eloquent\list;use Illuminate\Database\Eloquent\Model;use Illuminate\Database\Eloquent\ModelNotFoundException;use Illuminate\Database\Eloquent\Relations\MorphTo;use Illuminate\Database\Eloquent\Relations\Relation;use Illuminate\Database\Eloquent\Scope;use Illuminate\Database\Eloquent\TModel;use Illuminate\Database\Eloquent\TModelNew;use Illuminate\Database\Eloquent\TModelValue;use Illuminate\Database\Eloquent\TUnlessParameter;use Illuminate\Database\Eloquent\TUnlessReturnType;use Illuminate\Database\Eloquent\TValue;use Illuminate\Database\Eloquent\TWhenParameter;use Illuminate\Database\Eloquent\TWhenReturnType;use Illuminate\Database\MultipleRecordsFoundException;use Illuminate\Database\Query\Builder;use Illuminate\Database\Query\Grammars\Grammar;use Illuminate\Database\Query\never;use Illuminate\Database\Query\Processors\Processor;use Illuminate\Database\RecordsNotFoundException;use Illuminate\Pagination\Cursor;use Illuminate\Support\Collection;use Illuminate\Support\LazyCollection;final class App extends \Illuminate\Support\Facades\App
    {
    }
    final class Arr extends \Illuminate\Support\Arr
    {
    }
    final class Artisan extends \Illuminate\Support\Facades\Artisan
    {
    }
    final class Auth extends \Illuminate\Support\Facades\Auth
    {
    }
    final class Blade extends \Illuminate\Support\Facades\Blade
    {
    }
    final class Broadcast extends \Illuminate\Support\Facades\Broadcast
    {
    }
    final class Bus extends \Illuminate\Support\Facades\Bus
    {
    }
    final class Cache extends \Illuminate\Support\Facades\Cache
    {
    }
    final class Concurrency extends \Illuminate\Support\Facades\Concurrency
    {
    }
    final class Config extends \Illuminate\Support\Facades\Config
    {
    }
    final class Context extends \Illuminate\Support\Facades\Context
    {
    }
    final class Cookie extends \Illuminate\Support\Facades\Cookie
    {
    }
    final class Crypt extends \Illuminate\Support\Facades\Crypt
    {
    }
    final class Date extends \Illuminate\Support\Facades\Date
    {
    }
    final class DB extends \Illuminate\Support\Facades\DB
    {
    }
    final class Eloquent extends Model
    {                            /**
             * Create and return an un-saved model instance.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function make($attributes = [])
    {
        /** @var \Illuminate\Database\Eloquent\Builder $instance */
        return $instance->make($attributes);
    }
        /**
             * Register a new global scope.
             *
             * @param  string                                        $identifier
             * @param  Closure|Scope  $scope
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withGlobalScope($identifier, $scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withGlobalScope($identifier, $scope);
        }
        /**
             * Remove a registered global scope.
             *
             * @param  Scope|string    $scope
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withoutGlobalScope($scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScope($scope);
        }
        /**
             * Remove all or passed registered global scopes.
             *
             * @param  array|null                                    $scopes
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withoutGlobalScopes($scopes = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutGlobalScopes($scopes);
        }
        /**
             * Get an array of global scopes that were removed from the query.
             *
             * @return array
             * @static
             */ public static function removedScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->removedScopes();
        }
        /**
             * Add a where clause on the primary key to the query.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereKey($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKey($id);
        }
        /**
             * Add a where clause on the primary key to the query.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereKeyNot($id)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereKeyNot($id);
        }
        /**
             * Add a basic where clause to the query.
             *
             * @param  array|(Closure(static): mixed)|Expression|string $column
             * @param  string                                                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function where($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->where($column, $operator, $value, $boolean);
        }
        /**
             * Add a basic where clause to the query, and return the first result.
             *
             * @param  array|(Closure(static): mixed)|Expression|string $column
             * @param  string                                                                                 $boolean
             * @return TModel|null
             * @static
             */ public static function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstWhere($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where" clause to the query.
             *
             * @param  array|(Closure(static): mixed)|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhere($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhere($column, $operator, $value);
        }
        /**
             * Add a basic "where not" clause to the query.
             *
             * @param  array|(Closure(static): mixed)|Expression|string $column
             * @param  string                                                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNot($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNot($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where not" clause to the query.
             *
             * @param  array|(Closure(static): mixed)|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNot($column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNot($column, $operator, $value);
        }
        /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function latest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->latest($column);
        }
        /**
             * Add an "order by" clause for a timestamp to the query.
             *
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function oldest($column = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->oldest($column);
        }
        /**
             * Create a collection of models from plain arrays.
             *
             * @param  array                                                 $items
             * @return \Illuminate\Database\Eloquent\Collection<int, TModel>
             * @static
             */ public static function hydrate($items)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hydrate($items);
        }
        /**
             * Create a collection of models from a raw query.
             *
             * @param  string                                                $query
             * @param  array                                                 $bindings
             * @return \Illuminate\Database\Eloquent\Collection<int, TModel>
             * @static
             */ public static function fromQuery($query, $bindings = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->fromQuery($query, $bindings);
        }
        /**
             * Find a model by its primary key.
             *
             * @param  array|string                                                                                                                                            $columns
             * @return ($id is (array<mixed>|Arrayable<array-key, mixed>) ? \Illuminate\Database\Eloquent\Collection<int, TModel> : TModel|null)
             * @static
             */ public static function find($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->find($id, $columns);
        }
        /**
             * Find multiple models by their primary keys.
             *
             * @param  array|Arrayable         $ids
             * @param  array|string                                          $columns
             * @return \Illuminate\Database\Eloquent\Collection<int, TModel>
             * @static
             */ public static function findMany($ids, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findMany($ids, $columns);
        }
        /**
             * Find a model by its primary key or throw an exception.
             *
             * @param  array|string                                                                                                                                       $columns
             * @return ($id is (array<mixed>|Arrayable<array-key, mixed>) ? \Illuminate\Database\Eloquent\Collection<int, TModel> : TModel)
             * @static
             *@throws ModelNotFoundException<TModel>
             */ public static function findOrFail($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrFail($id, $columns);
        }
        /**
             * Find a model by its primary key or return fresh model instance.
             *
             * @param  array|string                                                                                                                                       $columns
             * @return ($id is (array<mixed>|Arrayable<array-key, mixed>) ? \Illuminate\Database\Eloquent\Collection<int, TModel> : TModel)
             * @static
             */ public static function findOrNew($id, $columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOrNew($id, $columns);
        }
        /**
             * Find a model by its primary key or call a callback.
             *
             * @template TValue
             * @param (Closure(): TValue)|list<string>|string $columns
             * @param (Closure(): TValue)|null                                              $callback
             * @return ( $id is (Arrayable<array-key, mixed>|array<mixed>)
             *     ? \Illuminate\Database\Eloquent\Collection<int, TModel>
             *     : TModel|TValue
             * )
             * @static
             */ public static function findOr($id, $columns = [], $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->findOr($id, $columns, $callback);
        }
        /**
             * Get the first record matching the attributes or instantiate it.
             *
             * @param  array                                $attributes
             * @param  array                                $values
             * @return TModel
             * @static
             */ public static function firstOrNew($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrNew($attributes, $values);
        }
        /**
             * Get the first record matching the attributes. If the record is not found, create it.
             *
             * @param  array                                $attributes
             * @param  array                                $values
             * @return TModel
             * @static
             */ public static function firstOrCreate($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrCreate($attributes, $values);
        }
        /**
             * Attempt to create the record. If a unique constraint violation occurs, attempt to find the matching record.
             *
             * @param  array                                $attributes
             * @param  array                                $values
             * @return TModel
             * @static
             */ public static function createOrFirst($attributes = [], $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->createOrFirst($attributes, $values);
        }
        /**
             * Create or update a record matching the attributes, and fill it with values.
             *
             * @param  array                                $attributes
             * @param  array                                $values
             * @return TModel
             * @static
             */ public static function updateOrCreate($attributes, $values = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->updateOrCreate($attributes, $values);
        }
        /**
             * Execute the query and get the first result or throw an exception.
             *
             * @param  array|string                                                 $columns
             * @throws ModelNotFoundException<TModel>
             * @return TModel
             * @static
             */ public static function firstOrFail($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOrFail($columns);
        }
        /**
             * Execute the query and get the first result or call a callback.
             *
             * @template TValue
             * @param  (Closure(): TValue)|list<string>           $columns
             * @param  (Closure(): TValue)|null                                                 $callback
             * @return TModel|TValue
             * @static
             */ public static function firstOr($columns = [], $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->firstOr($columns, $callback);
        }
        /**
             * Execute the query and get the first result if it's the sole matching record.
             *
             * @param  array|string                                                 $columns
             * @throws ModelNotFoundException<TModel>
             * @throws MultipleRecordsFoundException
             * @return TModel
             * @static
             */ public static function sole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->sole($columns);
        }
        /**
             * Get a single column's value from the first result of a query.
             *
             * @param Expression|string $column
             * @static
             */ public static function value($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->value($column);
        }
        /**
             * Get a single column's value from the first result of a query if it's the sole matching record.
             *
             * @param  Expression|string       $column
             * @throws ModelNotFoundException<TModel>
             * @throws MultipleRecordsFoundException
             * @static
             */ public static function soleValue($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->soleValue($column);
        }
        /**
             * Get a single column's value from the first result of the query or throw an exception.
             *
             * @param  Expression|string       $column
             * @throws ModelNotFoundException<TModel>
             * @static
             */ public static function valueOrFail($column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->valueOrFail($column);
        }
        /**
             * Execute the query as a "select" statement.
             *
             * @param  array|string                                          $columns
             * @return \Illuminate\Database\Eloquent\Collection<int, TModel>
             * @static
             */ public static function get($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->get($columns);
        }
        /**
             * Get the hydrated models without eager loading.
             *
             * @param  array|string       $columns
             * @return array<int, TModel>
             * @static
             */ public static function getModels($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModels($columns);
        }
        /**
             * Eager load the relationships for the models.
             *
             * @param  array<int, TModel> $models
             * @return array<int, TModel>
             * @static
             */ public static function eagerLoadRelations($models)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eagerLoadRelations($models);
        }
        /**
             * Register a closure to be invoked after the query is executed.
             *
             * @param  Closure                                      $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function afterQuery($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->afterQuery($callback);
        }
        /**
             * Invoke the "after query" modification callbacks.
             *
             * @static
             */ public static function applyAfterQueryCallbacks($result)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->applyAfterQueryCallbacks($result);
        }
        /**
             * Get a lazy collection for the given query.
             *
             * @return LazyCollection<int, TModel>
             * @static
             */ public static function cursor()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursor();
        }
        /**
             * Get a collection with the values of a given column.
             *
             * @param  Expression|string $column
             * @param  string|null                                            $key
             * @return Collection<array-key, mixed>
             * @static
             */ public static function pluck($column, $key = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->pluck($column, $key);
        }
        /**
             * Paginate the given query.
             *
             * @param  Closure|int|null                                     $perPage
             * @param  array|string                                          $columns
             * @param  string                                                $pageName
             * @param  int|null                                              $page
             * @param  Closure|int|null                                     $total
             * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
             * @static
             *@throws InvalidArgumentException
             */ public static function paginate($perPage = null, $columns = [], $pageName = 'page', $page = null, $total = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->paginate($perPage, $columns, $pageName, $page, $total);
        }
        /**
             * Paginate the given query into a simple paginator.
             *
             * @param  int|null                                   $perPage
             * @param  array|string                               $columns
             * @param  string                                     $pageName
             * @param  int|null                                   $page
             * @return Paginator
             * @static
             */ public static function simplePaginate($perPage = null, $columns = [], $pageName = 'page', $page = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->simplePaginate($perPage, $columns, $pageName, $page);
        }
        /**
             * Paginate the given query into a cursor paginator.
             *
             * @param  int|null                                         $perPage
             * @param  array|string                                     $columns
             * @param  string                                           $cursorName
             * @param  Cursor|string|null        $cursor
             * @return CursorPaginator
             * @static
             */ public static function cursorPaginate($perPage = null, $columns = [], $cursorName = 'cursor', $cursor = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->cursorPaginate($perPage, $columns, $cursorName, $cursor);
        }
        /**
             * Save a new model and return the instance.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function create($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->create($attributes);
        }
        /**
             * Save a new model and return the instance without raising model events.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function createQuietly($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->createQuietly($attributes);
        }
        /**
             * Save a new model and return the instance. Allow mass-assignment.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function forceCreate($attributes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->forceCreate($attributes);
        }
        /**
             * Save a new model instance with mass assignment without raising model events.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function forceCreateQuietly($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->forceCreateQuietly($attributes);
        }
        /**
             * Insert new records or update the existing ones.
             *
             * @param  array        $values
             * @param  array|string $uniqueBy
             * @param  array|null   $update
             * @return int
             * @static
             */ public static function upsert($values, $uniqueBy, $update = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->upsert($values, $uniqueBy, $update);
        }
        /**
             * Register a replacement for the default delete function.
             *
             * @param Closure $callback
             * @static
             */ public static function onDelete($callback): void
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            $instance->onDelete($callback);
        }
        /**
             * Call the given local model scopes.
             *
             * @param  array|string $scopes
             * @return mixed|static
             * @static
             */ public static function scopes($scopes)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->scopes($scopes);
        }
        /**
             * Apply the scopes to the Eloquent builder instance and return it.
             *
             * @return static
             * @static
             */ public static function applyScopes()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->applyScopes();
        }
        /**
             * Prevent the specified relations from being eager loaded.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function without($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->without($relations);
        }
        /**
             * Set the relationships that should be eager loaded while removing any previously added eager loading specifications.
             *
             * @param array<array-key, array|(\Closure(\Illuminate\Database\Eloquent\Relations\Relation<*,*,*>): mixed)|string>|string $relations
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withOnly($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withOnly($relations);
        }
        /**
             * Create a new instance of the model being queried.
             *
             * @param  array                                $attributes
             * @return TModel
             * @static
             */ public static function newModelInstance($attributes = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->newModelInstance($attributes);
        }
        /**
             * Apply query-time casts to the model instance.
             *
             * @param  array                                         $casts
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withCasts($casts)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCasts($casts);
        }
        /**
             * Execute the given Closure within a transaction savepoint if needed.
             *
             * @template TModelValue
             * @param  Closure():  TModelValue                  $scope
             * @return TModelValue
             * @static
             */ public static function withSavepointIfNeeded($scope)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withSavepointIfNeeded($scope);
        }
        /**
             * Get the underlying query builder instance.
             *
             * @return Builder
             * @static
             */ public static function getQuery()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getQuery();
        }
        /**
             * Set the underlying query builder instance.
             *
             * @param  Builder            $query
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function setQuery($query)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setQuery($query);
        }
        /**
             * Get a base query builder instance.
             *
             * @return Builder
             * @static
             */ public static function toBase()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->toBase();
        }
        /**
             * Get the relationships being eagerly loaded.
             *
             * @return array
             * @static
             */ public static function getEagerLoads()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getEagerLoads();
        }
        /**
             * Set the relationships being eagerly loaded.
             *
             * @param  array                                         $eagerLoad
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function setEagerLoads($eagerLoad)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setEagerLoads($eagerLoad);
        }
        /**
             * Indicate that the given relationships should not be eagerly loaded.
             *
             * @param  array                                         $relations
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withoutEagerLoad($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoad($relations);
        }
        /**
             * Flush the relationships being eagerly loaded.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withoutEagerLoads()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withoutEagerLoads();
        }
        /**
             * Get the model instance being queried.
             *
             * @return TModel
             * @static
             */ public static function getModel()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getModel();
        }
        /**
             * Set a model instance for the model being queried.
             *
             * @template TModelNew of Model
             * @param  TModelNew         $model
             * @return static<TModelNew>
             * @static
             */ public static function setModel($model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->setModel($model);
        }
        /**
             * Get the given macro by name.
             *
             * @param  string   $name
             * @return Closure
             * @static
             */ public static function getMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->getMacro($name);
        }
        /**
             * Checks if a macro is registered.
             *
             * @param  string $name
             * @return bool
             * @static
             */ public static function hasMacro($name)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMacro($name);
        }
        /**
             * Get the given global macro by name.
             *
             * @param  string   $name
             * @return Closure
             * @static
             */ public static function getGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::getGlobalMacro($name);
        }
        /**
             * Checks if a global macro is registered.
             *
             * @param  string $name
             * @return bool
             * @static
             */ public static function hasGlobalMacro($name)
        {
            return \Illuminate\Database\Eloquent\Builder::hasGlobalMacro($name);
        }
        /**
             * Clone the Eloquent query builder.
             *
             * @return static
             * @static
             */ public static function clone()
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->clone();
        }
        /**
             * Chunk the results of the query.
             *
             * @param  int                                                                                              $count
             * @param  callable(Collection<int, TValue>, int):  mixed $callback
             * @return bool
             * @static
             */ public static function chunk($count, $callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunk($count, $callback);
        }
        /**
             * Run a map over each item while chunking.
             *
             * @template TReturn
             * @param  callable(TValue):  TReturn $callback
             * @param  int                                                      $count
             * @return Collection<int, TReturn>
             * @static
             */ public static function chunkMap($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkMap($callback, $count);
        }
        /**
             * Execute a callback over each item while chunking.
             *
             * @param  callable(TValue, int):  mixed $callback
             * @param  int                                                         $count
             * @return bool
             * @static
             *@throws RuntimeException
             */ public static function each($callback, $count = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->each($callback, $count);
        }
        /**
             * Chunk the results of a query by comparing IDs.
             *
             * @param  int                                                                                              $count
             * @param  callable(Collection<int, TValue>, int):  mixed $callback
             * @param  string|null                                                                                      $column
             * @param  string|null                                                                                      $alias
             * @return bool
             * @static
             */ public static function chunkById($count, $callback, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkById($count, $callback, $column, $alias);
        }
        /**
             * Chunk the results of a query by comparing IDs in descending order.
             *
             * @param  int                                                                                              $count
             * @param  callable(Collection<int, TValue>, int):  mixed $callback
             * @param  string|null                                                                                      $column
             * @param  string|null                                                                                      $alias
             * @return bool
             * @static
             */ public static function chunkByIdDesc($count, $callback, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->chunkByIdDesc($count, $callback, $column, $alias);
        }
        /**
             * Chunk the results of a query by comparing IDs in a given order.
             *
             * @param  int                                                                                              $count
             * @param  callable(Collection<int, TValue>, int):  mixed $callback
             * @param  string|null                                                                                      $column
             * @param  string|null                                                                                      $alias
             * @param  bool                                                                                             $descending
             * @return bool
             * @static
             *@throws RuntimeException
             */ public static function orderedChunkById($count, $callback, $column = null, $alias = null, $descending = false)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orderedChunkById($count, $callback, $column, $alias, $descending);
        }
        /**
             * Execute a callback over each item while chunking by ID.
             *
             * @param  callable(TValue, int):  mixed $callback
             * @param  int                                                         $count
             * @param  string|null                                                 $column
             * @param  string|null                                                 $alias
             * @return bool
             * @static
             */ public static function eachById($callback, $count = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->eachById($callback, $count, $column, $alias);
        }
        /**
             * Query lazily, by chunks of the given size.
             *
             * @param  int                                $chunkSize
             * @return LazyCollection
             * @static
             *@throws InvalidArgumentException
             */ public static function lazy($chunkSize = 1000)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazy($chunkSize);
        }
        /**
             * Query lazily, by chunking the results of a query by comparing IDs.
             *
             * @param  int                                $chunkSize
             * @param  string|null                        $column
             * @param  string|null                        $alias
             * @return LazyCollection
             * @static
             *@throws InvalidArgumentException
             */ public static function lazyById($chunkSize = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyById($chunkSize, $column, $alias);
        }
        /**
             * Query lazily, by chunking the results of a query by comparing IDs in descending order.
             *
             * @param  int                                $chunkSize
             * @param  string|null                        $column
             * @param  string|null                        $alias
             * @return LazyCollection
             * @static
             *@throws InvalidArgumentException
             */ public static function lazyByIdDesc($chunkSize = 1000, $column = null, $alias = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->lazyByIdDesc($chunkSize, $column, $alias);
        }
        /**
             * Execute the query and get the first result.
             *
             * @param  array|string                              $columns
             * @return TValue|null
             * @static
             */ public static function first($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->first($columns);
        }
        /**
             * Execute the query and get the first result if it's the sole matching record.
             *
             * @param  array|string                                       $columns
             * @throws RecordsNotFoundException
             * @throws MultipleRecordsFoundException
             * @return TValue
             * @static
             */ public static function baseSole($columns = [])
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->baseSole($columns);
        }
        /**
             * Pass the query to a given callback.
             *
             * @param  callable($this):  mixed $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function tap($callback)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->tap($callback);
        }
        /**
             * Apply the callback if the given "value" is (or resolves to) truthy.
             *
             * @template TWhenParameter
             * @template TWhenReturnType
             * @param  (Closure($this): TWhenParameter)|TWhenParameter|null $value
             * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                             $callback
             * @param  (callable($this, TWhenParameter): TWhenReturnType)|null                             $default
             * @return $this|TWhenReturnType
             * @static
             */ public static function when($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->when($value, $callback, $default);
        }
        /**
             * Apply the callback if the given "value" is (or resolves to) falsy.
             *
             * @template TUnlessParameter
             * @template TUnlessReturnType
             * @param  (Closure($this): TUnlessParameter)|TUnlessParameter|null $value
             * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                             $callback
             * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null                             $default
             * @return $this|TUnlessReturnType
             * @static
             */ public static function unless($value = null, $callback = null, $default = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->unless($value, $callback, $default);
        }
        /**
             * Add a relationship count / exists condition to the query.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  string                                        $operator
             * @param  int                                           $count
             * @param  string                                        $boolean
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws RuntimeException
             */ public static function has($relation, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->has($relation, $operator, $count, $boolean, $callback);
        }
        /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param Relation<*, *, *>|string $relation
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHas($relation, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHas($relation, $operator, $count);
        }
        /**
             * Add a relationship count / exists condition to the query.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  string                                        $boolean
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function doesntHave($relation, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHave($relation, $boolean, $callback);
        }
        /**
             * Add a relationship count / exists condition to the query with an "or".
             *
             * @param Relation<*, *, *>|string $relation
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orDoesntHave($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHave($relation);
        }
        /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  Closure|null                                 $callback
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHas($relation, $callback, $operator, $count);
        }
        /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * Also load the relationship with same condition.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  Closure|null                                 $callback
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withWhereHas($relation, $callback, $operator, $count);
        }
        /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param Relation<*, *, *>|string $relation
             * @param  Closure|null                                 $callback
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereHas($relation, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHas($relation, $callback, $operator, $count);
        }
        /**
             * Add a relationship count / exists condition to the query with where clauses.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHave($relation, $callback);
        }
        /**
             * Add a relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param Relation<*, *, *>|string $relation
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereDoesntHave($relation, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHave($relation, $callback);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  string                                        $operator
             * @param  int                                           $count
             * @param  string                                        $boolean
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function hasMorph($relation, $types, $operator = '>=', $count = 1, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->hasMorph($relation, $types, $operator, $count, $boolean, $callback);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with an "or".
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHasMorph($relation, $types, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orHasMorph($relation, $types, $operator, $count);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  string                                        $boolean
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function doesntHaveMorph($relation, $types, $boolean = 'and', $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->doesntHaveMorph($relation, $types, $boolean, $callback);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with an "or".
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orDoesntHaveMorph($relation, $types)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orDoesntHaveMorph($relation, $types);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  Closure|null                                 $callback
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereHasMorph($relation, $types, $callback, $operator, $count);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  Closure|null                                 $callback
             * @param  string                                        $operator
             * @param  int                                           $count
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereHasMorph($relation, $types, $callback = null, $operator = '>=', $count = 1)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereHasMorph($relation, $types, $callback, $operator, $count);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereDoesntHaveMorph($relation, $types, $callback);
        }
        /**
             * Add a polymorphic relationship count / exists condition to the query with where clauses and an "or".
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                  $types
             * @param  Closure|null                                 $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereDoesntHaveMorph($relation, $types, $callback = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereDoesntHaveMorph($relation, $types, $callback);
        }
        /**
             * Add a basic where clause to a relationship query.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  array|Closure|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereRelation($relation, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereRelation($relation, $column, $operator, $value);
        }
        /**
             * Add an "or where" clause to a relationship query.
             *
             * @param Relation<*, *, *>|string $relation
             * @param  array|Closure|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereRelation($relation, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereRelation($relation, $column, $operator, $value);
        }
        /**
             * Add a polymorphic relationship condition to the query with a where clause.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                                          $types
             * @param  array|Closure|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereMorphRelation($relation, $types, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphRelation($relation, $types, $column, $operator, $value);
        }
        /**
             * Add a polymorphic relationship condition to the query with an "or where" clause.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  array|string                                                          $types
             * @param  array|Closure|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereMorphRelation($relation, $types, $column, $operator = null, $value = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphRelation($relation, $types, $column, $operator, $value);
        }
        /**
             * Add a morph-to relationship condition to the query.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  Model|string|null $model
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereMorphedTo($relation, $model, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereMorphedTo($relation, $model, $boolean);
        }
        /**
             * Add a not morph-to relationship condition to the query.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  Model|string    $model
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotMorphedTo($relation, $model, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereNotMorphedTo($relation, $model, $boolean);
        }
        /**
             * Add a morph-to relationship condition to the query with an "or where" clause.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  Model|string|null $model
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereMorphedTo($relation, $model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereMorphedTo($relation, $model);
        }
        /**
             * Add a not morph-to relationship condition to the query with an "or where" clause.
             *
             * @param MorphTo<*, *>|string $relation
             * @param  Model|string    $model
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotMorphedTo($relation, $model)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereNotMorphedTo($relation, $model);
        }
        /**
             * Add a "belongs to" relationship where clause to the query.
             *
             * @param  \Illuminate\Database\Eloquent\Collection<int, Model>|Model $related
             * @param  string|null                                                                                                            $relationshipName
             * @param  string                                                                                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws \Illuminate\Database\Eloquent\RelationNotFoundException
             */ public static function whereBelongsTo($related, $relationshipName = null, $boolean = 'and')
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->whereBelongsTo($related, $relationshipName, $boolean);
        }
        /**
             * Add a "BelongsTo" relationship with an "or where" clause to the query.
             *
             * @param  Model           $related
             * @param  string|null                                   $relationshipName
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws RuntimeException
             */ public static function orWhereBelongsTo($related, $relationshipName = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->orWhereBelongsTo($related, $relationshipName);
        }
        /**
             * Add subselect queries to include an aggregate value for a relationship.
             *
             * @param  Expression|string $column
             * @param  string                                                 $function
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withAggregate($relations, $column, $function = null)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAggregate($relations, $column, $function);
        }
        /**
             * Add subselect queries to count the relations.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withCount($relations)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withCount($relations);
        }
        /**
             * Add subselect queries to include the max of the relation's column.
             *
             * @param  array|string                                           $relation
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withMax($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMax($relation, $column);
        }
        /**
             * Add subselect queries to include the min of the relation's column.
             *
             * @param  array|string                                           $relation
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withMin($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withMin($relation, $column);
        }
        /**
             * Add subselect queries to include the sum of the relation's column.
             *
             * @param  array|string                                           $relation
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withSum($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withSum($relation, $column);
        }
        /**
             * Add subselect queries to include the average of the relation's column.
             *
             * @param  array|string                                           $relation
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withAvg($relation, $column)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withAvg($relation, $column);
        }
        /**
             * Add subselect queries to include the existence of related models.
             *
             * @param  array|string                                  $relation
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function withExists($relation)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->withExists($relation);
        }
        /**
             * Merge the where constraints from another query to the current query.
             *
             * @param \Illuminate\Database\Eloquent\Builder<*> $from
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function mergeConstraintsFrom($from)
        {
            /** @var \Illuminate\Database\Eloquent\Builder $instance */
            return $instance->mergeConstraintsFrom($from);
        }
        /**
             * Set the columns to be selected.
             *
             * @param  array|mixed                                   $columns
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function select($columns = [])
        {
            /** @var Builder $instance */
            return $instance->select($columns);
        }
        /**
             * Add a subselect expression to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                        $as
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function selectSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->selectSub($query, $as);
        }
        /**
             * Add a new "raw" select expression to the query.
             *
             * @param  string                                        $expression
             * @param  array                                         $bindings
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function selectRaw($expression, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->selectRaw($expression, $bindings);
        }
        /**
             * Makes "from" fetch from a subquery.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                        $as
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function fromSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->fromSub($query, $as);
        }
        /**
             * Add a raw from clause to the query.
             *
             * @param  string                                        $expression
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function fromRaw($expression, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->fromRaw($expression, $bindings);
        }
        /**
             * Add a new select column to the query.
             *
             * @param  array|mixed                                   $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function addSelect($column)
        {
            /** @var Builder $instance */
            return $instance->addSelect($column);
        }
        /**
             * Force the query to only return distinct results.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function distinct()
        {
            /** @var Builder $instance */
            return $instance->distinct();
        }
        /**
             * Set the table which the query is targeting.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|\Illuminate\Contracts\Database\Query\Expression|string $table
             * @param  string|null                                   $as
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function from($table, $as = null)
        {
            /** @var Builder $instance */
            return $instance->from($table, $as);
        }
        /**
             * Add an index hint to suggest a query index.
             *
             * @param  string                                        $index
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function useIndex($index)
        {
            /** @var Builder $instance */
            return $instance->useIndex($index);
        }
        /**
             * Add an index hint to force a query index.
             *
             * @param  string                                        $index
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function forceIndex($index)
        {
            /** @var Builder $instance */
            return $instance->forceIndex($index);
        }
        /**
             * Add an index hint to ignore a query index.
             *
             * @param  string                                        $index
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function ignoreIndex($index)
        {
            /** @var Builder $instance */
            return $instance->ignoreIndex($index);
        }
        /**
             * Add a join clause to the query.
             *
             * @param  Expression|string          $table
             * @param  Closure|Expression|string $first
             * @param  string|null                                                     $operator
             * @param  Expression|string|null     $second
             * @param  string                                                          $type
             * @param  bool                                                            $where
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function join($table, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var Builder $instance */
            return $instance->join($table, $first, $operator, $second, $type, $where);
        }
        /**
             * Add a "join where" clause to the query.
             *
             * @param  Expression|string          $table
             * @param  Closure|Expression|string $first
             * @param  string                                                          $operator
             * @param  Expression|string          $second
             * @param  string                                                          $type
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function joinWhere($table, $first, $operator, $second, $type = 'inner')
        {
            /** @var Builder $instance */
            return $instance->joinWhere($table, $first, $operator, $second, $type);
        }
        /**
             * Add a subquery join clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                                          $as
             * @param  Closure|Expression|string $first
             * @param  string|null                                                     $operator
             * @param  Expression|string|null     $second
             * @param  string                                                          $type
             * @param  bool                                                            $where
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function joinSub($query, $as, $first, $operator = null, $second = null, $type = 'inner', $where = false)
        {
            /** @var Builder $instance */
            return $instance->joinSub($query, $as, $first, $operator, $second, $type, $where);
        }
        /**
             * Add a lateral join clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                        $as
             * @param  string                                        $type
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function joinLateral($query, $as, $type = 'inner')
        {
            /** @var Builder $instance */
            return $instance->joinLateral($query, $as, $type);
        }
        /**
             * Add a lateral left join to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                        $as
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function leftJoinLateral($query, $as)
        {
            /** @var Builder $instance */
            return $instance->leftJoinLateral($query, $as);
        }
        /**
             * Add a left join to the query.
             *
             * @param  Expression|string          $table
             * @param  Closure|Expression|string $first
             * @param  string|null                                                     $operator
             * @param  Expression|string|null     $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function leftJoin($table, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->leftJoin($table, $first, $operator, $second);
        }
        /**
             * Add a "join where" clause to the query.
             *
             * @param  Expression|string          $table
             * @param  Closure|Expression|string $first
             * @param  string                                                          $operator
             * @param  Expression|string|null     $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function leftJoinWhere($table, $first, $operator, $second)
        {
            /** @var Builder $instance */
            return $instance->leftJoinWhere($table, $first, $operator, $second);
        }
        /**
             * Add a subquery left join to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                                          $as
             * @param  Closure|Expression|string $first
             * @param  string|null                                                     $operator
             * @param  Expression|string|null     $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function leftJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->leftJoinSub($query, $as, $first, $operator, $second);
        }
        /**
             * Add a right join to the query.
             *
             * @param  Expression|string      $table
             * @param  Closure|string                                             $first
             * @param  string|null                                                 $operator
             * @param  Expression|string|null $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function rightJoin($table, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->rightJoin($table, $first, $operator, $second);
        }
        /**
             * Add a "right join where" clause to the query.
             *
             * @param  Expression|string          $table
             * @param  Closure|Expression|string $first
             * @param  string                                                          $operator
             * @param  Expression|string          $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function rightJoinWhere($table, $first, $operator, $second)
        {
            /** @var Builder $instance */
            return $instance->rightJoinWhere($table, $first, $operator, $second);
        }
        /**
             * Add a subquery right join to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                                          $as
             * @param  Closure|Expression|string $first
             * @param  string|null                                                     $operator
             * @param  Expression|string|null     $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function rightJoinSub($query, $as, $first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->rightJoinSub($query, $as, $first, $operator, $second);
        }
        /**
             * Add a "cross join" clause to the query.
             *
             * @param  Expression|string               $table
             * @param  Closure|Expression|string|null $first
             * @param  string|null                                                          $operator
             * @param  Expression|string|null          $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function crossJoin($table, $first = null, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->crossJoin($table, $first, $operator, $second);
        }
        /**
             * Add a subquery cross join to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @param  string                                        $as
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function crossJoinSub($query, $as)
        {
            /** @var Builder $instance */
            return $instance->crossJoinSub($query, $as);
        }
        /**
             * Merge an array of where clauses and bindings.
             *
             * @param  array                                         $wheres
             * @param  array                                         $bindings
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function mergeWheres($wheres, $bindings)
        {
            /** @var Builder $instance */
            return $instance->mergeWheres($wheres, $bindings);
        }
        /**
             * Prepare the value and operator for a where clause.
             *
             * @param  string                    $value
             * @param  string                    $operator
             * @param  bool                      $useDefault
             * @return array
             * @static
             *@throws InvalidArgumentException
             */ public static function prepareValueAndOperator($value, $operator, $useDefault = false)
        {
            /** @var Builder $instance */
            return $instance->prepareValueAndOperator($value, $operator, $useDefault);
        }
        /**
             * Add a "where" clause comparing two columns to the query.
             *
             * @param  array|Expression|string $first
             * @param  string|null                                                  $operator
             * @param  string|null                                                  $second
             * @param  string|null                                                  $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereColumn($first, $operator = null, $second = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereColumn($first, $operator, $second, $boolean);
        }
        /**
             * Add an "or where" clause comparing two columns to the query.
             *
             * @param  array|Expression|string $first
             * @param  string|null                                                  $operator
             * @param  string|null                                                  $second
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereColumn($first, $operator = null, $second = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereColumn($first, $operator, $second);
        }
        /**
             * Add a raw where clause to the query.
             *
             * @param  string                                        $sql
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereRaw($sql, $bindings, $boolean);
        }
        /**
             * Add a raw or where clause to the query.
             *
             * @param  string                                        $sql
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orWhereRaw($sql, $bindings);
        }
        /**
             * Add a "where like" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $value
             * @param  bool                                                   $caseSensitive
             * @param  string                                                 $boolean
             * @param  bool                                                   $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereLike($column, $value, $caseSensitive = false, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereLike($column, $value, $caseSensitive, $boolean, $not);
        }
        /**
             * Add an "or where like" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $value
             * @param  bool                                                   $caseSensitive
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereLike($column, $value, $caseSensitive = false)
        {
            /** @var Builder $instance */
            return $instance->orWhereLike($column, $value, $caseSensitive);
        }
        /**
             * Add a "where not like" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $value
             * @param  bool                                                   $caseSensitive
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotLike($column, $value, $caseSensitive = false, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotLike($column, $value, $caseSensitive, $boolean);
        }
        /**
             * Add an "or where not like" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $value
             * @param  bool                                                   $caseSensitive
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotLike($column, $value, $caseSensitive = false)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotLike($column, $value, $caseSensitive);
        }
        /**
             * Add a "where in" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $boolean
             * @param  bool                                                   $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereIn($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereIn($column, $values, $boolean, $not);
        }
        /**
             * Add an "or where in" clause to the query.
             *
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereIn($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIn($column, $values);
        }
        /**
             * Add a "where not in" clause to the query.
             *
             * @param  Expression|string $column
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotIn($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotIn($column, $values, $boolean);
        }
        /**
             * Add an "or where not in" clause to the query.
             *
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotIn($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotIn($column, $values);
        }
        /**
             * Add a "where in raw" clause for integer values to the query.
             *
             * @param  string                                        $column
             * @param  array|Arrayable $values
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereIntegerInRaw($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereIntegerInRaw($column, $values, $boolean, $not);
        }
        /**
             * Add an "or where in raw" clause for integer values to the query.
             *
             * @param  string                                        $column
             * @param  array|Arrayable $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereIntegerInRaw($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIntegerInRaw($column, $values);
        }
        /**
             * Add a "where not in raw" clause for integer values to the query.
             *
             * @param  string                                        $column
             * @param  array|Arrayable $values
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereIntegerNotInRaw($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereIntegerNotInRaw($column, $values, $boolean);
        }
        /**
             * Add an "or where not in raw" clause for integer values to the query.
             *
             * @param  string                                        $column
             * @param  array|Arrayable $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereIntegerNotInRaw($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereIntegerNotInRaw($column, $values);
        }
        /**
             * Add a "where null" clause to the query.
             *
             * @param  array|Expression|string $columns
             * @param  string                                                       $boolean
             * @param  bool                                                         $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNull($columns, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereNull($columns, $boolean, $not);
        }
        /**
             * Add an "or where null" clause to the query.
             *
             * @param  array|Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNull($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereNull($column);
        }
        /**
             * Add a "where not null" clause to the query.
             *
             * @param  array|Expression|string $columns
             * @param  string                                                       $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotNull($columns, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotNull($columns, $boolean);
        }
        /**
             * Add a where between statement to the query.
             *
             * @param  Expression|string $column
             * @param  \Illuminate\Database\Query\iterable                    $values
             * @param  string                                                 $boolean
             * @param  bool                                                   $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereBetween($column, $values, $boolean, $not);
        }
        /**
             * Add a where between statement using columns to the query.
             *
             * @param  Expression|string $column
             * @param  array                                                  $values
             * @param  string                                                 $boolean
             * @param  bool                                                   $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereBetweenColumns($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereBetweenColumns($column, $values, $boolean, $not);
        }
        /**
             * Add an or where between statement to the query.
             *
             * @param  Expression|string $column
             * @param  \Illuminate\Database\Query\iterable                    $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereBetween($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereBetween($column, $values);
        }
        /**
             * Add an or where between statement using columns to the query.
             *
             * @param  Expression|string $column
             * @param  array                                                  $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereBetweenColumns($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereBetweenColumns($column, $values);
        }
        /**
             * Add a where not between statement to the query.
             *
             * @param  Expression|string $column
             * @param  \Illuminate\Database\Query\iterable                    $values
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotBetween($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotBetween($column, $values, $boolean);
        }
        /**
             * Add a where not between statement using columns to the query.
             *
             * @param  Expression|string $column
             * @param  array                                                  $values
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotBetweenColumns($column, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotBetweenColumns($column, $values, $boolean);
        }
        /**
             * Add an or where not between statement to the query.
             *
             * @param  Expression|string $column
             * @param  \Illuminate\Database\Query\iterable                    $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotBetween($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotBetween($column, $values);
        }
        /**
             * Add an or where not between statement using columns to the query.
             *
             * @param  Expression|string $column
             * @param  array                                                  $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotBetweenColumns($column, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotBetweenColumns($column, $values);
        }
        /**
             * Add an "or where not null" clause to the query.
             *
             * @param  Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotNull($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotNull($column);
        }
        /**
             * Add a "where date" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|string|null                         $operator
             * @param  DateTimeInterface|string|null                         $value
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereDate($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereDate($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where date" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|string|null                         $operator
             * @param  DateTimeInterface|string|null                         $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereDate($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereDate($column, $operator, $value);
        }
        /**
             * Add a "where time" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|string|null                         $operator
             * @param  DateTimeInterface|string|null                         $value
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereTime($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereTime($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where time" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|string|null                         $operator
             * @param  DateTimeInterface|string|null                         $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereTime($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereTime($column, $operator, $value);
        }
        /**
             * Add a "where day" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereDay($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereDay($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where day" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereDay($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereDay($column, $operator, $value);
        }
        /**
             * Add a "where month" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereMonth($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereMonth($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where month" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereMonth($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereMonth($column, $operator, $value);
        }
        /**
             * Add a "where year" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @param  string                                                 $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereYear($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereYear($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where year" statement to the query.
             *
             * @param  Expression|string $column
             * @param  DateTimeInterface|int|string|null                     $operator
             * @param  DateTimeInterface|int|string|null                     $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereYear($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereYear($column, $operator, $value);
        }
        /**
             * Add a nested where statement to the query.
             *
             * @param  Closure                                      $callback
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNested($callback, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNested($callback, $boolean);
        }
        /**
             * Create a new query instance for nested where condition.
             *
             * @return Builder
             * @static
             */ public static function forNestedWhere()
        {
            /** @var Builder $instance */
            return $instance->forNestedWhere();
        }
        /**
             * Add another query builder as a nested where to the query builder.
             *
             * @param  Builder            $query
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function addNestedWhereQuery($query, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->addNestedWhereQuery($query, $boolean);
        }
        /**
             * Add an exists clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $callback
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereExists($callback, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereExists($callback, $boolean, $not);
        }
        /**
             * Add an or exists clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $callback
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereExists($callback, $not = false)
        {
            /** @var Builder $instance */
            return $instance->orWhereExists($callback, $not);
        }
        /**
             * Add a where not exists clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $callback
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNotExists($callback, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNotExists($callback, $boolean);
        }
        /**
             * Add a where not exists clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNotExists($callback)
        {
            /** @var Builder $instance */
            return $instance->orWhereNotExists($callback);
        }
        /**
             * Add an exists clause to the query.
             *
             * @param  Builder            $query
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function addWhereExistsQuery($query, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->addWhereExistsQuery($query, $boolean, $not);
        }
        /**
             * Adds a where condition using row values.
             *
             * @param  array                                         $columns
             * @param  string                                        $operator
             * @param  array                                         $values
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function whereRowValues($columns, $operator, $values, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereRowValues($columns, $operator, $values, $boolean);
        }
        /**
             * Adds an or where condition using row values.
             *
             * @param  array                                         $columns
             * @param  string                                        $operator
             * @param  array                                         $values
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereRowValues($columns, $operator, $values)
        {
            /** @var Builder $instance */
            return $instance->orWhereRowValues($columns, $operator, $values);
        }
        /**
             * Add a "where JSON contains" clause to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonContains($column, $value, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereJsonContains($column, $value, $boolean, $not);
        }
        /**
             * Add an "or where JSON contains" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonContains($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonContains($column, $value);
        }
        /**
             * Add a "where JSON not contains" clause to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonDoesntContain($column, $value, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonDoesntContain($column, $value, $boolean);
        }
        /**
             * Add an "or where JSON not contains" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonDoesntContain($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonDoesntContain($column, $value);
        }
        /**
             * Add a "where JSON overlaps" clause to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonOverlaps($column, $value, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereJsonOverlaps($column, $value, $boolean, $not);
        }
        /**
             * Add an "or where JSON overlaps" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonOverlaps($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonOverlaps($column, $value);
        }
        /**
             * Add a "where JSON not overlap" clause to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonDoesntOverlap($column, $value, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonDoesntOverlap($column, $value, $boolean);
        }
        /**
             * Add an "or where JSON not overlap" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonDoesntOverlap($column, $value)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonDoesntOverlap($column, $value);
        }
        /**
             * Add a clause that determines if a JSON path exists to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonContainsKey($column, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->whereJsonContainsKey($column, $boolean, $not);
        }
        /**
             * Add an "or" clause that determines if a JSON path exists to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonContainsKey($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonContainsKey($column);
        }
        /**
             * Add a clause that determines if a JSON path does not exist to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonDoesntContainKey($column, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonDoesntContainKey($column, $boolean);
        }
        /**
             * Add an "or" clause that determines if a JSON path does not exist to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonDoesntContainKey($column)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonDoesntContainKey($column);
        }
        /**
             * Add a "where JSON length" clause to the query.
             *
             * @param  string                                        $column
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereJsonLength($column, $operator, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereJsonLength($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or where JSON length" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereJsonLength($column, $operator, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereJsonLength($column, $operator, $value);
        }
        /**
             * Handles dynamic "where" clauses to the query.
             *
             * @param  string                                        $method
             * @param  array                                         $parameters
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function dynamicWhere($method, $parameters)
        {
            /** @var Builder $instance */
            return $instance->dynamicWhere($method, $parameters);
        }
        /**
             * Add a "where fulltext" clause to the query.
             *
             * @param  string|string[]                               $columns
             * @param  string                                        $value
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereFullText($columns, $value, $options = [], $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereFullText($columns, $value, $options, $boolean);
        }
        /**
             * Add a "or where fulltext" clause to the query.
             *
             * @param  string|string[]                               $columns
             * @param  string                                        $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereFullText($columns, $value, $options = [])
        {
            /** @var Builder $instance */
            return $instance->orWhereFullText($columns, $value, $options);
        }
        /**
             * Add a "where" clause to the query for multiple columns with "and" conditions between them.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @param  string                                                                $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereAll($columns, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereAll($columns, $operator, $value, $boolean);
        }
        /**
             * Add an "or where" clause to the query for multiple columns with "and" conditions between them.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereAll($columns, $operator = null, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereAll($columns, $operator, $value);
        }
        /**
             * Add a "where" clause to the query for multiple columns with "or" conditions between them.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @param  string                                                                $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereAny($columns, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereAny($columns, $operator, $value, $boolean);
        }
        /**
             * Add an "or where" clause to the query for multiple columns with "or" conditions between them.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereAny($columns, $operator = null, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereAny($columns, $operator, $value);
        }
        /**
             * Add a "where not" clause to the query for multiple columns where none of the conditions should be true.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @param  string                                                                $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function whereNone($columns, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->whereNone($columns, $operator, $value, $boolean);
        }
        /**
             * Add an "or where not" clause to the query for multiple columns where none of the conditions should be true.
             *
             * @param  Closure[]|Expression[]|string[] $columns
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orWhereNone($columns, $operator = null, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orWhereNone($columns, $operator, $value);
        }
        /**
             * Add a "group by" clause to the query.
             *
             * @param  array|Expression|string $groups
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function groupBy(...$groups)
        {
            /** @var Builder $instance */
            return $instance->groupBy(...$groups);
        }
        /**
             * Add a raw groupBy clause to the query.
             *
             * @param  string                                        $sql
             * @param  array                                         $bindings
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function groupByRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->groupByRaw($sql, $bindings);
        }
        /**
             * Add a "having" clause to the query.
             *
             * @param  Closure|Expression|string $column
             * @param  float|int|string|null                                           $operator
             * @param  float|int|string|null                                           $value
             * @param  string                                                          $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function having($column, $operator = null, $value = null, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->having($column, $operator, $value, $boolean);
        }
        /**
             * Add an "or having" clause to the query.
             *
             * @param  Closure|Expression|string $column
             * @param  float|int|string|null                                           $operator
             * @param  float|int|string|null                                           $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHaving($column, $operator = null, $value = null)
        {
            /** @var Builder $instance */
            return $instance->orHaving($column, $operator, $value);
        }
        /**
             * Add a nested having statement to the query.
             *
             * @param  Closure                                      $callback
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function havingNested($callback, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->havingNested($callback, $boolean);
        }
        /**
             * Add another query builder as a nested having to the query builder.
             *
             * @param  Builder            $query
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function addNestedHavingQuery($query, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->addNestedHavingQuery($query, $boolean);
        }
        /**
             * Add a "having null" clause to the query.
             *
             * @param  array|string                                  $columns
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function havingNull($columns, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->havingNull($columns, $boolean, $not);
        }
        /**
             * Add an "or having null" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHavingNull($column)
        {
            /** @var Builder $instance */
            return $instance->orHavingNull($column);
        }
        /**
             * Add a "having not null" clause to the query.
             *
             * @param  array|string                                  $columns
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function havingNotNull($columns, $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->havingNotNull($columns, $boolean);
        }
        /**
             * Add an "or having not null" clause to the query.
             *
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHavingNotNull($column)
        {
            /** @var Builder $instance */
            return $instance->orHavingNotNull($column);
        }
        /**
             * Add a "having between " clause to the query.
             *
             * @param  string                                        $column
             * @param  \Illuminate\Database\Query\iterable           $values
             * @param  string                                        $boolean
             * @param  bool                                          $not
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function havingBetween($column, $values, $boolean = 'and', $not = false)
        {
            /** @var Builder $instance */
            return $instance->havingBetween($column, $values, $boolean, $not);
        }
        /**
             * Add a raw having clause to the query.
             *
             * @param  string                                        $sql
             * @param  array                                         $bindings
             * @param  string                                        $boolean
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function havingRaw($sql, $bindings = [], $boolean = 'and')
        {
            /** @var Builder $instance */
            return $instance->havingRaw($sql, $bindings, $boolean);
        }
        /**
             * Add a raw or having clause to the query.
             *
             * @param  string                                        $sql
             * @param  array                                         $bindings
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orHavingRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orHavingRaw($sql, $bindings);
        }
        /**
             * Add an "order by" clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|\Illuminate\Contracts\Database\Query\Expression|string $column
             * @param  string                                        $direction
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function orderBy($column, $direction = 'asc')
        {
            /** @var Builder $instance */
            return $instance->orderBy($column, $direction);
        }
        /**
             * Add a descending "order by" clause to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|\Illuminate\Contracts\Database\Query\Expression|string $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orderByDesc($column)
        {
            /** @var Builder $instance */
            return $instance->orderByDesc($column);
        }
        /**
             * Put the query's results in random order.
             *
             * @param  int|string                                    $seed
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function inRandomOrder($seed = '')
        {
            /** @var Builder $instance */
            return $instance->inRandomOrder($seed);
        }
        /**
             * Add a raw "order by" clause to the query.
             *
             * @param  string                                        $sql
             * @param  array                                         $bindings
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function orderByRaw($sql, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->orderByRaw($sql, $bindings);
        }
        /**
             * Alias to set the "offset" value of the query.
             *
             * @param  int                                           $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function skip($value)
        {
            /** @var Builder $instance */
            return $instance->skip($value);
        }
        /**
             * Set the "offset" value of the query.
             *
             * @param  int                                           $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function offset($value)
        {
            /** @var Builder $instance */
            return $instance->offset($value);
        }
        /**
             * Alias to set the "limit" value of the query.
             *
             * @param  int                                           $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function take($value)
        {
            /** @var Builder $instance */
            return $instance->take($value);
        }
        /**
             * Set the "limit" value of the query.
             *
             * @param  int                                           $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function limit($value)
        {
            /** @var Builder $instance */
            return $instance->limit($value);
        }
        /**
             * Add a "group limit" clause to the query.
             *
             * @param  int                                           $value
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function groupLimit($value, $column)
        {
            /** @var Builder $instance */
            return $instance->groupLimit($value, $column);
        }
        /**
             * Set the limit and offset for a given page.
             *
             * @param  int                                           $page
             * @param  int                                           $perPage
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function forPage($page, $perPage = 15)
        {
            /** @var Builder $instance */
            return $instance->forPage($page, $perPage);
        }
        /**
             * Constrain the query to the previous "page" of results before a given ID.
             *
             * @param  int                                           $perPage
             * @param  int|null                                      $lastId
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function forPageBeforeId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var Builder $instance */
            return $instance->forPageBeforeId($perPage, $lastId, $column);
        }
        /**
             * Constrain the query to the next "page" of results after a given ID.
             *
             * @param  int                                           $perPage
             * @param  int|null                                      $lastId
             * @param  string                                        $column
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function forPageAfterId($perPage = 15, $lastId = 0, $column = 'id')
        {
            /** @var Builder $instance */
            return $instance->forPageAfterId($perPage, $lastId, $column);
        }
        /**
             * Remove all existing orders and optionally add a new order.
             *
             * @param  Closure|Expression|Builder|string|null $column
             * @param  string                                                                                                  $direction
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function reorder($column = null, $direction = 'asc')
        {
            /** @var Builder $instance */
            return $instance->reorder($column, $direction);
        }
        /**
             * Add a union statement to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $query
             * @param  bool                                          $all
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function union($query, $all = false)
        {
            /** @var Builder $instance */
            return $instance->union($query, $all);
        }
        /**
             * Add a union all statement to the query.
             *
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*> $query
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function unionAll($query)
        {
            /** @var Builder $instance */
            return $instance->unionAll($query);
        }
        /**
             * Lock the selected rows in the table.
             *
             * @param  bool|string                                   $value
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function lock($value = true)
        {
            /** @var Builder $instance */
            return $instance->lock($value);
        }
        /**
             * Lock the selected rows in the table for updating.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function lockForUpdate()
        {
            /** @var Builder $instance */
            return $instance->lockForUpdate();
        }
        /**
             * Share lock the selected rows in the table.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function sharedLock()
        {
            /** @var Builder $instance */
            return $instance->sharedLock();
        }
        /**
             * Register a closure to be invoked before the query is executed.
             *
             * @param  callable                                      $callback
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function beforeQuery($callback)
        {
            /** @var Builder $instance */
            return $instance->beforeQuery($callback);
        }
        /**
             * Invoke the "before query" modification callbacks.
             *
             * @static
             */ public static function applyBeforeQueryCallbacks(): void
        {
            /** @var Builder $instance */
            $instance->applyBeforeQueryCallbacks();
        }
        /**
             * Get the SQL representation of the query.
             *
             * @return string
             * @static
             */ public static function toSql()
        {
            /** @var Builder $instance */
            return $instance->toSql();
        }
        /**
             * Get the raw SQL representation of the query with embedded bindings.
             *
             * @return string
             * @static
             */ public static function toRawSql()
        {
            /** @var Builder $instance */
            return $instance->toRawSql();
        }
        /**
             * Get a single expression value from the first result of a query.
             *
             * @param string $expression
             * @param array  $bindings
             * @static
             */ public static function rawValue($expression, $bindings = [])
        {
            /** @var Builder $instance */
            return $instance->rawValue($expression, $bindings);
        }
        /**
             * Get the count of the total records for the paginator.
             *
             * @param  array $columns
             * @return int
             * @static
             */ public static function getCountForPagination($columns = [])
        {
            /** @var Builder $instance */
            return $instance->getCountForPagination($columns);
        }
        /**
             * Concatenate values of a given column as a string.
             *
             * @param  string $column
             * @param  string $glue
             * @return string
             * @static
             */ public static function implode($column, $glue = '')
        {
            /** @var Builder $instance */
            return $instance->implode($column, $glue);
        }
        /**
             * Determine if any rows exist for the current query.
             *
             * @return bool
             * @static
             */ public static function exists()
        {
            /** @var Builder $instance */
            return $instance->exists();
        }
        /**
             * Determine if no rows exist for the current query.
             *
             * @return bool
             * @static
             */ public static function doesntExist()
        {
            /** @var Builder $instance */
            return $instance->doesntExist();
        }
        /**
             * Execute the given callback if no rows exist for the current query.
             *
             * @param Closure $callback
             * @static
             */ public static function existsOr($callback)
        {
            /** @var Builder $instance */
            return $instance->existsOr($callback);
        }
        /**
             * Execute the given callback if rows exist for the current query.
             *
             * @param Closure $callback
             * @static
             */ public static function doesntExistOr($callback)
        {
            /** @var Builder $instance */
            return $instance->doesntExistOr($callback);
        }
        /**
             * Retrieve the "count" result of the query.
             *
             * @param  Expression|string $columns
             * @return int
             * @static
             */ public static function count($columns = '*')
        {
            /** @var Builder $instance */
            return $instance->count($columns);
        }
        /**
             * Retrieve the minimum value of a given column.
             *
             * @param Expression|string $column
             * @static
             */ public static function min($column)
        {
            /** @var Builder $instance */
            return $instance->min($column);
        }
        /**
             * Retrieve the maximum value of a given column.
             *
             * @param Expression|string $column
             * @static
             */ public static function max($column)
        {
            /** @var Builder $instance */
            return $instance->max($column);
        }
        /**
             * Retrieve the sum of the values of a given column.
             *
             * @param Expression|string $column
             * @static
             */ public static function sum($column)
        {
            /** @var Builder $instance */
            return $instance->sum($column);
        }
        /**
             * Retrieve the average of the values of a given column.
             *
             * @param Expression|string $column
             * @static
             */ public static function avg($column)
        {
            /** @var Builder $instance */
            return $instance->avg($column);
        }
        /**
             * Alias for the "avg" method.
             *
             * @param Expression|string $column
             * @static
             */ public static function average($column)
        {
            /** @var Builder $instance */
            return $instance->average($column);
        }
        /**
             * Execute an aggregate function on the database.
             *
             * @param string $function
             * @param array  $columns
             * @static
             */ public static function aggregate($function, $columns = [])
        {
            /** @var Builder $instance */
            return $instance->aggregate($function, $columns);
        }
        /**
             * Execute a numeric aggregate function on the database.
             *
             * @param  string    $function
             * @param  array     $columns
             * @return float|int
             * @static
             */ public static function numericAggregate($function, $columns = [])
        {
            /** @var Builder $instance */
            return $instance->numericAggregate($function, $columns);
        }
        /**
             * Insert new records into the database.
             *
             * @param  array $values
             * @return bool
             * @static
             */ public static function insert($values)
        {
            /** @var Builder $instance */
            return $instance->insert($values);
        }
        /**
             * Insert new records into the database while ignoring errors.
             *
             * @param  array $values
             * @return int
             * @static
             */ public static function insertOrIgnore($values)
        {
            /** @var Builder $instance */
            return $instance->insertOrIgnore($values);
        }
        /**
             * Insert a new record and get the value of the primary key.
             *
             * @param  array       $values
             * @param  string|null $sequence
             * @return int
             * @static
             */ public static function insertGetId($values, $sequence = null)
        {
            /** @var Builder $instance */
            return $instance->insertGetId($values, $sequence);
        }
        /**
             * Insert new records into the table using a subquery.
             *
             * @param array $columns
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @return int
             * @static
             */ public static function insertUsing($columns, $query)
        {
            /** @var Builder $instance */
            return $instance->insertUsing($columns, $query);
        }
        /**
             * Insert new records into the table using a subquery while ignoring errors.
             *
             * @param array $columns
             * @param Closure|Builder|\Illuminate\Database\Eloquent\Builder<*>|string $query
             * @return int
             * @static
             */ public static function insertOrIgnoreUsing($columns, $query)
        {
            /** @var Builder $instance */
            return $instance->insertOrIgnoreUsing($columns, $query);
        }
        /**
             * Update records in a PostgreSQL database using the update from syntax.
             *
             * @param  array $values
             * @return int
             * @static
             */ public static function updateFrom($values)
        {
            /** @var Builder $instance */
            return $instance->updateFrom($values);
        }
        /**
             * Insert or update a record matching the attributes, and fill it with values.
             *
             * @param  array          $attributes
             * @param  array|callable $values
             * @return bool
             * @static
             */ public static function updateOrInsert($attributes, $values = [])
        {
            /** @var Builder $instance */
            return $instance->updateOrInsert($attributes, $values);
        }
        /**
             * Increment the given column's values by the given amounts.
             *
             * @param  array<string, float|int|numeric-string> $columns
             * @param  array<string, mixed>                    $extra
             * @return int
             * @static
             *@throws InvalidArgumentException
             */ public static function incrementEach($columns, $extra = [])
        {
            /** @var Builder $instance */
            return $instance->incrementEach($columns, $extra);
        }
        /**
             * Decrement the given column's values by the given amounts.
             *
             * @param  array<string, float|int|numeric-string> $columns
             * @param  array<string, mixed>                    $extra
             * @return int
             * @static
             *@throws InvalidArgumentException
             */ public static function decrementEach($columns, $extra = [])
        {
            /** @var Builder $instance */
            return $instance->decrementEach($columns, $extra);
        }
        /**
             * Run a truncate statement on the table.
             *
             * @static
             */ public static function truncate(): void
        {
            /** @var Builder $instance */
            $instance->truncate();
        }
        /**
             * Get all of the query builder's columns in a text-only array with all expressions evaluated.
             *
             * @return array
             * @static
             */ public static function getColumns()
        {
            /** @var Builder $instance */
            return $instance->getColumns();
        }
        /**
             * Create a raw database expression.
             *
             * @return Expression
             * @static
             */ public static function raw($value)
        {
            /** @var Builder $instance */
            return $instance->raw($value);
        }
        /**
             * Get the current query value bindings in a flattened array.
             *
             * @return array
             * @static
             */ public static function getBindings()
        {
            /** @var Builder $instance */
            return $instance->getBindings();
        }
        /**
             * Get the raw array of bindings.
             *
             * @return array
             * @static
             */ public static function getRawBindings()
        {
            /** @var Builder $instance */
            return $instance->getRawBindings();
        }
        /**
             * Set the bindings on the query builder.
             *
             * @param  array                                         $bindings
             * @param  string                                        $type
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function setBindings($bindings, $type = 'where')
        {
            /** @var Builder $instance */
            return $instance->setBindings($bindings, $type);
        }
        /**
             * Add a binding to the query.
             *
             * @param  string                                        $type
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             *@throws InvalidArgumentException
             */ public static function addBinding($value, $type = 'where')
        {
            /** @var Builder $instance */
            return $instance->addBinding($value, $type);
        }
        /**
             * Cast the given binding value.
             *
             * @static
             */ public static function castBinding($value)
        {
            /** @var Builder $instance */
            return $instance->castBinding($value);
        }
        /**
             * Merge an array of bindings into our bindings.
             *
             * @param  Builder            $query
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function mergeBindings($query)
        {
            /** @var Builder $instance */
            return $instance->mergeBindings($query);
        }
        /**
             * Remove all of the expressions from a list of bindings.
             *
             * @param  array $bindings
             * @return array
             * @static
             */ public static function cleanBindings($bindings)
        {
            /** @var Builder $instance */
            return $instance->cleanBindings($bindings);
        }
        /**
             * Get the database query processor instance.
             *
             * @return Processor
             * @static
             */ public static function getProcessor()
        {
            /** @var Builder $instance */
            return $instance->getProcessor();
        }
        /**
             * Get the query grammar instance.
             *
             * @return Grammar
             * @static
             */ public static function getGrammar()
        {
            /** @var Builder $instance */
            return $instance->getGrammar();
        }
        /**
             * Use the "write" PDO connection when executing the query.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function useWritePdo()
        {
            /** @var Builder $instance */
            return $instance->useWritePdo();
        }
        /**
             * Clone the query without the given properties.
             *
             * @param  array  $properties
             * @return static
             * @static
             */ public static function cloneWithout($properties)
        {
            /** @var Builder $instance */
            return $instance->cloneWithout($properties);
        }
        /**
             * Clone the query without the given bindings.
             *
             * @param  array  $except
             * @return static
             * @static
             */ public static function cloneWithoutBindings($except)
        {
            /** @var Builder $instance */
            return $instance->cloneWithoutBindings($except);
        }
        /**
             * Dump the current SQL and bindings.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function dump(...$args)
        {
            /** @var Builder $instance */
            return $instance->dump(...$args);
        }
        /**
             * Dump the raw current SQL with embedded bindings.
             *
             * @return \Illuminate\Database\Eloquent\Builder<static>
             * @static
             */ public static function dumpRawSql()
        {
            /** @var Builder $instance */
            return $instance->dumpRawSql();
        }
        /**
             * Die and dump the current SQL and bindings.
             *
             * @return never
             * @static
             */ public static function dd()
        {
            /** @var Builder $instance */
            return $instance->dd();
        }
        /**
             * Die and dump the current SQL with embedded bindings.
             *
             * @return never
             * @static
             */ public static function ddRawSql()
        {
            /** @var Builder $instance */
            return $instance->ddRawSql();
        }
        /**
             * Explains the query.
             *
             * @return Collection
             * @static
             */ public static function explain()
        {
            /** @var Builder $instance */
            return $instance->explain();
        }
        /**
             * Register a custom macro.
             *
             * @param string          $name
             * @param callable|object $macro
             * @param-closure-this static  $macro
             * @static
             */ public static function macro($name, $macro): void
        {
            Builder::macro($name, $macro);
        }
        /**
             * Mix another object into the class.
             *
             * @param  object               $mixin
             * @param  bool                 $replace
             * @throws ReflectionException
             * @static
             */ public static function mixin($mixin, $replace = true): void
        {
            Builder::mixin($mixin, $replace);
        }
        /**
             * Flush the existing macros.
             *
             * @static
             */ public static function flushMacros(): void
        {
            Builder::flushMacros();
        }
        /**
             * Dynamically handle calls to the class.
             *
             * @param  string                  $method
             * @param  array                   $parameters
             * @throws BadMethodCallException
             * @static
             */ public static function macroCall($method, $parameters)
        {
            /** @var Builder $instance */
            return $instance->macroCall($method, $parameters);
        }
    }
    final class Event extends \Illuminate\Support\Facades\Event
    {
    }
    final class File extends \Illuminate\Support\Facades\File
    {
    }
    final class Gate extends \Illuminate\Support\Facades\Gate
    {
    }
    final class Hash extends \Illuminate\Support\Facades\Hash
    {
    }
    final class Http extends \Illuminate\Support\Facades\Http
    {
    }
    final class Js extends \Illuminate\Support\Js
    {
    }
    final class Lang extends \Illuminate\Support\Facades\Lang
    {
    }
    final class Log extends \Illuminate\Support\Facades\Log
    {
    }
    final class Mail extends \Illuminate\Support\Facades\Mail
    {
    }
    final class Notification extends \Illuminate\Support\Facades\Notification
    {
    }
    final class Number extends \Illuminate\Support\Number
    {
    }
    final class Password extends \Illuminate\Support\Facades\Password
    {
    }
    final class Process extends \Illuminate\Support\Facades\Process
    {
    }
    final class Queue extends \Illuminate\Support\Facades\Queue
    {
    }
    final class RateLimiter extends \Illuminate\Support\Facades\RateLimiter
    {
    }
    final class Redirect extends \Illuminate\Support\Facades\Redirect
    {
    }
    final class Request extends \Illuminate\Support\Facades\Request
    {
    }
    final class Response extends \Illuminate\Support\Facades\Response
    {
    }
    final class Route extends \Illuminate\Support\Facades\Route
    {
    }
    final class Schedule extends \Illuminate\Support\Facades\Schedule
    {
    }
    final class Schema extends \Illuminate\Support\Facades\Schema
    {
    }
    final class Session extends \Illuminate\Support\Facades\Session
    {
    }
    final class Storage extends \Illuminate\Support\Facades\Storage
    {
    }
    final class Str extends \Illuminate\Support\Str
    {
    }
    final class URL extends \Illuminate\Support\Facades\URL
    {
    }
    final class Uri extends \Illuminate\Support\Uri
    {
    }
    final class Validator extends \Illuminate\Support\Facades\Validator
    {
    }
    final class View extends \Illuminate\Support\Facades\View
    {
    }
    final class Vite extends \Illuminate\Support\Facades\Vite
    {
    }
}
