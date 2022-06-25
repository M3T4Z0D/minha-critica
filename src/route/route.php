<<<<<<< HEAD
<?php

namespace Steampixel;

class Route
{
    private static $routes = array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;

    /**
     * Function used to add a new route
     * @param string $expression    Route string or expression
     * @param callable $function    Function to call if route with allowed method is found
     * @param string|array $method  Either a string of allowed method or an array with string values
     */
    public static function add($expression, $function, $method = 'get')
    {
        array_push(self::$routes, array(
            'expression' => $expression,
            'function' => $function,
            'method' => $method
        ));
    }

    public static function getAll()
    {
        return self::$routes;
    }

    public static function pathNotFound($function)
    {
        self::$pathNotFound = $function;
    }

    public static function methodNotAllowed($function)
    {
        self::$methodNotAllowed = $function;
    }

    public static function run($basepath = '', $case_matters = false, $trailing_slash_matters = false, $multimatch = false)
    {
        $basepath = rtrim($basepath, '/');
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        $path = '/';

        if (isset($parsed_url['path'])) {
            if ($trailing_slash_matters) {
                $path = $parsed_url['path'];
            } else {
                if ($basepath . '/' != $parsed_url['path']) {
                    $path = rtrim($parsed_url['path'], '/');
                } else {
                    $path = $parsed_url['path'];
                }
            }
        }

        $path = urldecode($path);
        $method = $_SERVER['REQUEST_METHOD'];
        $path_match_found = false;
        $route_match_found = false;

        foreach (self::$routes as $route) {
            //add o basepath to dar macth com a string
            if ($basepath != '' && $basepath != '/') {
                $route['expression'] = '(' . $basepath . ')' . $route['expression'];
            }

            //add 'find string start'
            $route['expression'] = '^' . $route['expression'];

            //add 'find string end'
            $route['expression'] = $route['expression'] . '$';

            if (preg_match('#' . $route['expression'] . '#' . ($case_matters ? '' : 'i') . 'u', $path, $matches)) {
                $path_match_found = true;

                // converte os metodos em um array se não estiver ok, então executa todos os metodos
                foreach ((array)$route['method'] as $allowedMethod) {
                    if (strtolower($method) == strtolower($allowedMethod)) {
                        array_shift($matches); // sempre remove o primeiro elemento. contem toda a string
                        if ($basepath != '' && $basepath != '/') {
                            array_shift($matches); // remove o basepath
                        }
                        if ($return_value = call_user_func_array($route['function'], $matches)) {
                            echo $return_value;
                        }
                        $route_match_found = true;
                        break;
                    }
                } //fim foreach
            } //fim if preg_match

            if ($route_match_found && !$multimatch) {
                break;
            }
        } //fim foreach

        if (!$route_match_found) {
            if ($path_match_found) {
                if (self::$methodNotAllowed) {
                    call_user_func_array(self::$methodNotAllowed, array($path, $method));
                }
            } else {
                if (self::$pathNotFound) {
                    call_user_func_array(self::$pathNotFound, array($path));
                }
            }
        }
    } //end function run
}
=======
<?php

namespace Steampixel;

class Route
{
    private static $routes = array();
    private static $pathNotFound = null;
    private static $methodNotAllowed = null;

    /**
     * Function used to add a new route
     * @param string $expression    Route string or expression
     * @param callable $function    Function to call if route with allowed method is found
     * @param string|array $method  Either a string of allowed method or an array with string values
     */
    public static function add($expression, $function, $method = 'get')
    {
        array_push(self::$routes, array(
            'expression' => $expression,
            'function' => $function,
            'method' => $method
        ));
    }

    public static function getAll()
    {
        return self::$routes;
    }

    public static function pathNotFound($function)
    {
        self::$pathNotFound = $function;
    }

    public static function methodNotAllowed($function)
    {
        self::$methodNotAllowed = $function;
    }

    public static function run($basepath = '', $case_matters = false, $trailing_slash_matters = false, $multimatch = false)
    {
        $basepath = rtrim($basepath, '/');
        $parsed_url = parse_url($_SERVER['REQUEST_URI']);
        $path = '/';

        if (isset($parsed_url['path'])) {
            if ($trailing_slash_matters) {
                $path = $parsed_url['path'];
            } else {
                if ($basepath . '/' != $parsed_url['path']) {
                    $path = rtrim($parsed_url['path'], '/');
                } else {
                    $path = $parsed_url['path'];
                }
            }
        }

        $path = urldecode($path);
        $method = $_SERVER['REQUEST_METHOD'];
        $path_match_found = false;
        $route_match_found = false;

        foreach (self::$routes as $route) {
            //add o basepath to dar macth com a string
            if ($basepath != '' && $basepath != '/') {
                $route['expression'] = '(' . $basepath . ')' . $route['expression'];
            }

            //add 'find string start'
            $route['expression'] = '^' . $route['expression'];

            //add 'find string end'
            $route['expression'] = $route['expression'] . '$';

            if (preg_match('#' . $route['expression'] . '#' . ($case_matters ? '' : 'i') . 'u', $path, $matches)) {
                $path_match_found = true;

                // converte os metodos em um array se não estiver ok, então executa todos os metodos
                foreach ((array)$route['method'] as $allowedMethod) {
                    if (strtolower($method) == strtolower($allowedMethod)) {
                        array_shift($matches); // sempre remove o primeiro elemento. contem toda a string
                        if ($basepath != '' && $basepath != '/') {
                            array_shift($matches); // remove o basepath
                        }
                        if ($return_value = call_user_func_array($route['function'], $matches)) {
                            echo $return_value;
                        }
                        $route_match_found = true;
                        break;
                    }
                }
            }

            if ($route_match_found && !$multimatch) {
                break;
            }
        }

        if (!$route_match_found) {
            if ($path_match_found) {
                if (self::$methodNotAllowed) {
                    call_user_func_array(self::$methodNotAllowed, array($path, $method));
                }
            } else {
                if (self::$pathNotFound) {
                    call_user_func_array(self::$pathNotFound, array($path));
                }
            }
        }
    }
}
>>>>>>> c8b98251450d54ded39ba19669550cd3dbecbb42
