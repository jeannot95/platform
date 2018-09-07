<?php
// src/OC/PlatformBundle/PurgerPlatform/OCPurgerPlatform.php

namespace OC\PlatformBundle\PurgerPlatform;
use Doctrine\Common\Persistence\ManagerRegistry; // ne pas oubliez ce use

class OCPurgerPlatform
{

	private $days;
	private $managerRegistry;
	
	public function __construct(ManagerRegistry  $managerRegistry)
	{
	$this->managerRegistry = $managerRegistry;
	}	

	
  /**
   * purge tous les advert sans candidatures, plus ancien que $days
   *
   * @param int $days
   * @return advertList
   */	
	public function purge($days)
	{
		
		$em = $this->managerRegistry->getManager();	
		$rep = $em->getRepository('OCPlatformBundle:Advert');
		$purge = $rep->getAdvertsSansApplication($days);

		foreach ($purge as $removeAdvert)
		{	
				$em->remove($removeAdvert);
				$em->flush();	
		}   		
		
	}  


}