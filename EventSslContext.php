<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventSslContext
 * 
 */
final class EventSslContext{
    /** @const integer */
    const SSLv2_CLIENT_METHOD = 1;
    /** @const integer */
    const SSLv3_CLIENT_METHOD = 2;
    /** @const integer */
    const SSLv23_CLIENT_METHOD = 3;
    /** @const integer */
    const TLS_CLIENT_METHOD = 4;
    /** @const integer */
    const SSLv2_SERVER_METHOD = 5;
    /** @const integer */
    const SSLv3_SERVER_METHOD = 6;
    /** @const integer */
    const SSLv23_SERVER_METHOD = 7;
    /** @const integer */
    const TLS_SERVER_METHOD = 8;
    /** @const integer */
    const OPT_LOCAL_CERT = 1;
    /** @const integer */
    const OPT_LOCAL_PK = 2;
    /** @const integer */
    const OPT_PASSPHRASE = 3;
    /** @const integer */
    const OPT_CA_FILE = 4;
    /** @const integer */
    const OPT_CA_PATH = 5;
    /** @const integer */
    const OPT_ALLOW_SELF_SIGNED = 6;
    /** @const integer */
    const OPT_VERIFY_PEER = 7;
    /** @const integer */
    const OPT_VERIFY_DEPTH = 8;
    /** @const integer */
    const OPT_CIPHERS = 9;
    /** @var string */
    public $local_cert;
    /** @var string */
    public $local_pk;


    /**
     * Creates SSL context holding pointer to SSL_CTX (see the system manual).     *
     * @param string $method  One of EventSslContext::*_METHOD constants.
     * @param string $options  Associative array of SSL context options One of EventSslContext::OPT_* constants.
     * @return mixed  Returns EventSslContext object.
     */
    public function __construct($method, $options){}



}