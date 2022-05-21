<?php
namespace Restapi\Second\Model\Resolver;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolverInfo;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\GraphQl\Exception\GraphQlNoSuchEntityException;
class Grid implements ResolverInterface
{
  /**
   * @param Field $field
   * @param \Magento\Framework\GraphQl\Query\Resolver\ContextInterface $context
   * @param ResolverInfo $info
   * @param array|null $value
   * @param array|\Magento\Framework\GraphQl\Query\Resolver\Value|mixed
*/
  protected DishFactory;
  public function resolve(
     Field $field,
     $context,
     ResolveInfo $info,
     array $value = null,
     \Jaik\Poter\Model\DishFactory $DishFactory
    )
    {
      $this->DishFactory = $DishFactory;
      try{
        $collection = $this->DishFactory->create()->getCollection();
        $records = $collection->getData();
      }catch(NoSuchEntityException $e){
        throw new  GraphQlNoSuchEntityException(__($e->getMessage()), $e);
      }
      return $records
    }
}
