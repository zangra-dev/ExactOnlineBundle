<?php

namespace aibianchi\ExactOnlineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use aibianchi\ExactOnlineBundle\DAO\Connection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


use aibianchi\ExactOnlineBundle\Model\Me;
use aibianchi\ExactOnlineBundle\Model\Account; 
use aibianchi\ExactOnlineBundle\Model\Item;

/**
 * Author: Jefferson Bianchi
 * Email : Jefferson@aibianchi.com
 */
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $code = $request->query->get('code');
        $exactManager = $this->get("exact_online.manager");
        $exactManager->init($code);

        /*
        * TESTED SECTION
        */
       
       
        $listAccount = $exactManager->getModel("Account")->getList(2,45);
        foreach ($list->Account as $account){
            dump($account);
        }
        /*
        $Criteria = array('AddressLine1' => 'Koningin Astridlaan 166');
        $Select   = array ("AddressLine1", "BusinessType", "CountryName", "Created");
        $OrderBy  = array('Created' => 'desc');
        $limit    = 1 ;
        $account  = $exactManager->getModel("Account")->findBy($Criteria,$Select,$OrderBy,$limit);
        dump($account);
        */

       /*$item = new Item();
        $item->setCode(rand());
        $item->setCostPriceStandard(5);
        $item->setDescription("description de test");
        $item->setIsSalesItem(true);
        $item->setSalesVatCode('VN');
        $exactManager->persist($item);

        $listItem = $exactManager->getModel("Item")->getList(1,5);
        foreach ($listItem as $item){
            dump($item);
        }*/


       /* $account = $exactManager->getModel("Account")->find("587707b8-94aa-426a-b7db-56d434d9e83a");
        $account->setAddressLine1("Bianchi");
        $account->setWebsite("https://aibianchi.com");
        $exactManager->update($account);

        $account = $exactManager->getModel("Account")->find("587707b8-94aa-426a-b7db-56d434d9e83a");

        //$exactManager->remove($account);*/

        return new JsonResponse("status :: ok");
       
    }
}
