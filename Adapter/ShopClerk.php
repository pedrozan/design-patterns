<?php

namespace Adapter;


class ShopClerk
{
    public function receiveMoney($amount)
    {
        return 'You are paying ' . $amount;
    }

    public function deliverGoodies($goodies)
    {
        return 'Here are your ' . $goodies;
    }

}