<?php
/**
 * Host script for Game HUD
 *
 * @author  John Schavey  <jschavey@me.com>
 */

include( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR .
                             'php' . DIRECTORY_SEPARATOR .
                           'GameHUD.php'
);

//  Instantiate the app
$GameHUD = new JSchavey\GameHUD;

//  Output the preprocessed response
echo $GameHUD;
