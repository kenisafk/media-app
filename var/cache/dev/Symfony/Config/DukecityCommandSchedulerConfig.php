<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DukecityCommandSchedulerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $doctrineManager;
    private $logPath;
    private $lockTimeout;
    private $pingBackProvider;
    private $pingBack;
    private $pingBackFailed;
    private $monitorMail;
    private $monitorMailSubject;
    private $sendOk;
    private $excludedCommandNamespaces;
    private $includedCommandNamespaces;
    private $_usedProperties = [];

    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function doctrineManager($value): static
    {
        $this->_usedProperties['doctrineManager'] = true;
        $this->doctrineManager = $value;

        return $this;
    }

    /**
     * @default '%kernel.logs_dir%'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function logPath($value): static
    {
        $this->_usedProperties['logPath'] = true;
        $this->logPath = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lockTimeout($value): static
    {
        $this->_usedProperties['lockTimeout'] = true;
        $this->lockTimeout = $value;

        return $this;
    }

    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pingBackProvider($value): static
    {
        $this->_usedProperties['pingBackProvider'] = true;
        $this->pingBackProvider = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function pingBack($value): static
    {
        $this->_usedProperties['pingBack'] = true;
        $this->pingBack = $value;

        return $this;
    }

    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function pingBackFailed($value): static
    {
        $this->_usedProperties['pingBackFailed'] = true;
        $this->pingBackFailed = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function monitorMail(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['monitorMail'] = true;
        $this->monitorMail = $value;

        return $this;
    }

    /**
     * @default 'cronjob monitoring %%s, %%s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function monitorMailSubject($value): static
    {
        $this->_usedProperties['monitorMailSubject'] = true;
        $this->monitorMailSubject = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function sendOk($value): static
    {
        $this->_usedProperties['sendOk'] = true;
        $this->sendOk = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function excludedCommandNamespaces(mixed $value = array (
    )): static
    {
        $this->_usedProperties['excludedCommandNamespaces'] = true;
        $this->excludedCommandNamespaces = $value;

        return $this;
    }

    /**
     * @default array (
    )
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function includedCommandNamespaces(mixed $value = array (
    )): static
    {
        $this->_usedProperties['includedCommandNamespaces'] = true;
        $this->includedCommandNamespaces = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'dukecity_command_scheduler';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('doctrine_manager', $value)) {
            $this->_usedProperties['doctrineManager'] = true;
            $this->doctrineManager = $value['doctrine_manager'];
            unset($value['doctrine_manager']);
        }

        if (array_key_exists('log_path', $value)) {
            $this->_usedProperties['logPath'] = true;
            $this->logPath = $value['log_path'];
            unset($value['log_path']);
        }

        if (array_key_exists('lock_timeout', $value)) {
            $this->_usedProperties['lockTimeout'] = true;
            $this->lockTimeout = $value['lock_timeout'];
            unset($value['lock_timeout']);
        }

        if (array_key_exists('ping_back_provider', $value)) {
            $this->_usedProperties['pingBackProvider'] = true;
            $this->pingBackProvider = $value['ping_back_provider'];
            unset($value['ping_back_provider']);
        }

        if (array_key_exists('ping_back', $value)) {
            $this->_usedProperties['pingBack'] = true;
            $this->pingBack = $value['ping_back'];
            unset($value['ping_back']);
        }

        if (array_key_exists('ping_back_failed', $value)) {
            $this->_usedProperties['pingBackFailed'] = true;
            $this->pingBackFailed = $value['ping_back_failed'];
            unset($value['ping_back_failed']);
        }

        if (array_key_exists('monitor_mail', $value)) {
            $this->_usedProperties['monitorMail'] = true;
            $this->monitorMail = $value['monitor_mail'];
            unset($value['monitor_mail']);
        }

        if (array_key_exists('monitor_mail_subject', $value)) {
            $this->_usedProperties['monitorMailSubject'] = true;
            $this->monitorMailSubject = $value['monitor_mail_subject'];
            unset($value['monitor_mail_subject']);
        }

        if (array_key_exists('send_ok', $value)) {
            $this->_usedProperties['sendOk'] = true;
            $this->sendOk = $value['send_ok'];
            unset($value['send_ok']);
        }

        if (array_key_exists('excluded_command_namespaces', $value)) {
            $this->_usedProperties['excludedCommandNamespaces'] = true;
            $this->excludedCommandNamespaces = $value['excluded_command_namespaces'];
            unset($value['excluded_command_namespaces']);
        }

        if (array_key_exists('included_command_namespaces', $value)) {
            $this->_usedProperties['includedCommandNamespaces'] = true;
            $this->includedCommandNamespaces = $value['included_command_namespaces'];
            unset($value['included_command_namespaces']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['doctrineManager'])) {
            $output['doctrine_manager'] = $this->doctrineManager;
        }
        if (isset($this->_usedProperties['logPath'])) {
            $output['log_path'] = $this->logPath;
        }
        if (isset($this->_usedProperties['lockTimeout'])) {
            $output['lock_timeout'] = $this->lockTimeout;
        }
        if (isset($this->_usedProperties['pingBackProvider'])) {
            $output['ping_back_provider'] = $this->pingBackProvider;
        }
        if (isset($this->_usedProperties['pingBack'])) {
            $output['ping_back'] = $this->pingBack;
        }
        if (isset($this->_usedProperties['pingBackFailed'])) {
            $output['ping_back_failed'] = $this->pingBackFailed;
        }
        if (isset($this->_usedProperties['monitorMail'])) {
            $output['monitor_mail'] = $this->monitorMail;
        }
        if (isset($this->_usedProperties['monitorMailSubject'])) {
            $output['monitor_mail_subject'] = $this->monitorMailSubject;
        }
        if (isset($this->_usedProperties['sendOk'])) {
            $output['send_ok'] = $this->sendOk;
        }
        if (isset($this->_usedProperties['excludedCommandNamespaces'])) {
            $output['excluded_command_namespaces'] = $this->excludedCommandNamespaces;
        }
        if (isset($this->_usedProperties['includedCommandNamespaces'])) {
            $output['included_command_namespaces'] = $this->includedCommandNamespaces;
        }

        return $output;
    }

}
