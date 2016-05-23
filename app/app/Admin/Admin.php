<?php

namespace App\Admin;

trait Admin
{
    /**
     * Returns an array of table column names
     *
     * @return mixed
     */
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}