<?php

namespace App\Traits;

use App\Helper\CacheQueryBuilder as Builder;

trait QueryCacheable
{
    /**
     * {@inheritdoc}
     */
    protected function newBaseQueryBuilder()
    {
        $connection = $this->getConnection();
        $builder    = new Builder(
            $connection,
            $connection->getQueryGrammar(),
            $connection->getPostProcessor()
        );
        if ($this->cacheFor) {
            $builder->cacheFor($this->cacheFor);
        }
        if ($this->cacheTags) {
            $builder->cacheTags($this->cacheTags);
        }
        if ($this->cachePrefix) {
            $builder->cachePrefix($this->cachePrefix);
        }
        if ($this->cacheDriver) {
            $builder->cacheDriver($this->cacheDriver);
        }
        if ($this->cacheUsePlainKey) {
            $builder->withPlainKey();
        }
        return $builder;
    }
}