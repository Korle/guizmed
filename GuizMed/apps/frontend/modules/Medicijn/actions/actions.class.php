<?php

/**
 * Medicijn actions.
 *
 * @package    GuizMed
 * @subpackage Medicijn
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MedicijnActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->medicijns = Doctrine_Core::getTable('Medicijn')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->medicijn = Doctrine_Core::getTable('Medicijn')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->medicijn);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new MedicijnForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new MedicijnForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($medicijn = Doctrine_Core::getTable('Medicijn')->find(array($request->getParameter('id'))), sprintf('Object medicijn does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicijnForm($medicijn);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($medicijn = Doctrine_Core::getTable('Medicijn')->find(array($request->getParameter('id'))), sprintf('Object medicijn does not exist (%s).', $request->getParameter('id')));
    $this->form = new MedicijnForm($medicijn);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($medicijn = Doctrine_Core::getTable('Medicijn')->find(array($request->getParameter('id'))), sprintf('Object medicijn does not exist (%s).', $request->getParameter('id')));
    $medicijn->delete();

    $this->redirect('Medicijn/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $medicijn = $form->save();

      $this->redirect('Medicijn/edit?id='.$medicijn->getId());
    }
  }
}
