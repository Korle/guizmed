<?php

/**
 * medicijnbeheer actions.
 *
 * @package    GuizMed
 * @subpackage medicijnbeheer
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class medicijnbeheerActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->med_forms = Doctrine_Core::getTable('medForm')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->med_form = Doctrine_Core::getTable('medForm')->find(array($request->getParameter('med_form_id')));
    $this->forward404Unless($this->med_form);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new medFormForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new medFormForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($med_form = Doctrine_Core::getTable('medForm')->find(array($request->getParameter('med_form_id'))), sprintf('Object med_form does not exist (%s).', $request->getParameter('med_form_id')));
    $this->form = new medFormForm($med_form);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($med_form = Doctrine_Core::getTable('medForm')->find(array($request->getParameter('med_form_id'))), sprintf('Object med_form does not exist (%s).', $request->getParameter('med_form_id')));
    $this->form = new medFormForm($med_form);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($med_form = Doctrine_Core::getTable('medForm')->find(array($request->getParameter('med_form_id'))), sprintf('Object med_form does not exist (%s).', $request->getParameter('med_form_id')));
    $med_form->delete();

    $this->redirect('medicijnbeheer/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $med_form = $form->save();

      $this->redirect('medicijnbeheer/edit?med_form_id='.$med_form->getMedFormId());
    }
  }
}
