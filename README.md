<h1>Exact Online Bundle API</h1>

Author:   Bianchi Jefferson

Website: 	https://aibianchi.com

Mail: 		Jefferson@aibianchi.com

Exact Online doc: https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-getting-started

<hr/>
<h1>Requirements</h1>
Guzzle 6

branch for:

Symfony version 3.4

php version 7.1

<hr/>

<h3>STEP 1</h3>

Create your APP on : https://apps.exactonline.com/be/fr-BE/V2/Manage/

<h3>STEP 2</h3>

	 composer require aibianchi/exact-online-bundle
	
<h3>STEP 3</h3>

Add following lines in:
AppKernel.php:

	public function registerBundles()
	{
		$bundles = array(
		...
			new aibianchi\ExactOnlinebundle\ExactOnlineBundle(),
		...
		);
	}
	 
config.yml:

	exact_online:
		baseUrl:      %exact.baseUrl%
		apiUrl:       %exact.apiUrl%
		authUrl:      %exact.authUrl%
		tokenUrl:     %exact.tokenUrl%
		redirectUrl:  %exact.redirectUrl%
		clientId:     %exact.clientId%
		clientSecret: %exact.clientSecret%
    
parameter.yml:
    
    exact.baseUrl: https://start.exactonline.be/
    exact.apiUrl: api/v1
    exact.authUrl: api/oauth2/auth
    exact.tokenUrl: api/oauth2/token
    exact.redirectUrl: http:// YOUR URL.com/ExactRequest
    exact.clientId: YOUR CLIENT ID
    exact.clientSecret: YOUR CLIENT SECRET

routing.yml:

		exact_online_auth:
			path:     /ExactRequest
			defaults: { _controller: YOURBUNDLE:Default:index }
 
<h5>Note</h5> BaseUrl is link for your country so if you from Nederlands you need to modify extension https://start.exactonline.nl)

<h3>STEP 4</h3>
You need to update your database:

	php app/console doctrine:schema:update --force

<h3>STEP 5</h3>

In your controller :

     public function indexAction(Request $request)
    {
        // the code sended by exact online when the first auth
        $code = $request->query->get('code');
        
        // get service
        $exactManager = $this->get("exact_online.manager");
        // init service with code
        $exactManager->init($code);
    }

Next go to http:// YOUR URL.com/ExactRequest
Your authentication login will be required, this session will expire after 10 minutes
If you want to keep this session active, you need to use cron job with a php command app/console exact:refresh:token every 9 minutes 
<h5>Note</h5> 
You have Only 1 minute after your first Authentication to create cron job because this session will expire



for exemple:


refhreshToken.sh:

	#!/bin/bash
	php /*DIRECTORY OF YOUR PROJECT*/app/console exact:token:refresh
	
chmod 775 refhreshToken.sh

	crontab -e

add this line:

	*/9 * * * * /*DIRECTORY OF YOUR PROJECT*/refreshToken.sh

You will receive refresh token in your database every 9 minutes :)

<hr/>
<h1>Usage</h1>

<h3>Init</h3>

	$code = $request->query->get('code');
	$exactManager = $this->get("exact_online.manager");
	$exactManager->init($code);
	
<h3>getList($page, $maxPerPage)</h3> (with pagination)

	$listAccount = $exactManager->getModel("Account")->getList(1,5);
	foreach ($listAccount as $account){
		dump($account);
	}
				
<h3>findBy()</h3>

	$criteria = array('AddressLine1' => 'Koningin Astridlaan 166');
	$celect   = array ("AddressLine1", "BusinessType", "CountryName", "Created");
	$orderBy  = array('Created' => 'desc');
	$limit    = 1 ;
	$account  = $exactManager->getModel("Account")->findBy($criteria,$select,$orderBy,$limit);
	dump($account);
	
<h3>find</h3>	(guid)

	account = $exactManager->getModel("Account")->find("587707b8-94aa-426a-b7db-56d434d9e83a");
	
<h3>persist()</h3>
	
	$item = new Item();
	$item->setCode(rand());
	$item->setCostPriceStandard(5);
	$item->setDescription("description de test");
	$item->setIsSalesItem(true);
	$item->setSalesVatCode('VN');
	$exactManager->persist($item);
	
<h3>update()</h3>

	$account = $exactManager->getModel("Account")->find("587707b8-94aa-426a-b7db-56d434d9e83a");
	$account->setWebsite("https://aibianchi.com");
	$exactManager->update($account);
	
<h3>remove()</h3>

	$account = $exactManager->getModel("Account")->find("587707b8-94aa-426a-b7db-56d434d9e83a");
	$exactManager->remove($account);
 

