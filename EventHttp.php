<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventHttp
 * 
 */
final class EventHttp{


    /**
     * Makes an HTTP server accept connections on the specified socket stream or resource. The socket should be ready to accept connections.     *
     * @param mixed $socket  Socket resource, stream or numeric file descriptor representing a socket ready to accept connections.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function accept($socket){}

    /**
     * Adds a server alias to the HTTP server object.     *
     * @param string $alias  The alias to add.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function addServerAlias($alias){}

    /**
     * Binds an HTTP server on the specified address and port.     *
     * @param string $address  A string containing the IP address to listen(2) on.
     * @param int $port  The port number to listen on.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function bind($address, $port){}

    /**
     * Constructs the HTTP server object.     *
     * @param EventBase $base  Associated event base.
     * @return mixed  Returns EventHttp object.
     */
    public function __construct(EventBase $base){}

    /**
     * Removes server alias added with EventHttp::addServerAlias()     *
     * @param string $alias  The alias to remove.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function removeServerAlias($alias){}

    /**
     * Sets the what HTTP methods are supported in requests accepted by this server, and passed to user callbacks     *
     * @param int $methods  A bit mask of EventHttpRequest::CMD_* constants.
     * @return void  No value is returned.
     */
    public function setAllowedMethods($methods){}

    /**
     * Sets a callback for specified URI.     *
     * @param string $path  The path for which to invoke the callback.
     * @param string $cb  The callback callable that gets invoked on requested path. It should match the following prototype: void callback ([ EventHttpRequest $req = NULL [, mixed $arg = NULL ]] ) req EventHttpRequest object. arg Custom data.
     * @param string $arg  Custom data.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function setCallback($path, $cb, $arg){}

    /**
     * Sets default callback to handle requests that are not caught by specific callbacks     *
     * @param string $cb  The callback callable. It should match the following prototype: void callback ([ EventHttpRequest $req = NULL [, mixed $arg = NULL ]] ) req EventHttpRequest object. arg Custom data.
     * @param string $arg  Custom data.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function setDefaultCallback($cb, $arg){}

    /**
     * Sets maximum request body size.     *
     * @param int $value  The body size in bytes.
     * @return void  No value is returned.
     */
    public function setMaxBodySize($value){}

    /**
     * Sets maximum HTTP header size.     *
     * @param int $value  The header size in bytes.
     * @return void  No value is returned.
     */
    public function setMaxHeadersSize($value){}

    /**
     * Sets the timeout for an HTTP request.     *
     * @param int $value  The timeout in seconds.
     * @return void  No value is returned.
     */
    public function setTimeout($value){}



}