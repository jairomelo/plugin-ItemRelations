<?php
require_once 'ItemRelationsItemRelationTable.php';
class ItemRelationsItemRelation extends Omeka_Record
{
    public $id;
    public $subject_item_id;
    public $object_item_id;
    public $relation_id;
}

