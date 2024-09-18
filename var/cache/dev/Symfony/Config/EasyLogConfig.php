<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EasyLogConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $logPath;
    private $maxLineLength;
    private $prefixLength;
    private $ignoredRoutes;
    private $_usedProperties = [];

    /**
     * Path where readable log file will be located
     * @default '%kernel.logs_dir%/%kernel.environment%-readable.log'
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
     * Max line length in log file
     * @default 120
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxLineLength($value): static
    {
        $this->_usedProperties['maxLineLength'] = true;
        $this->maxLineLength = $value;

        return $this;
    }

    /**
     * Prefix length in log file
     * @default 2
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function prefixLength($value): static
    {
        $this->_usedProperties['prefixLength'] = true;
        $this->prefixLength = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function ignoredRoutes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['ignoredRoutes'] = true;
        $this->ignoredRoutes = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'easy_log';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('log_path', $value)) {
            $this->_usedProperties['logPath'] = true;
            $this->logPath = $value['log_path'];
            unset($value['log_path']);
        }

        if (array_key_exists('max_line_length', $value)) {
            $this->_usedProperties['maxLineLength'] = true;
            $this->maxLineLength = $value['max_line_length'];
            unset($value['max_line_length']);
        }

        if (array_key_exists('prefix_length', $value)) {
            $this->_usedProperties['prefixLength'] = true;
            $this->prefixLength = $value['prefix_length'];
            unset($value['prefix_length']);
        }

        if (array_key_exists('ignored_routes', $value)) {
            $this->_usedProperties['ignoredRoutes'] = true;
            $this->ignoredRoutes = $value['ignored_routes'];
            unset($value['ignored_routes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['logPath'])) {
            $output['log_path'] = $this->logPath;
        }
        if (isset($this->_usedProperties['maxLineLength'])) {
            $output['max_line_length'] = $this->maxLineLength;
        }
        if (isset($this->_usedProperties['prefixLength'])) {
            $output['prefix_length'] = $this->prefixLength;
        }
        if (isset($this->_usedProperties['ignoredRoutes'])) {
            $output['ignored_routes'] = $this->ignoredRoutes;
        }

        return $output;
    }

}
