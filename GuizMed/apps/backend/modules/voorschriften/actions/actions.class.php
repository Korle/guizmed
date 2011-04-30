<?php

/**
 * voorschriften actions.
 *
 * @package    GuizMed
 * @subpackage voorschriften
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voorschriftenActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ad_prescriptions = Doctrine_Core::getTable('adPrescription')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ad_prescription = Doctrine_Core::getTable('adPrescription')->find(array($request->getParameter('ad_presc_id')));
    $this->forward404Unless($this->ad_prescription);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new adPrescriptionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new adPrescriptionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ad_prescription = Doctrine_Core::getTable('adPrescription')->find(array($request->getParameter('ad_presc_id'))), sprintf('Object ad_prescription does not exist (%s).', $request->getParameter('ad_presc_id')));
    $this->form = new adPrescriptionForm($ad_prescription);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ad_prescription = Doctrine_Core::getTable('adPrescription')->find(array($request->getParameter('ad_presc_id'))), sprintf('Object ad_prescription does not exist (%s).', $request->getParameter('ad_presc_id')));
    $this->form = new adPrescriptionForm($ad_prescription);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ad_prescription = Doctrine_Core::getTable('adPrescription')->find(array($request->getParameter('ad_presc_id'))), sprintf('Object ad_prescription does not exist (%s).', $request->getParameter('ad_presc_id')));
    $ad_prescription->delete();

    $this->redirect('voorschriften/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ad_prescription = $form->save();

      $this->redirect('voorschriften/edit?ad_presc_id='.$ad_prescription->getAdPrescId());
    }
  }
}
