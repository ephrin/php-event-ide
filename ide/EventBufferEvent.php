<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventBufferEvent
 * 
 * @property-read EventBuffer $input  Underlying input buffer object( EventBuffer )
 * @property-read EventBuffer $output  Underlying output buffer object( EventBuffer )
 */
final class EventBufferEvent{
    /** @const integer */
    const READING = 1;
    /** @const integer */
    const WRITING = 2;
    /** @const integer */
    const EOF = 16;
    /** @const integer */
    const ERROR = 32;
    /** @const integer */
    const TIMEOUT = 64;
    /** @const integer */
    const CONNECTED = 128;
    /** @const integer */
    const OPT_CLOSE_ON_FREE = 1;
    /** @const integer */
    const OPT_THREADSAFE = 2;
    /** @const integer */
    const OPT_DEFER_CALLBACKS = 4;
    /** @const integer */
    const OPT_UNLOCK_CALLBACKS = 8;
    /** @const integer */
    const SSL_OPEN = 0;
    /** @const integer */
    const SSL_CONNECTING = 1;
    /** @const integer */
    const SSL_ACCEPTING = 2;
    /** @var integer */
    public $fd;
    /** @var integer */
    public $priority;
    /** @var EventBuffer */
    public $input;
    /** @var EventBuffer */
    public $output;


    /**
     * Connect buffer event's file descriptor to given address(optionally with port), or a UNIX domain socket.     *
     * @param string $addr  Should contain an IP address with optional port number, or a path to UNIX domain socket. Recognized formats are:[IPv6Address]:port[IPv6Address]IPv6AddressIPv4Address:portIPv4Addressunix:path Note, 'unix:' prefix is currently not case sensitive.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function connect($addr){}

    /**
     * Resolves the DNS name hostname, looking for addresses of type family ( EventUtil::AF_* constants). If the name resolution fails, it invokes the event callback with an error event. If it succeeds, it launches a connection attempt just as EventBufferEvent::connect() would.     *
     * @param EventDnsBase $dns_base  Object of EventDnsBase in case if DNS is to be resolved asyncronously. Otherwise NULL.
     * @param string $hostname  Hostname to connect to. Recognized formats are:www.example.com (hostname) 1.2.3.4 (ipv4address) ::1 (ipv6address)[::1] ([ipv6address])
     * @param int $port  Port number
     * @param int $family  Address family. EventUtil::AF_UNSPEC, EventUtil::AF_INET, or EventUtil::AF_INET6. See EventUtil constants.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function connectHost(EventDnsBase $dns_base, $hostname, $port, $family = EventUtil::AF_UNSPEC){}

    /**
     * Create a buffer event on a socket, stream or a file descriptor. Passing NULL to socket means that the socket should be created later, e.g. by means of EventBufferEvent::connect() .     *
     * @param EventBase $base  Event base that should be associated with the new buffer event.
     * @param mixed $socket  May be created as a stream(not necessarily by means of sockets extension)
     * @param int $options  One of EventBufferEvent::OPT_* constants, or 0.
     * @param callable $readcb  Read event callback. See About buffer event callbacks.
     * @param callable $writecb  Write event callback. See About buffer event callbacks.
     * @param callable $eventcb  Status-change event callback. See About buffer event callbacks.
     * @return mixed  Returns buffer event resource optionally associated with socket resource.
     */
    public function __construct(EventBase $base, $socket = NULL, $options = 0, callable $readcb = NULL, callable $writecb = NULL, callable $eventcb = NULL){}

    /**
     * Returns array of two EventBufferEvent objects connected to each other. All the usual options are supported, except for EventBufferEvent::OPT_CLOSE_ON_FREE, which has no effect, and EventBufferEvent::OPT_DEFER_CALLBACKS, which is always on.     *
     * @param EventBase $base  Associated event base
     * @param int $options  EventBufferEvent::OPT_* constants combined with bitwise OR operator.
     * @return array  Returns array of two EventBufferEvent objects connected to each other.
     */
    public function createPair(EventBase $base, $options = 0){}

    /**
     * Disable events Event::READ, Event::WRITE, or Event::READ | Event::WRITE on a buffer event.     *
     * @param int $events 
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function disable($events){}

    /**
     * Disable events Event::READ, Event::WRITE, or Event::READ | Event::WRITE on a buffer event.     *
     * @param string $events  Event::READ, Event::WRITE, or Event::READ | Event::WRITE on a buffer event.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function enable($events){}

    /**
     * Free resources allocated by buffer event.
     * @return void  No value is returned.
     */
    public function free(){}

    /**
     * Returns string describing the last failed DNS lookup attempt made by EventBufferEvent::connectHost() , or an empty string, if there is no DNS error detected.
     * @return mixed  Returns a string describing DNS lookup error, or an empty string for no error.
     */
    public function getDnsErrorString(){}

    /**
     * Returns bitmask of events currently enabled on the buffer event
     * @return mixed  Returns integer representing a bitmask of events currently enabled on the buffer event
     */
    public function getEnabled(){}

    /**
     * Returns underlying input buffer associated with current buffer event. An input buffer is a storage for data to read.
     * @return mixed  Returns instance of EventBuffer input buffer associated with current buffer event.
     */
    public function getInput(){}

    /**
     * Returns underlying output buffer associated with current buffer event. An output buffer is a storage for data to be written.
     * @return mixed  Returns instance of EventBuffer output buffer associated with current buffer event.
     */
    public function getOutput(){}

    /**
     * Removes up to size bytes from the input buffer, storing them into data.     *
     * @param string $data  Storage for the read data.
     * @param int $size  Maximum numbe rof bytes to read
     * @return mixed  Returns the number of bytes actually removed.
     */
    public function read(&$data, $size){}

    /**
     * Drains the entire contents of the input buffer and places them into buf.     *
     * @param EventBuffer $buf  Target buffer
     * @return mixed  Returns TRUE on success; Otherwise FALSE.
     */
    public function readBuffer(EventBuffer $buf){}

    /**
     * Assigns read, write and event(status) callbacks.     *
     * @param callable $readcb  Read event callback. See About buffer event callbacks.
     * @param callable $writecb  Write event callback. See About buffer event callbacks.
     * @param callable $eventcb  Status-change event callback. See About buffer event callbacks.
     * @param string $arg  A variable that will be passed to all the callbacks.
     * @return void  No value is returned.
     */
    public function setCallbacks(callable $readcb, callable $writecb, callable $eventcb, $arg){}

    /**
     * Assign a priority to a bufferevent     *
     * @param int $priority  Priority value.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setPriority($priority){}

    /**
     * Set the read and write timeout for a buffer event     *
     * @param int $timeout_read  Read timeout
     * @param int $timeout_write  Write timeout
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setTimeouts($timeout_read, $timeout_write){}

    /**
     * Adjusts the read watermarks, the write watermarks, or both, of a single buffer event.     *
     * @param int $events  Bitmask of Event::READ, Event::WRITE, or both.
     * @param int $lowmark  Minimum watermark value.
     * @param int $highmark  Maximum watermark value. 0 means "unlimited".
     * @return void  No value is returned.
     */
    public function setWatermark($events, $lowmark, $highmark){}

    /**
     * Returns most recent OpenSSL error reported on the buffer event.
     * @return void  Returns FALSE, if there is no more error to return.
     */
    public function sslError(){}

    /**
     * Create a new SSL buffer event to send its data over another buffer event     *
     * @param EventBase $base  Associated event base.
     * @param EventBufferEvent $underlying  A socket buffer event to use for this SSL.
     * @param EventSslContext $ctx  Object of EventSslContext class.
     * @param int $state  The current state of SSL connection: EventBufferEvent::SSL_OPEN, EventBufferEvent::SSL_ACCEPTING or EventBufferEvent::SSL_CONNECTING.
     * @param int $options  One or more buffer event options.
     * @return mixed  Returns a new SSL EventBufferEvent object.
     */
    public static function sslFilter(EventBase $base, EventBufferEvent $underlying, EventSslContext $ctx, $state, $options = 0){}

    /**
     * Tells a bufferevent to begin SSL renegotiation.
     * @return void  No value is returned.
     */
    public function sslRenegotiate(){}

    /**
     * Creates a new SSL buffer event to send its data over an SSL on a socket.     *
     * @param EventBase $base  Associated event base.
     * @param mixed $socket  Socket to use for this SSL. Can be stream or socket resource, numeric file descriptor, or NULL. If socket is NULL, it is assumed that the file descriptor for the socket will be assigned later, for instance, by means of EventBufferEvent::connectHost() method.
     * @param EventSslContext $ctx  Object of EventSslContext class.
     * @param int $state  The current state of SSL connection: EventBufferEvent::SSL_OPEN, EventBufferEvent::SSL_ACCEPTING or EventBufferEvent::SSL_CONNECTING.
     * @param int $options  The buffer event options.
     * @return mixed  Returns EventBufferEvent object.
     */
    public static function sslSocket(EventBase $base, $socket, EventSslContext $ctx, $state, $options){}

    /**
     * Adds data to a buffer event's output buffer     *
     * @param string $data  Data to be added to the underlying buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function write($data){}

    /**
     * Adds contents of the entire buffer to a buffer event's output buffer     *
     * @param EventBuffer $buf  Source EventBuffer object.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function writeBuffer(EventBuffer $buf){}



}