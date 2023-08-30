<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $tag1 = $this->tag1();
        $tag2 = $this->tag2();
        $tag3 = $this->tag3();

        $manager->persist($tag1);
        $manager->persist($tag2);
        $manager->persist($tag3);

        $manager->flush();
    }
    
    private function tag1() : Tag
    {
        $tag = new Tag();
    
        $tag->setName("Bien-être");
    
        return $tag;
    }
    private function tag2() : Tag
    {
        $tag = new Tag();
    
        $tag->setName("Santé");
    
        return $tag;
    }
    private function tag3() : Tag
    {
        $tag = new Tag();
    
        $tag->setName("Bonne santé");
    
        return $tag;
    }
}
