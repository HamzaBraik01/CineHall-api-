<?php

namespace App\Repositories\Interfaces;

use Illuminate\Http\Request;

interface HallRepositoryInterface
{
    public function index();
    public function show(int $id);
    public function store(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function availableSeats(int $id);
    public function reservedSeats(int $id);
}
