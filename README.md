<h1>Exact Online Bundle API - This branch is on dev</h1>

Author:   Bianchi Jefferson

Website: 	https://aibianchi.com

Mail: 		Jefferson@aibianchi.com

Exact Online doc: https://support.exactonline.com/community/s/knowledge-base#All-All-DNO-Content-getting-started

<hr/>
<h1>Requirements</h1>
Guzzle 6

branch for:

Symfony version 4.2.4

php version 7.2

<hr/>

<h3>STEP 1</h3>

Create your APP on : https://apps.exactonline.com/be/fr-BE/V2/Manage/

<h3>STEP 2</h3>

	 composer require aibianchi/exact-online-bundle "4.2.4"

<h3>STEP 3</h3>

Now you can use multi account ( by country )

config/package/exact_online.yaml

    exact_online:
      belgium:
        baseUrl:      https://start.exactonline.be/
        apiUrl:       api/v1
        authUrl:      api/oauth2/auth
        tokenUrl:     api/oauth2/token
        redirectUrl:  https://YOURURL/ExactRequest
        clientId:     YOURID
        clientSecret: YOURSECRET
      france:
        baseUrl:      https://start.exactonline.fr/
        apiUrl:       api/v1
        authUrl:      api/oauth2/auth
        tokenUrl:     api/oauth2/token
        redirectUrl:  https://YOURURL/ExactRequest
        clientId:     YOURID
        clientSecret: YOURSECRET
      nerderland:
        baseUrl:      https://start.exactonline.nl/
        apiUrl:       api/v1
        authUrl:      api/oauth2/auth
        tokenUrl:     api/oauth2/token
        redirectUrl:  https://YOURURL/ExactRequest
        clientId:     YOURID
        clientSecret: YOURSECRET

<h3>STEP 4</h3>
You need to update your database:

	php app/console doctrine:schema:update --force

<h3>STEP 5</h3>

In your controller :

    use aibianchi\ExactOnlineBundle\Manager\ExactManager;

     public function indexAction(Request $request, ExactManager $exactManager)
    {
        // the code sended by exact online when the first auth
        $code = $request->query->get('code');
        $exactManager->init($code, "belgium"); // select your country account ( france; belgium; nederland)
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


