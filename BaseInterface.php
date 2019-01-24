<?php

interface BaseInterface
{
    public function create(array $attr): bool;

    public function delete(int $id): bool;

    public function update(array $attr, int $id): void;

    public function fetchAll(array $attr): void;
}
