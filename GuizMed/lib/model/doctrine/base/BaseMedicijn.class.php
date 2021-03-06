<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Medicijn', 'doctrine');

/**
 * BaseMedicijn
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $hoofdklasse
 * @property string $generische_naam
 * @property string $specialiteit
 * @property string $magistraat_type
 * @property string $type
 * @property integer $bnf_percentage
 * @property integer $bnf_getal
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()              Returns the current record's "id" value
 * @method string    getHoofdklasse()     Returns the current record's "hoofdklasse" value
 * @method string    getGenerischeNaam()  Returns the current record's "generische_naam" value
 * @method string    getSpecialiteit()    Returns the current record's "specialiteit" value
 * @method string    getMagistraatType()  Returns the current record's "magistraat_type" value
 * @method string    getType()            Returns the current record's "type" value
 * @method integer   getBnfPercentage()   Returns the current record's "bnf_percentage" value
 * @method integer   getBnfGetal()        Returns the current record's "bnf_getal" value
 * @method timestamp getCreatedAt()       Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()       Returns the current record's "updated_at" value
 * @method Medicijn  setId()              Sets the current record's "id" value
 * @method Medicijn  setHoofdklasse()     Sets the current record's "hoofdklasse" value
 * @method Medicijn  setGenerischeNaam()  Sets the current record's "generische_naam" value
 * @method Medicijn  setSpecialiteit()    Sets the current record's "specialiteit" value
 * @method Medicijn  setMagistraatType()  Sets the current record's "magistraat_type" value
 * @method Medicijn  setType()            Sets the current record's "type" value
 * @method Medicijn  setBnfPercentage()   Sets the current record's "bnf_percentage" value
 * @method Medicijn  setBnfGetal()        Sets the current record's "bnf_getal" value
 * @method Medicijn  setCreatedAt()       Sets the current record's "created_at" value
 * @method Medicijn  setUpdatedAt()       Sets the current record's "updated_at" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMedicijn extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('medicijn');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('hoofdklasse', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('generische_naam', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('specialiteit', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('magistraat_type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('bnf_percentage', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('bnf_getal', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}