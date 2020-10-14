<?php

namespace App\Repositories\Interfaces;

interface TestRepositoryInterface
{
    public function all();

    public function getTest(int $id);
}
