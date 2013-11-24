<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventBase
 * 
 * @method void exit
 */
final class EventBase{
    /** @const integer */
    const LOOP_ONCE = 1;
    /** @const integer */
    const LOOP_NONBLOCK = 2;
    /** @const integer */
    const NOLOCK = 1;
    /** @const integer */
    const STARTUP_IOCP = 4;
    /** @const integer */
    const NO_CACHE_TIME = 8;
    /** @const integer */
    const EPOLL_USE_CHANGELIST = 16;


    /**
     * Constructs EventBase object     *
     * @param EventConfig $cfg  Optional EventConfig object.
     * @return mixed  Returns EventBase object.
     */
    public function __construct(EventConfig $cfg){}

    /**
     * Wait for events to become active, and run their callbacks. The same as EventBase::loop() with no flags set.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function dispatch(){}

    /**
     * Returns bitmask of features supported.
     * @return mixed  Returns integer representing a bitmask of supported features. See EventConfig::FEATURE_* constants.
     */
    public function getFeatures(){}

    /**
     *     *
     * @param EventConfig $cfg  Optional EventConfig object.
     * @return mixed  String representing used event method(backend).
     */
    public function getMethod(EventConfig $cfg){}

    /**
     * On success returns the current time(as returned by gettimeofday() ), looking at the cached value in base if possible, and calling gettimeofday() or clock_gettime() as appropriate if there is no cached time.
     * @return mixed  Returns the current event base time. On failure returns NULL.
     */
    public function getTimeOfDayCached(){}

    /**
     * Checks if the event loop was told to exit by EventBase::exit() .
     * @return void  Returns TRUE, event loop was told to exit by EventBase::exit() . Otherwise FALSE.
     */
    public function gotExit(){}

    /**
     * Checks if the event loop was told to exit by EventBase::stop() .
     * @return void  Returns TRUE, event loop was told to stop by EventBase::stop() . Otherwise FALSE.
     */
    public function gotStop(){}

    /**
     * Wait for events to become active, and run their callbacks.     *
     * @param int $flags  Optional flags. One of EventBase::LOOP_* constants. See EventBase constants.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function loop($flags){}

    /**
     * Sets number of priorities per event base.     *
     * @param string $n_priorities  The number of priorities per event base.
     * @return mixed  Returns TRUE on success, otherwise FALSE.
     */
    public function priorityInit($n_priorities){}

    /**
     * Re-initialize event base. Should be called after a fork.     *
     * @param string $base 
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function reInit($base){}

    /**
     * Tells event_base to stop dispatching events
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function stop(){}



}