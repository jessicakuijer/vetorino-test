<?php

/**
 * The public routes.
 *
 * You can put the routes to your public pages usign your own Twig templates here.
 * Put your templates in the templates/piblic directory.
 */

$app->get('/', function ($request, $response, $args) {
	$homepage = new \Lagan\Model\Homepage;
	// Show homepage
	return $this->view->render(
		$response, 'public/index.html', 
		[ 'blocks' => $homepage->read() ]
	);
});

// Search
// $app->get('/hoverkraft/search', function ($request, $response, $args) {
// 	$search = new \Lagan\Search('hoverkraft');
	
// 	return $this->view->render(
// 		$response, 
// 		'public/search.html', 
// 		[
// 			'search' => $search->find( $request->getParams() ),
// 			'query' => $request->getParam('*has')
// 		]
// 	);
// });

// Show one Hoverkraft
// $app->get('/hoverkraft/{slug}', function ($request, $response, $args) {
// 	$hoverkraft = new \Lagan\Model\Hoverkraft;

// 	return $this->view->render(
// 		$response,
// 		'public/hoverkraft.html',
// 		[ 'hoverkraft' => $hoverkraft->read( $args['slug'], 'slug' ) ]
// 	);
// })->setName('hoverkraft');

?>