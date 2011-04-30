<?php

/**
 * basis actions.
 *
 * @package    GuizMed
 * @subpackage basis
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class basisActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->med_base_ids = Doctrine_Core::getTable('medBaseId')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->med_base_id = Doctrine_Core::getTable('medBaseId')->find(array($request->getParameter('med_base_id')));
    $this->forward404Unless($this->med_base_id);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new medBaseIdForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new medBaseIdForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($med_base_id = Doctrine_Core::getTable('medBaseId')->find(array($request->getParameter('med_base_id'))), sprintf('Object med_base_id does not exist (%s).', $request->getParameter('med_base_id')));
    $this->form = new medBaseIdForm($med_base_id);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($med_base_id = Doctrine_Core::getTable('medBaseId')->find(array($request->getParameter('med_base_id'))), sprintf('Object med_base_id does not exist (%s).', $request->getParameter('med_base_id')));
    $this->form = new medBaseIdForm($med_base_id);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($med_base_id = Doctrine_Core::getTable('medBaseId')->find(array($request->getParameter('med_base_id'))), sprintf('Object med_base_id does not exist (%s).', $request->getParameter('med_base_id')));
    $med_base_id->delete();

    $this->redirect('basis/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $med_base_id = $form->save();

      $this->redirect('basis/edit?med_base_id='.$med_base_id->getMedBaseId());
    }
  }
}
