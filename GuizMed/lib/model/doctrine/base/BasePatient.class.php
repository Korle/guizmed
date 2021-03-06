<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Patient', 'doctrine');

/**
 * BasePatient
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $naam
 * @property string $voornaam
 * @property integer $geslacht
 * @property string $geboortedatum
 * @property string $medicatiescheme
 * @property string $opmerkingen
 * @property string $voorgeschiedenis
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()               Returns the current record's "id" value
 * @method string    getNaam()             Returns the current record's "naam" value
 * @method string    getVoornaam()         Returns the current record's "voornaam" value
 * @method integer   getGeslacht()         Returns the current record's "geslacht" value
 * @method string    getGeboortedatum()    Returns the current record's "geboortedatum" value
 * @method string    getMedicatiescheme()  Returns the current record's "medicatiescheme" value
 * @method string    getOpmerkingen()      Returns the current record's "opmerkingen" value
 * @method string    getVoorgeschiedenis() Returns the current record's "voorgeschiedenis" value
 * @method timestamp getCreatedAt()        Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()        Returns the current record's "updated_at" value
 * @method Patient   setId()               Sets the current record's "id" value
 * @method Patient   setNaam()             Sets the current record's "naam" value
 * @method Patient   setVoornaam()         Sets the current record's "voornaam" value
 * @method Patient   setGeslacht()         Sets the current record's "geslacht" value
 * @method Patient   setGeboortedatum()    Sets the current record's "geboortedatum" value
 * @method Patient   setMedicatiescheme()  Sets the current record's "medicatiescheme" value
 * @method Patient   setOpmerkingen()      Sets the current record's "opmerkingen" value
 * @method Patient   setVoorgeschiedenis() Sets the current record's "voorgeschiedenis" value
 * @method Patient   setCreatedAt()        Sets the current record's "created_at" value
 * @method Patient   setUpdatedAt()        Sets the current record's "updated_at" value
 * 
 * @package    GuizMed
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePatient extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('patient');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('naam', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('voornaam', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('geslacht', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('geboortedatum', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('medicatiescheme', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('opmerkingen', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('voorgeschiedenis', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
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