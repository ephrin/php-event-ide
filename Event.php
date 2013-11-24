<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class Event
 * 
 * @property-read bool $pending  Whether event is pending. See About event persistence.
 */
final class Event{
    /** @const integer */
    const ET = 32;
    /** @const integer */
    const PERSIST = 16;
    /** @const integer */
    const READ = 2;
    /** @const integer */
    const WRITE = 4;
    /** @const integer */
    const SIGNAL = 8;
    /** @const integer */
    const TIMEOUT = 1;
    /** @var bool */
    public $pending;


    /**
     * Marks event pending. Non-pending event will never occur, and the event callback will never be called. In conjuction with Event::del() an event could be re-scheduled by user at any time.     *
     * @param double $timeout  Timeout in seconds.
     * @return void  Returns TRUE on success. Otherwise FALSE
     */
    public function add($timeout){}

    /**
     * Event::addSignal() is an alias of Event::add()     *
     * @param double $timeout 
     * @return mixed 
     */
    public function addSignal($timeout){}

    /**
     * Event::addTimer() is an alias of Event::add()     *
     * @param double $timeout 
     * @return mixed 
     */
    public function addTimer($timeout){}

    /**
     * Constructs Event object.     *
     * @param EventBase $base  The event base to associate with.
     * @param mixed $fd  stream resource, socket resource, or numeric file descriptor. For timer events pass -1. For signal events pass the signal number, e.g. SIGHUP.
     * @param int $what  Event flags. See Event flags.
     * @param callable $cb  The event callback. See Event callbacks.
     * @param mixed $arg  Custom data. If specified, it will be passed to the callback when event triggers.
     * @return mixed  Returns Event object.
     */
    public function __construct(EventBase $base, $fd, $what, callable $cb, $arg = NULL){}

    /**
     * Removes an event from the set of monitored events, i.e. makes it non-pending.
     * @return void  Returns TRUE on success. Otherwise FALSE
     */
    public function del(){}

    /**
     * Event::delSignal() is an alias of Event::del()
     * @return mixed 
     */
    public function delSignal(){}

    /**
     * Event::delTimer() is an alias of Event::del() .
     * @return mixed 
     */
    public function delTimer(){}

    /**
     * Removes event from the list of events monitored by libevent, and free resources allocated for the event.
     * @return void  No value is returned.
     */
    public function free(){}

    /**
     * Returns array with of the names of the methods(backends) supported in this version of Libevent.
     * @return array  Returns array.
     */
    public static function getSupportedMethods(){}

    /**
     * Detects whether event is pending or scheduled     *
     * @param int $flags  One of, or a composition of the following constants: Event::READ, Event::WRITE, Event::TIMEOUT, Event::SIGNAL.
     * @return mixed  Returns TRUE if event is pending or scheduled. Otherwise FALSE.
     */
    public function pending($flags){}

    /**
     * Re-configures event. Note, this function doesn't invoke obsolete libevent's event_set. It calls event_assign instead.     *
     * @param EventBase $base  The event base to associate the event with.
     * @param mixed $fd  A stream, socket resource, or numeric file descriptor; for signal events pass -1.
     * @param int $what  See Event flags.
     * @param callable $cb  The event callback. See Event callbacks.
     * @param mixed $arg  Custom data associated with the event. It will be passed to the callback when the event becomes active.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function set(EventBase $base, $fd, $what, callable $cb, $arg){}

    /**
     * Set event priority.     *
     * @param int $priority  The event priority.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setPriority($priority){}

    /**
     * Re-configures timer event. Note, this function doesn't invoke obsolete libevent's event_set. It calls event_assign instead.     *
     * @param EventBase $base  The event base to associate with.
     * @param callable $cb  The timer event callback. See Event callbacks.
     * @param mixed $arg  Custom data. If specified, it will be passed to the callback when event triggers.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setTimer(EventBase $base, callable $cb, $arg){}

    /**
     * Constructs signal event object. This is a straightforward method to create a signal event. Note, the generic Event::__construct() method can contruct signal event objects too.     *
     * @param EventBase $base  The associated event base object.
     * @param int $signum  The signal number.
     * @param callable $cb  The signal event callback. See Event callbacks.
     * @param mixed $arg  Custom data. If specified, it will be passed to the callback when event triggers.
     * @return mixed  Returns Event object on success. Otherwise FALSE.
     */
    public static function signal(EventBase $base, $signum, callable $cb, $arg){}

    /**
     * Constructs timer event object. This is a straightforward method to create a timer event. Note, the generic Event::__construct() method can contruct signal event objects too.     *
     * @param EventBase $base  The associated event base object.
     * @param callable $cb  The signal event callback. See Event callbacks.
     * @param mixed $arg  Custom data. If specified, it will be passed to the callback when event triggers.
     * @return mixed  Returns Event object on success. Otherwise FALSE.
     */
    public static function timer(EventBase $base, callable $cb, $arg){}



}