<?php

/**
 * The public routes.
 *
 * You can put the routes to your public pages usign your own Twig templates here.
 * Put your templates in the templates/piblic directory.
 */

$app->get('/', function ($request, $response, $args) {
	$homepage = new \Lagan\Model\Owners;
	// Show owners
	return $this->view->render(
		$response, 'public/index.html', 
		[ 'blocks' => $homepage->read() ]
	);
});

?>