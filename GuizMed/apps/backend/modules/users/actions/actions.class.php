<?php

/**
 * users actions.
 *
 * @package    GuizMed
 * @subpackage users
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class usersActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->ad_users = Doctrine_Core::getTable('AdUser')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->ad_user = Doctrine_Core::getTable('AdUser')->find(array($request->getParameter('user_id')));
    $this->forward404Unless($this->ad_user);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AdUserForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AdUserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($ad_user = Doctrine_Core::getTable('AdUser')->find(array($request->getParameter('user_id'))), sprintf('Object ad_user does not exist (%s).', $request->getParameter('user_id')));
    $this->form = new AdUserForm($ad_user);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($ad_user = Doctrine_Core::getTable('AdUser')->find(array($request->getParameter('user_id'))), sprintf('Object ad_user does not exist (%s).', $request->getParameter('user_id')));
    $this->form = new AdUserForm($ad_user);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($ad_user = Doctrine_Core::getTable('AdUser')->find(array($request->getParameter('user_id'))), sprintf('Object ad_user does not exist (%s).', $request->getParameter('user_id')));
    $ad_user->delete();

    $this->redirect('users/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $ad_user = $form->save();

      $this->redirect('users/edit?user_id='.$ad_user->getUserId());
    }
  }
}
