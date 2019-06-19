<?php

declare(strict_types = 1);

namespace Nefedov89\WaspIntegration\Traits;

/**
 * Trait ApiAttachmentsTrait
 *
 * @package Nefedov89\WaspIntegration\Traits
 */
trait ApiAttachmentsTrait
{
    /**
     * @param array $request
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     *
     * @throws \RuntimeException
     */
    public function attachmentsUplodAttachmentsForForms(array $request)
    {
        return $this->request(
            'POST',
            'attachments/uplodAttachmentsForForms',
            $request
        );
    }
}
