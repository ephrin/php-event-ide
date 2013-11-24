<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventDnsBase
 * 
 */
final class EventDnsBase{
    /** @const integer */
    const OPTION_SEARCH = 1;
    /** @const integer */
    const OPTION_NAMESERVERS = 2;
    /** @const integer */
    const OPTION_MISC = 4;
    /** @const integer */
    const OPTION_HOSTSFILE = 8;
    /** @const integer */
    const OPTIONS_ALL = 15;


    /**
     * Adds a nameserver to the evdns_base.     *
     * @param string $ip  The nameserver string, either as an IPv4 address, an IPv6 address, an IPv4 address with a port ( IPv4:Port ), or an IPv6 address with a port ( [IPv6]:Port ).
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function addNameserverIp($ip){}

    /**
     * Adds a domain to the list of search domains     *
     * @param string $domain  Search domain.
     * @return void  No value is returned.
     */
    public function addSearch($domain){}

    /**
     * Removes all current search suffixes from the DNS base; the EventDnsBase::addSearch() function adds a suffix.
     * @return void  No value is returned.
     */
    public function clearSearch(){}

    /**
     * Constructs EventDnsBase object.     *
     * @param EventBase $base  Event base.
     * @param bool $initialize  If the initialize argument is TRUE, it tries to configure the DNS base sensibly given your operating system’s default. Otherwise, it leaves the event DNS base empty, with no nameservers or options configured. In the latter case DNS base should be configured manually, e.g. with EventDnsBase::parseResolvConf() .
     * @return mixed  Returns EventDnsBase object.
     */
    public function __construct(EventBase $base, $initialize){}

    /**
     * Gets the number of configured nameservers
     * @return void  Returns the number of configured nameservers(not necessarily the number of running nameservers). This is useful for double-checking whether our calls to the various nameserver configuration functions have been successful.
     */
    public function countNameservers(){}

    /**
     * Loads a hosts file (in the same format as /etc/hosts ) from hosts file.     *
     * @param string $hosts  Path to the hosts' file.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function loadHosts($hosts){}

    /**
     * Scans the resolv.conf-formatted file stored in filename, and read in all the options from it that are listed in flags     *
     * @param int $flags  Determines what information is parsed from the resolv.conf file. See the man page for resolv.conf for the format of this file. The following directives are not parsed from the file: sortlist, rotate, no-check-names, inet6, debug. If this function encounters an error, the possible return values are: 1 = failed to open file 2 = failed to stat file 3 = file too large 4 = out of memory 5 = short read from file 6 = no nameservers listed in the file
     * @param string $filename  Path to resolv.conf file.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function parseResolvConf($flags, $filename){}

    /**
     * Set the value of a configuration option.     *
     * @param string $option  The currently available configuration options are: "ndots" , "timeout" , "max-timeouts" , "max-inflight" , and "attempts" .
     * @param string $value  Option value.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setOption($option, $value){}

    /**
     * Set the 'ndots' parameter for searches. Sets the number of dots which, when found in a name, causes the first query to be without any search domain.     *
     * @param int $ndots  The number of dots.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function setSearchNdots($ndots){}



}