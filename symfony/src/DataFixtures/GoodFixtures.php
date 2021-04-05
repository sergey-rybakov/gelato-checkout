<?php

declare(strict_types=1);

use App\Entity\Good;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class GoodsFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager)
    {
        $goodsArray = [
            [
                'name' => 'A',
                'price' => 50
            ],
            [
                'name' => 'B',
                'price' => 30
            ],
            [
                'name' => 'C',
                'price' => 20
            ],
            [
                'name' => 'D',
                'price' => 15
            ],
        ];

        foreach($goodsArray as $n => $good){
            $newGood = (new Good())
                        ->setSku($good['name'])
                        ->setPrice($good['price']);

            $this->addReference('goods-'.$n, $newGood);

            $manager->persist($newGood);
            $manager->flush();
        }
    }

    public function getDependencies()
    {
        return [
            RuleGoodFixtures::class
        ];
    }
}