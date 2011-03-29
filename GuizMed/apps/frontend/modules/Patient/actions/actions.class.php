<?php

/**
 * Patient actions.
 *
 * @package    GuizMed
 * @subpackage Patient
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PatientActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->patients = Doctrine_Core::getTable('Patient')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->patient = Doctrine_Core::getTable('Patient')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->patient);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PatientForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PatientForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($patient = Doctrine_Core::getTable('Patient')->find(array($request->getParameter('id'))), sprintf('Object patient does not exist (%s).', $request->getParameter('id')));
    $this->form = new PatientForm($patient);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($patient = Doctrine_Core::getTable('Patient')->find(array($request->getParameter('id'))), sprintf('Object patient does not exist (%s).', $request->getParameter('id')));
    $this->form = new PatientForm($patient);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($patient = Doctrine_Core::getTable('Patient')->find(array($request->getParameter('id'))), sprintf('Object patient does not exist (%s).', $request->getParameter('id')));
    $patient->delete();

    $this->redirect('Patient/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $patient = $form->save();

      $this->redirect('Patient/edit?id='.$patient->getId());
    }
  }
}
