<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $category1 = $this->createCategory1();
        $category2 = $this->createCategory2();
        $category3 = $this->createCategory3();

        $manager->persist($category1);
        $manager->persist($category2);
        $manager->persist($category3);
        $manager->flush();
    }

    private function createCategory1() : Category
    {
        $category = new Category();

        $category->setName("Nutrition");

        return $category;
    }

    private function createCategory2() : Category
    {
        $category = new Category();

        $category->setName("Recette");

        return $category;
    }

    private function createCategory3() : Category
    {
        $category = new Category();

        $category->setName("Activité physique");

        return $category;
    }
}
