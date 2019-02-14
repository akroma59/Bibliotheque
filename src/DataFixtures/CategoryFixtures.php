<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;
use Faker;
use Faker\Provider\Base;


class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i=0; $i < 10; $i++)
        {
        $category = new Category();     
        $category->setName($faker->colorName);
        $manager->persist($category);
        $manager->flush();
        $this->addReference("category$i", $category);
        }    
    }
}
