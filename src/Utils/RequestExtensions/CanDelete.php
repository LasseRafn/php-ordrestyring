<?php

namespace LasseRafn\Ordrestyring\Utils\RequestExtensions;

trait CanDelete
{
    public function delete($primaryKey)
    {
        return $this->getResponse(function () use ($primaryKey) {
            return $this->client->delete("{$this->endpoint}/{$primaryKey}");
        });
    }
}
