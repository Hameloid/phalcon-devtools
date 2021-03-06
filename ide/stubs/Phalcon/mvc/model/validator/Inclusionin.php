<?php

namespace Phalcon\Mvc\Model\Validator;

/**
 * Phalcon\Mvc\Model\Validator\InclusionIn
 * Check if a value is included into a list of values
 * This validator is only for use with Phalcon\Mvc\Collection. If you are using
 * Phalcon\Mvc\Model, please use the validators provided by Phalcon\Validation.
 * <code>
 * use Phalcon\Mvc\Model\Validator\InclusionIn as InclusionInValidator;
 * class Subscriptors extends \Phalcon\Mvc\Collection
 * {
 * public function validation()
 * {
 * $this->validate(
 * new InclusionInValidator(
 * [
 * "field"  => "status",
 * "domain" => ["A", "I"],
 * ]
 * )
 * );
 * if ($this->validationHasFailed() === true) {
 * return false;
 * }
 * }
 * }
 * </code>
 */
class Inclusionin extends \Phalcon\Mvc\Model\Validator
{

    /**
     * Executes validator
     *
     * @param mixed $record 
     * @return bool 
     */
    public function validate(\Phalcon\Mvc\EntityInterface $record) {}

}
