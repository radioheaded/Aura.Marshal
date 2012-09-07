<?php
/**
 * 
 * This file is part of the Aura project for PHP.
 * 
 * @package Aura.Marshal
 * 
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * 
 */
namespace Aura\Marshal\Relation;

/**
 * 
 * An interface for relationship description objects.
 * 
 * @package Aura.Marshal
 * 
 */
interface RelationInterface
{
    /**
     * 
     * Returns the foreign record or collection for a native record.
     * 
     * @param mixed $record The record to get the related record or
     * collection for.
     * 
     * @return \Aura\Marshal\Record\GenericRecord|\Aura\Marshal\Collection\GenericCollection
     * 
     */
    public function getForRecord($record);
}
 