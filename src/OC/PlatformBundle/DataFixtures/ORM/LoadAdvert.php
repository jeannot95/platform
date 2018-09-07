<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadAdvert.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;

class LoadAdvert implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {

    $advert = new Advert();
    $advert->setTitle('Recherche développeur Symfony.');
    $advert->setAuthor('Alexandre');
    $advert->setContent("Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…");

    $advert2 = new Advert();
    $advert2->setTitle('Recherche développeur PHP.');
    $advert2->setAuthor('Bobby');
    $advert2->setContent("Nous recherchons un développeur PHP débutant sur Paris. Blabla…");

    $advert3 = new Advert();
    $advert3->setTitle('Recherche développeur JAVA.');
    $advert3->setAuthor('Jimmy');
    $advert3->setContent("Nous recherchons un développeur JAVA débutant sur Marseilles. Blabla…");	 
    // Création de l'entité Image
    $image = new Image();
    $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image->setAlt('Job de rêve');

    $image2 = new Image();
    $image2->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image2->setAlt('Job de rêve');
	
    $image3 = new Image();
    $image3->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
    $image3->setAlt('Job de rêve');	
	
    $advert->setImage($image);
    $advert2->setImage($image2);
    $advert3->setImage($image3); 
	$manager->persist($advert);
 	$manager->persist($advert2);
	$manager->persist($advert3); 


    // On déclenche l'enregistrement de toutes les compétences
    $manager->flush();
  }
}
