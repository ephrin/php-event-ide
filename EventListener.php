<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventListener
 * 
 * @property-read int $fd  Numeric file descriptor of the underlying socket. (Added in event-1.6.0.)
 */
final class EventListener{
    /** @const integer */
    const OPT_LEAVE_SOCKETS_BLOCKING = 1;
    /** @const integer */
    const OPT_CLOSE_ON_FREE = 2;
    /** @const integer */
    const OPT_CLOSE_ON_EXEC = 4;
    /** @const integer */
    const OPT_REUSEABLE = 8;
    /** @const integer */
    const OPT_THREADSAFE = 16;
    /** @var int */
    public $fd;


    /**
     * Creates new connection listener associated with an event base.     *
     * @param EventBase $base  Associated event base.
     * @param callable $cb  A callable that will be invoked when new connection received.
     * @param mixed $data  Custom user data attached to cb.
     * @param int $flags  Bit mask of EventListener::OPT_* constants. See EventListener constants.
     * @param int $backlog  Controls the maximum number of pending connections that the network stack should allow to wait in a not-yet-accepted state at any time; see documentation for your system’s listen function for more details. If backlog is negative, Libevent tries to pick a good value for the backlog ; if it is zero, Event assumes that listen is already called on the socket( target )
     * @param mixed $target  May be string, socket resource, or a stream associated with a socket. In case if target is a string, the string will be parsed as network address. It will be interpreted as a UNIX domain socket path, if prefixed with 'unix:' , e.g. 'unix:/tmp/my.sock' .
     * @return mixed  Returns EventListener object representing the event connection listener.
     */
    public function __construct(EventBase $base, callable $cb, $data, $flags, $backlog, $target){}

    /**
     * Disables an event connect listener object
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function disable(){}

    /**
     * Enables an event connect listener object
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function enable(){}

    /**
     * Returns event base associated with the event listener.
     * @return void  Returns event base associated with the event listener.
     */
    public function getBase(){}

    /**
     * Retreives the current address to which the listener's socket is bound.     *
     * @param string $address  Output parameter. IP-address depending on the socket address family.
     * @param mixed $port  Output parameter. The port the socket is bound to.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public static function getSocketName(&$address, &$port){}

    /**
     * Adjust event connect listener's callback and optionally the callback argument.     *
     * @param callable $cb  The new callback for new connections. Ignored if NULL. Should match the following prototype: void callback ([ EventListener $listener = NULL [, mixed $fd = NULL [, array $address = NULL [, mixed $arg = NULL ]]]] ) listener The EventListener object. fd The file descriptor or a resource associated with the listener. address Array of two elements: IP address and the server port. arg User custom data attached to the callback.
     * @param mixed $arg  User custom data attached to the callback.
     * @return void  No value is returned.
     */
    public function setCallback(callable $cb, $arg = NULL){}

    /**
     * Set event listener's error callback     *
     * @param string $cb  The error callback. Should match the following prototype: void callback ([ EventListener $listener = NULL [, mixed $data = NULL ]] ) listener The EventListener object. data User custom data attached to the callback.
     * @return void 
     */
    public function setErrorCallback($cb){}



}