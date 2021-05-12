<?php

namespace ExactOnlineBundle\Command;

use ExactOnlineBundle\DAO\Exception\ApiException;
use ExactOnlineBundle\Manager\ExactManager;
use Psr\Log\LoggerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * ExactOnlineBundle command.
 *
 * @author Jefferson Bianchi
 * @email jefferson@zangra.com
 */
class ExactSyncCommand extends Command
{
    private $exactManager;
    private $logger;

    public function __construct(ExactManager $exactManager, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->exactManager = $exactManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('exact:token:refresh')
            ->setDescription('refresh token every 9 minutes(cron job)')
            ->addArgument('country', InputArgument::REQUIRED, 'You need to specify country')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $logger = $this->logger;
        $logger->info('Waiting for refresh token...');

        $listCountry = ['Belgium', 'France', 'Nederland', 'Spain'];
        $country = $input->getArgument('country');

        if (!in_array($country, $listCountry)) {
            $output->writeln("<error>{$country} is unauthorized </error>");
            $output->writeln('<info>Please select a correct country in this list:</info>');
            print_r($listCountry);

            exit;
        }

        $output->writeln('country: '.$country);
        $output->writeln('<info>Waiting for refresh...</info>');

        try {
            $ExactManager = $this->exactManager;
            $ExactManager->refreshToken($country);

            $output->writeln('<info>Token was successfully refreshed</info>');
            $logger->info('Token was successfully refreshed');
        } catch (ApiException $e) {
            $logger->error('Token was not refreshed');
            $output->writeln("<error>Token was not refreshed : </error> Output: \n", $e->getStatusCode());
        }
    }
}
