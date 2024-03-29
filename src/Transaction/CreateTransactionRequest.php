<?php

namespace AllDigitalRewards\RewardStack\Transaction;

use AllDigitalRewards\RewardStack\Common\Entity\AbstractEntity;
use AllDigitalRewards\RewardStack\Common\AbstractApiRequest;
use AllDigitalRewards\RewardStack\Participant\AddressRequest;
use AllDigitalRewards\RewardStack\Traits\MetaValidationTrait;
use Exception;

class CreateTransactionRequest extends AbstractApiRequest
{
    use MetaValidationTrait;
    /**
     * @var string
     */
    private $programId;
    /**
     * @var string
     */
    private $uniqueId;

    private $productCollection;
    /**
     * @var AddressRequest|null
     */
    private $shippingAddress;
    /**
     * @var array
     */
    private $transactionConfig;

    private $avsDisabled;

    protected $httpMethod = 'POST';

    /**
     * productRequestCollection is an associative array of sku/quantity pairs. HRA01 => 1
     * CreateTransactionRequest constructor.
     * @param string $programId
     * @param string $uniqueId
     * @param array $productRequestCollection
     * @param AddressRequest|null $shippingAddress
     * @param array $transactionConfig
     * @param bool $avsDisabled
     */
    public function __construct(
        string $programId,
        string $uniqueId,
        array $productRequestCollection,
        AddressRequest $shippingAddress = null,
        array $transactionConfig = [],
        bool $avsDisabled = false
    ) {
        $this->programId = $programId;
        $this->uniqueId = $uniqueId;
        $this->productCollection = $productRequestCollection;
        $this->shippingAddress = $shippingAddress;
        $this->transactionConfig = $transactionConfig;
        $this->avsDisabled = $avsDisabled;
    }

    public function getHttpEndpoint(): string
    {
        return "/api/program/{$this->programId}/participant/$this->uniqueId/transaction";
    }

    public function getQueryParams(): string
    {
        return 'lang=' . $this->getLang();
    }

    public function getResponseObject(): AbstractEntity
    {
        return new CreateTransactionResponse();
    }

    /**
     * @throws Exception
     */
    public function jsonSerialize(): array
    {
        if (empty($this->productCollection)) {
            throw new Exception('A product list must be supplied to request a transaction');
        }
        if (empty($this->transactionConfig['meta']) === false
            && $this->hasWellFormedMeta($this->transactionConfig['meta']) === false
        ) {
            throw new Exception(
                'Meta data provided must have valid key/values'
            );
        }
        $return = [
            "products" => $this->getMappedProductCollection(),
            "email_address" => $this->transactionConfig['email_address'] ?? null,
            "phone" => $this->transactionConfig['phone'] ?? null,
            "issue_points" => $this->transactionConfig['issue_points'] ?? true,
            "transaction_source" => $this->transactionConfig['transaction_source'] ?? 'NONE',
            "meta" => $this->transactionConfig['meta'] ?? [],
            "avs_disabled" => $this->avsDisabled == true,
        ];
        if ($this->shippingAddress instanceof AddressRequest) {
            $return['shipping'] = $this->shippingAddress;
        }
        return $return;
    }

    private function getMappedProductCollection(): array
    {
        $productCollection = [];
        foreach ($this->productCollection as $productRequest) {
            $product = [
                'sku' => $productRequest['sku'],
                'quantity' => $productRequest['quantity']
            ];

            if (isset($productRequest['amount'])) {
                $product['amount'] = $productRequest['amount'];
            }

            if (!empty($productRequest['terms'])) {
                $product['terms'] = $productRequest['terms'];
            }

            if (isset($productRequest['terms_approved'])) {
                $product['terms_approved'] = $productRequest['terms_approved'] == 1 ? true : false;
            }

            $productCollection[] = $product;
        }

        return $productCollection;
    }
}
