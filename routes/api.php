<?php

/**
 * The JSON API routes.
 */

/**
 * Create JSON response
 *
 * @var object $response Slim response object.
 * @var string $code Error code.
 * @var string $message Response message.
 * @var array $data Data of beantype and one or more beans.
 *
 * @return string JSON response.
 */
function setResponse($response, $code, $message, $data) {

    $return = [];

    if ( !$code ) $code = 200;
    $return['meta']['code'] = $code;

    if ( $message ) $return['meta']['message'] = $message;

    if ( !$data ) $data = [];
    $return['response'] = $data;

    return $response->withJson($return, $code);

}

// Users need to authenticate with HTTP Basic Authentication middleware
$app->group('/api', function () {

    // Read requires no authentication
    $this->group('/read', function () {

        $this->get('[/]', function ($request, $response, $args) {
            $data = [
                'beantypes' => getBeantypes()
            ];
            return setResponse($response, 200, false, $data);
        });

        // Route of a certain type of bean
        $this->group('/{beantype}', function () {

            // List
            $this->get('[/]', function ($request, $response, $args) {

                try {

                    $c = setupBeanModel( $args['beantype'] );
                    $c->populateProperties( $args['id'] );

                    $data = [
                        'beantype' => $args['beantype'],
                        'beanproperties' => $c->properties
                    ];

                    // Search
                    $search = new \Lagan\Search( $args['beantype'] );
                    $data['search'] = R::exportAll( $search->find( $request->getParams() ) );

                    return setResponse($response, 200, false, $data);

                } catch (Exception $e) {

                    // Error
                    return setResponse($response, 400, $e->getMessage(), []);

                }
            });

            // Existing bean
            $this->get('/{id}', function ($request, $response, $args) {
                $c = setupBeanModel( $args['beantype'] );
                $c->populateProperties( $args['id'] );

                $data = [
                    'beantype' => $args['beantype'],
                    'beanproperties' => $c->properties,
                    'bean' => R::exportAll( $c->read( $args['id'] ) ) // Use exportAll to show related beans
                ];

                return setResponse($response, 200, false, $data);
            });

        });

    });

    // Write does require HTTP Basic Authentication middleware authentication, set in index.phph
    $this->group('/write', function () {

        // Route of a certian type of bean
        $this->group('/{beantype}', function () {

            // Add
            $this->post('[/]', function ($request, $response, $args) {
                try {

                    $c = setupBeanModel( $args['beantype'] );
                    $input = $request->getParsedBody();
                    $bean = $c->create( $input );
                    $data = [
                        'beantype' => $args['beantype'],
                        'beanproperties' => $c->properties,
                        'bean' => R::exportAll( $bean ) // Use exportAll to show related beans
                    ];
                    return setResponse($response, 200, $bean->title.' added', $data);

                } catch (Exception $e) {

                    // Error
                    return setResponse($response, 400, $e->getMessage(), []);

                }
            });

            // Update
            $this->put('/{id}', function ($request, $response, $args) {
                try {

                    $c = setupBeanModel( $args['beantype'] );
                    $input = $request->getParsedBody();
                    $bean = $c->update( $input , $args['id'] );
                    $data = [
                        'beantype' => $args['beantype'],
                        'beanproperties' => $c->properties,
                        'bean' => R::exportAll( $bean ) // Use exportAll to show related beans
                    ];
                    return setResponse($response, 200, $bean->title.' updated', $data);

                } catch (Exception $e) {

                    // Error
                    return setResponse($response, 400, $e->getMessage(), []);

                }
            });

            // Delete
            $this->delete('/{id}', function ($request, $response, $args) {
                try {

                    $c = setupBeanModel( $args['beantype'] );
                    $c->delete( $args['id'] );
                    return setResponse($response, 200, $args['beantype'].' deleted', []);

                } catch (Exception $e) {

                    // Error
                    return setResponse($response, 400, $e->getMessage(), []);

                }
            });

        });

    });



});

?>