<?php

/**
 * patienten actions.
 *
 * @package    GuizMed
 * @subpackage patienten
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class patientenActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ad_patients = Doctrine_Core::getTable('adPatient')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id')));
    $this->forward404Unless($this->ad_patient);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new adPatientForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new adPatientForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $this->form = new adPatientForm($ad_patient);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $this->form = new adPatientForm($ad_patient);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ad_patient = Doctrine_Core::getTable('adPatient')->find(array($request->getParameter('patient_id'))), sprintf('Object ad_patient does not exist (%s).', $request->getParameter('patient_id')));
    $ad_patient->delete();

    $this->redirect('patienten/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ad_patient = $form->save();

      $this->redirect('patienten/edit?patient_id='.$ad_patient->getPatientId());
    }
  }
}
