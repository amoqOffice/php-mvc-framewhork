<?php 

declare(strict_types=1);

namespace Aven;

use Aven\Exceptions\RouterException;

class Router
{
    use RouterTrait;

    /**
     * available route methods
     *
     * @var array
     */
    private $availMethods = array(
        'GET', 'POST', 'PUT', 'DELETE', 'ANY', 'HEAD'
    );

    /**
     * routing table object
     *
     * @var object
     */
    private $table;

    /**
     * routes filter object
     *
     * @var object
     */
    private $filter; 

    /**
     * routes validator
     *
     * @var object
     */
    private $validator; 

    /**
     * available routes
     *
     * @var array
     */
    private $routes;

    /**
     * route group
     *
     * @var ?string
     */
    private  $group     = NULL;

    /**
     * group name
     *
     * @var ?string
     */
    private  $groupName = NULL;

    /**
     * request uri
     *
     * @var string
     */
    private $uri;

    /**
     * set up
     *
     * @param string $uri
     */
    public function __construct(string $uri)
    {
        $this->table        = new RoutesTable;
        $this->filter       = new RoutesFilter;
        $this->validator    = new RoutesValidator;
        $this->uri = $uri;
    }

    /**
     * dynamic method calls
     *
     * @param string $method
     * @param array  $params
     * @return void
     */
    public function __call($method, $params)
    {   
        if(!in_array(strtoupper($method), $this->availMethods))
            throw new RouterException("request method ($method) not allowed.");

        if(!isset($params[0]) || !isset($params[1]))
            throw new RouterException("route uri and action are required.");
        
        return $this->table->addRoute($method, $params[0], $params[1], $this->group, $this->groupName);
    }
    
    /**
     * initialize router
     *
     * @return void
     */
    public function init()
    {
        // should be initiated after the calls 
        $this->table->init();

        // set routes 
        $this->routes = $this->table->getRoutes();

        // should be filtered after initiated in table
        $this->filter->applyFilters($this->routes);

        // validate and invoke vlalid route
        $this->validator->isValidRoute($this->routes, $this->uri);
    }
}
