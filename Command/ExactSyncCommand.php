<?php
namespace aibianchi\ExactOnlineBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Psr\Log\LoggerInterface;
use GuzzleHttp\Exception\ClientException;
use aibianchi\ExactOnlineBundle\DAO\Connection;
use aibianchi\ExactOnlineBundle\DAO\Exception\ApiException;
/**
 * ExactOnlineBundle command.
 *
 * @author Jefferson Bianchi
 * @email Jefferson@aibianchi.com
 */
class ExactSyncCommand extends Command {
    private $exactManager;
    private $logger;
        public function __construct($exactManager, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->exactManager = $exactManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('exact:token:refresh')
            ->setDescription('refresh token every 9 minutes(cron job)');
    }
    protected function execute(InputInterface $input, OutputInterface $output){

        $logger = $this->logger;
        $logger->info("Waiting for refresh token...");
        $output->writeln("<info>Waiting for refresh...</info>");

        try{

            $ExactManager = $this->exactManager;
            $ExactManager->refreshToken();
            $output->writeln("<info>Token was successfully refreshed</info>");
            $logger->info("Token was successfully refreshed");

        }catch(ApiException $e){

            $logger->error("Token was not refreshed");
            $output->writeln( "<error>Token was not refreshed : </error> Output: \n", $e->getStatusCode() );

        }
    }

}
