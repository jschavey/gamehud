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

class GameHUD extends Web\Application {}
