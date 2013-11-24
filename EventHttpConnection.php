<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventHttpConnection
 * 
 */
class EventHttpConnection{


    /**
     * Constructs EventHttpConnection object.     *
     * @param EventBase $base  Associated event base.
     * @param EventDnsBase $dns_base  If dns_base is NULL, hostname resolution will block.
     * @param string $address  The address to connect to.
     * @param int $port  The port to connect to.
     * @return mixed  Returns EventHttpConnection object.
     */
    public function __construct(EventBase $base, EventDnsBase $dns_base, $address, $port){}

    /**
     * Returns event base associated with the connection.
     * @return mixed  On success returns EventBase object associated with the connection. Otherwise FALSE.
     */
    public function getBase(){}

    /**
     * Gets the remote address and port associated with the connection     *
     * @param string $address  Address of the peer.
     * @param int $port  Port of the peer.
     * @return void  No value is returned.
     */
    public function getPeer(&$address, &$port){}

    /**
     * Makes an HTTP request over the specified connection. type is one of EventHttpRequest::CMD_* constants.     *
     * @param EventHttpRequest $req  The connection object over which to send the request.
     * @param int $type  One of EventHttpRequest::CMD_* constants.
     * @param string $uri  The URI associated with the request.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function makeRequest(EventHttpRequest $req, $type, $uri){}

    /**
     * Sets callback for connection close.     *
     * @param callable $callback  Callback which is called when connection is closed. Should match the following prototype: void callback ([ EventHttpConnection $conn = NULL [, mixed $arg = NULL ]] )
     * @param mixed $data 
     * @return void  No value is returned.
     */
    public function setCloseCallback(callable $callback, $data){}

    /**
     * Sets the IP address from which http connections are made.     *
     * @param string $address  The IP address from which HTTP connections are made.
     * @return void  No value is returned.
     */
    public function setLocalAddress($address){}

    /**
     * Sets the local port from which connections are made.     *
     * @param int $port  The port number.
     * @return void 
     */
    public function setLocalPort($port){}

    /**
     * Sets maximum body size for the connection.     *
     * @param string $max_size  The maximum body size in bytes.
     * @return void  No value is returned.
     */
    public function setMaxBodySize($max_size){}

    /**
     * Sets maximum header size for the connection.     *
     * @param string $max_size  The maximum header size in bytes.
     * @return void  No value is returned.
     */
    public function setMaxHeadersSize($max_size){}

    /**
     * Sets the retry limit for the connection     *
     * @param int $retries  The retry limit. -1 means infinity.
     * @return void  No value is returned.
     */
    public function setRetries($retries){}

    /**
     * Sets the timeout for the connection     *
     * @param int $timeout  Timeout in seconds.
     * @return void  No value is returned.
     */
    public function setTimeout($timeout){}



}