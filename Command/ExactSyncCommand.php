<?php
namespace aibianchi\ExactOnlineBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use GuzzleHttp\Exception\ClientException;
use aibianchi\ExactOnlineBundle\DAO\Connection;
use aibianchi\ExactOnlineBundle\DAO\Exception\ApiException;


/**
 * ExactOnlineBundle command.
 *
 * @author Jefferson Bianchi
 * @email Jefferson@aibianchi.com
 */
class ExactSyncCommand extends ContainerAwareCommand{
	
    protected function configure()
    {
        $this
            ->setName('exact:token:refresh')
            ->setDescription('refresh token every 9 minutes(cron job)');
    }

    protected function execute(InputInterface $input, OutputInterface $output){

    	$logger = $this->getContainer()->get('monolog.logger.exactAPI');
    	$logger->info("Waiting for refresh token...");
    	$output->writeln("<info>Waiting for refresh...</info>");

    	try{
            $ExactManager = $this->getContainer()->get("exact_online.manager");
            $ExactManager->refreshToken();

    		$output->writeln("<info>Token was successfully refreshed</info>");
    		$logger->info("Token was successfully refreshed");

    	}catch(ApiException $e){
    		$logger->error("Token was not refreshed");
    		$output->writeln( "<error>Token was not refreshed : </error> Output: \n", $e->getStatusCode() );
    	}

    }
	
}