<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventConfig
 * 
 */
final class EventConfig{
    /** @const integer */
    const FEATURE_ET = 1;
    /** @const integer */
    const FEATURE_O1 = 2;
    /** @const integer */
    const FEATURE_FDS = 4;


    /**
     * Tells libevent to avoid specific event method(backend). See » Creating an event base.     *
     * @param int $method  The backend method to avoid. See EventConfig constants.
     * @return mixed  Returns TRUE on success, otherwise FALSE.
     */
    public function avoidMethod($method){}

    /**
     * Constructs EventConfig object which could be passed to EventBase::__construct() constructor.
     * @return mixed  Returns EventConfig object.
     */
    public function __construct(){}

    /**
     * Enters a required event method feature that the application demands     *
     * @param int $feature  Bitmask of required features. See EventConfig::FEATURE_* constants
     * @return mixed 
     */
    public function requireFeatures($feature){}

    /**
     * Prevents priority inversion by limiting how many low-priority event callbacks can be invoked before checking for more high-priority events.     *
     * @param int $max_interval  An interval after which Libevent should stop running callbacks and check for more events, or 0, if there should be no such interval.
     * @param int $max_callbacks  A number of callbacks after which Libevent should stop running callbacks and check for more events, or -1, if there should be no such limit.
     * @param int $min_priority  A priority below which max_interval and max_callbacks should not be enforced. If this is set to 0, they are enforced for events of every priority; if it's set to 1, they're enforced for events of priority 1 and above, and so on.
     * @return void  Returns TRUE on success, otherwise FALSE.
     */
    public function setMaxDispatchInterval($max_interval, $max_callbacks, $min_priority){}



}