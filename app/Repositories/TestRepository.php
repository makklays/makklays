<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TestRepositoryInterface;
use App\Test;

class TestRepository implements TestRepositoryInterface
{
    public function all()
    {
        return Test::all();
    }

    public function getTest(int $id)
    {
        return Test::where('id', $id)->get();
    }
}
