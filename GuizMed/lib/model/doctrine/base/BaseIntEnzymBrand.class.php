<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('IntEnzymBrand', 'doctrine');

/**
 * BaseIntEnzymBrand
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $int_brand_id
 * @property string $name
 * @property Doctrine_Collection $IntDrug
 * 
 * @method integer             getIntBrandId()   Returns the current record's "int_brand_id" value
 * @method string              getName()         Returns the current record's "name" value
 * @method Doctrine_Collection getIntDrug()      Returns the current record's "IntDrug" collection
 * @method IntEnzymBrand       setIntBrandId()   Sets the current record's "int_brand_id" value
 * @method IntEnzymBrand       setName()         Sets the current record's "name" value
 * @method IntEnzymBrand       setIntDrug()      Sets the current record's "IntDrug" collection
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIntEnzymBrand extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('int_enzym_brand');
        $this->hasColumn('int_brand_id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('IntDrug', array(
             'local' => 'int_brand_id',
             'foreign' => 'brand_id'));
    }
}