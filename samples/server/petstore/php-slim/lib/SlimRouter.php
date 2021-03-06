<?php
/**
 * SlimRouter
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 * OpenAPI spec version: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */
namespace OpenAPIServer;

use Slim\App;
use Psr\Container\ContainerInterface;
use InvalidArgumentException;
use Tuupola\Middleware\HttpBasicAuthentication;

/**
 * SlimRouter Class Doc Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPIServer
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class SlimRouter
{

    /**
     * @var $slimApp Slim\App instance
     */
    private $slimApp;

    /** @var array[] list of all api operations */
    private $operations = [
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/another-fake/dummy',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractAnotherFakeApi',
            'userClassname' => 'AnotherFakeApi',
            'operationId' => 'call123TestSpecialTags',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/boolean',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterBooleanSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/composite',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterCompositeSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/number',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterNumberSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/outer/string',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'fakeOuterStringSerialize',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/body-with-file-schema',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testBodyWithFileSchema',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/body-with-query-params',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testBodyWithQueryParams',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testClientModel',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testEndpointParameters',
            'authMethods' => [
                [
                    'type' => 'http',
                    'isBasic' => true,
                ],
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testEnumParameters',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testGroupParameters',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/inline-additionalProperties',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testInlineAdditionalProperties',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/jsonFormData',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeApi',
            'userClassname' => 'FakeApi',
            'operationId' => 'testJsonFormData',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PATCH',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake_classname_test',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractFakeClassnameTags123Api',
            'userClassname' => 'FakeClassnameTags123Api',
            'operationId' => 'testClassname',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'addPet',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/findByStatus',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByStatus',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/findByTags',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'findPetsByTags',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePet',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'deletePet',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'getPetById',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'updatePetWithForm',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/pet/{petId}/uploadImage',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'uploadFile',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/fake/{petId}/uploadImageWithRequiredFile',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractPetApi',
            'userClassname' => 'PetApi',
            'operationId' => 'uploadFileWithRequiredFile',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/inventory',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getInventory',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'placeOrder',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order/{order_id}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'deleteOrder',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/store/order/{order_id}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractStoreApi',
            'userClassname' => 'StoreApi',
            'operationId' => 'getOrderById',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/createWithArray',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUsersWithArrayInput',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'POST',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/createWithList',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'createUsersWithListInput',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/login',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'loginUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/logout',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'logoutUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'DELETE',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'deleteUser',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'GET',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'getUserByName',
            'authMethods' => [
            ],
        ],
        [
            'httpMethod' => 'PUT',
            'basePathWithoutHost' => '/v2',
            'path' => '/user/{username}',
            'apiPackage' => 'OpenAPIServer\Api',
            'classname' => 'AbstractUserApi',
            'userClassname' => 'UserApi',
            'operationId' => 'updateUser',
            'authMethods' => [
            ],
        ],
    ];

    /**
     * Class constructor
     *
     * @param ContainerInterface|array $container Either a ContainerInterface or an associative array of app settings
     * @throws InvalidArgumentException when no container is provided that implements ContainerInterface
     */
    public function __construct($container = [])
    {
        $this->slimApp = new App($container);

        $basicAuth = new HttpBasicAuthentication([
            "secure" => false,
            "authenticator" => function ($arguments) {
                $user = $arguments["user"];
                $password = $arguments["password"];
                return false;
            }
        ]);

        foreach ($this->operations as $operation) {
            $callback = function ($request, $response, $arguments) use ($operation) {
                $message = "How about extending {$operation['classname']} by {$operation['apiPackage']}\\{$operation['userClassname']} class implementing {$operation['operationId']} as a {$operation['httpMethod']} method?";
                throw new \Exception($message);
                return $response->withStatus(501)->write($message);
            };
            $middlewares = [];

            if (class_exists("\\{$operation['apiPackage']}\\{$operation['userClassname']}")) {
                $callback = "\\{$operation['apiPackage']}\\{$operation['userClassname']}:{$operation['operationId']}";
            }


            foreach ($operation['authMethods'] as $authMethod) {
                if ($authMethod['type'] === 'http') {
                    $middlewares[] = $basicAuth;
                }
            }

            $this->addRoute(
                [$operation['httpMethod']],
                "{$operation['basePathWithoutHost']}{$operation['path']}",
                $callback,
                $middlewares
            )->setName($operation['operationId']);
        }
    }

    /**
     * Add route with multiple methods
     *
     * @param string[]        $methods     Numeric array of HTTP method names
     * @param string          $pattern     The route URI pattern
     * @param callable|string $callable    The route callback routine
     * @param array|null      $middlewares List of middlewares
     *
     * @return Slim\Interfaces\RouteInterface
     *
     * @throws InvalidArgumentException if the route pattern isn't a string
     */
    public function addRoute($methods, $pattern, $callable, $middlewares = [])
    {
        $route = $this->slimApp->map($methods, $pattern, $callable);
        foreach ($middlewares as $middleware) {
            $route->add($middleware);
        }
        return $route;
    }

    /**
     * Returns Slim Framework instance
     * @return App
     */
    public function getSlimApp()
    {
        return $this->slimApp;
    }
}
