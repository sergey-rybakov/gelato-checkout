<?php

declare(strict_types=1);

use App\Entity\RulesGoods;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use App\DBAL\RuleGoodDiscountType;

class RuleFixtures extends Fixture implements FixtureGroupInterface
{
    public function load(ObjectManager $manager)SUM_PER_ITEM
    {
        $ruleArray = [
            [
                'name' => 'Set of 8',
                'compatable' => 1,
                'priority' => 1,
                'enable' => 1,
                'RuleGoodDiscountType' => RuleGoodDiscountType::SUM_PER_ITEM,
                'RuleGoodDiscountValue' => 4
            ],
            [
                'name' => 'Set of 4',
                'compatable' => 1,
                'priority' => 2,
                'enable' => 1,
                'RuleGoodDiscountType' => RuleGoodDiscountType::SUM_PER_ITEM,
                'RuleGoodDiscountValue' => 2
            ],
            [
                'name' => 'Set of 3',
                'compatable' => 0,
                'priority' => 3,
                'enable' => 1,
                'RuleGoodDiscountType' => RuleGoodDiscountType::PERCENT_FOR_SUBSET,
                'RuleGoodDiscountValue' => 15
            ],
            [
                'name' => 'Set of 2',
                'compatable' => 1,
                'priority' => 4,
                'enable' => 1,
                'RuleGoodDiscountType' => RuleGoodDiscountType::SUM_FOR_SUBSET,
                'RuleGoodDiscountValue' => 20
            ]
        ];

        foreach($rulesArray as $n => $rule){
            $newRuleGood = (new GoodRule())
                        ->setName($rule['name'])
                        ->setCompartable($rule['compartable'])
                        ->setPriority($rule['priority'])
                        ->setEnable($rule['enable'])
                        ->setRuleGoodDiscountType($rule['RuleGoodDiscountType'])
                        ->setRuleGoodDiscountValue($rule['RuleGoodDiscountValue']);

            $this->addReference('goodsRules-'.$n, $newRuleGood);

            $manager->persist($newRuleGood);
            $manager->flush();
        }
    }

    public function getDependencies()
    {
        return [
        ];
    }
}