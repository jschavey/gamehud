<?php
/**
 * GameHUD Declaration
 *
 * @author  John Schavey  <jschavey@me.com>
 */

namespace JSchavey;

include( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
                              '..' . DIRECTORY_SEPARATOR .
                          'common' . DIRECTORY_SEPARATOR .
                             'Web' . DIRECTORY_SEPARATOR .
                       'Application.php'
);

class GameHUD extends Runtime\Web\Application {
  /**
   * GameHUD's constructor
   */
  public function __construct() {
    //  Ensure parent code is executed
    parent::__construct();

    //  Define GameHUD library
    $lib = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
                               'php' . DIRECTORY_SEPARATOR;

    //  Register GameHUD namespace's directory and prioritize its use
    $this->registerClassPrefix( 'JSchavey\GameHUD', $lib, true );
  }
}
