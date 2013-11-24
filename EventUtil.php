<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventUtil
 * 
 */
final class EventUtil{
    /** @const integer */
    const AF_INET = 2;
    /** @const integer */
    const AF_INET6 = 10;
    /** @const integer */
    const AF_UNSPEC = 0;
    /** @const integer */
    const LIBEVENT_VERSION_NUMBER = 33559808;
    /** @const integer */
    const SO_DEBUG = 1;
    /** @const integer */
    const SO_REUSEADDR = 2;
    /** @const integer */
    const SO_KEEPALIVE = 9;
    /** @const integer */
    const SO_DONTROUTE = 5;
    /** @const integer */
    const SO_LINGER = 13;
    /** @const integer */
    const SO_BROADCAST = 6;
    /** @const integer */
    const SO_OOBINLINE = 10;
    /** @const integer */
    const SO_SNDBUF = 7;
    /** @const integer */
    const SO_RCVBUF = 8;
    /** @const integer */
    const SO_SNDLOWAT = 19;
    /** @const integer */
    const SO_RCVLOWAT = 18;
    /** @const integer */
    const SO_SNDTIMEO = 21;
    /** @const integer */
    const SO_RCVTIMEO = 20;
    /** @const integer */
    const SO_TYPE = 3;
    /** @const integer */
    const SO_ERROR = 4;
    /** @const integer */
    const SOL_SOCKET = 1;
    /** @const integer */
    const SOL_TCP = 6;
    /** @const integer */
    const SOL_UDP = 17;
    /** @const integer */
    const IPPROTO_IP = 0;
    /** @const integer */
    const IPPROTO_IPV6 = 41;


    /**
     * EventUtil is a singleton. Therefore the constructor is abstract, and it is impossible to create objects based on this class.
     * @return mixed  No value is returned.
     */
    public function __construct(){}

    /**
     * Returns the most recent socket error number( errno ).     *
     * @param mixed $socket  Socket resource, stream or a file descriptor of a socket.
     * @return mixed  Returns the most recent socket error number( errno ).
     */
    public static function getLastSocketErrno($socket = NULL){}

    /**
     * Returns the most recent socket error.     *
     * @param mixed $socket  Socket resource, stream or a file descriptor of a socket.
     * @return mixed  Returns the most recent socket error.
     */
    public static function getLastSocketError($socket){}

    /**
     * Returns numeric file descriptor of a socket or stream specified by socket argument just like the Event extension does it internally for all methods accepting socket resource or stream.     *
     * @param mixed $socket  Socket resource or stream.
     * @return mixed  Returns TRUE on success. Otherwise FALSE. EventUtil::getSocketFd() returns FALSE in case if it is whether failed to recognize the type of the underlying file, or detected that the file descriptor associated with socket is not valid.
     */
    public static function getSocketFd($socket){}

    /**
     * Retreives the current address to which the socket is bound.     *
     * @param mixed $socket  Socket resource, stream or a file descriptor of a socket.
     * @param string $address  Output parameter. IP-address, or the UNIX domain socket path depending on the socket address family.
     * @param mixed $port  Output parameter. The port the socket is bound to. Has no meaning for UNIX domain sockets.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public static function getSocketName($socket, &$address, &$port){}

    /**
     * Sets socket options.     *
     * @param mixed $socket  Socket resource, stream, or numeric file descriptor associated with the socket.
     * @param int $level  One of EventUtil::SOL_* constants. Specifies the protocol level at which the option resides. For example, to retrieve options at the socket level, a level parameter of EventUtil::SOL_SOCKET would be used. Other levels, such as TCP, can be used by specifying the protocol number of that level. Protocol numbers can be found by using the getprotobyname() function. See EventUtil constants.
     * @param int $optname  Option name(type). Has the same meaning as corresponding parameter of socket_get_option() function. See EventUtil constants.
     * @param mixed $optval  Accepts the same values as optval parameter of the socket_get_option() function.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public static function setSocketOption($socket, $level, $optname, $optval){}

    /**
     * Generates entropy by means of OpenSSL's RAND_poll() (see the system manual).
     * @return void  No value is returned.
     */
    public static function sslRandPoll(){}



}