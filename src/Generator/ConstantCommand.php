<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Devtool\Generator;

use Hyperf\Command\Annotation\Command;

#[Command]
class ConstantCommand extends GeneratorCommand
{
    public function __construct()
    {
        parent::__construct('gen:constant');
    }

    public function configure()
    {
        $this->setDescription('Create a new constant class');

        parent::configure();
    }

    protected function getStub(): string
    {
        return $this->getConfig()['stub'] ?? __DIR__ . '/stubs/constant.stub';
    }

    protected function getDefaultNamespace(): string
    {
        return $this->getConfig()['namespace'] ?? 'App\\Constants';
    }
}
