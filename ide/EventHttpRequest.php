<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventHttpRequest
 * 
 */
class EventHttpRequest{
    /** @const integer */
    const CMD_GET = 1;
    /** @const integer */
    const CMD_POST = 2;
    /** @const integer */
    const CMD_HEAD = 4;
    /** @const integer */
    const CMD_PUT = 8;
    /** @const integer */
    const CMD_DELETE = 16;
    /** @const integer */
    const CMD_OPTIONS = 32;
    /** @const integer */
    const CMD_TRACE = 64;
    /** @const integer */
    const CMD_CONNECT = 128;
    /** @const integer */
    const CMD_PATCH = 256;
    /** @const integer */
    const INPUT_HEADER = 1;
    /** @const integer */
    const OUTPUT_HEADER = 2;


    /**
     * Adds an HTTP header to the headers of the request.     *
     * @param string $key  Header name.
     * @param string $value  Header value.
     * @param int $type  One of EventHttpRequest::*_HEADER constants.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function addHeader($key, $value, $type){}

    /**
     * Cancels a pending HTTP request.
     * @return void  No value is returned.
     */
    public function cancel(){}

    /**
     * Removes all output headers from the header list of the request.
     * @return void  No value is returned.
     */
    public function clearHeaders(){}

    /**
     * Closes HTTP connection associated with the request.
     * @return void  No value is returned.
     */
    public function closeConnection(){}

    /**
     * Constructs EventHttpRequest object.     *
     * @param callable $callback  Gets invoked on requesting path. Should match the following prototype: void callback ([ EventHttpRequest $req = NULL [, mixed $arg = NULL ]] )
     * @param mixed $data  User custom data passed to the callback.
     * @return mixed  Returns EventHttpRequest object.
     */
    public function __construct(callable $callback, $data = NULL){}

    /**
     * Finds the value belonging a header.     *
     * @param string $key  The header name.
     * @param string $type  One of EventHttpRequest::*_HEADER constants.
     * @return void  Returns NULL if header not found.
     */
    public function findHeader($key, $type){}

    /**
     * Frees the object and removes associated events.
     * @return void  No value is returned.
     */
    public function free(){}

    /**
     * Returns the request command, one of EventHttpRequest::CMD_* constants.
     * @return void  Returns the request command, one of EventHttpRequest::CMD_* constants.
     */
    public function getCommand(){}

    /**
     * Returns the request host.
     * @return mixed  Returns the request host.
     */
    public function getHost(){}

    /**
     * Returns the input buffer.
     * @return mixed  Returns the input buffer.
     */
    public function getInputBuffer(){}

    /**
     * Returns associative array of the input headers.
     * @return mixed  Returns associative array of the input headers.
     */
    public function getInputHeaders(){}

    /**
     * Returns the output buffer of the request.
     * @return mixed  Returns the output buffer of the request.
     */
    public function getOutputBuffer(){}

    /**
     * Returns associative array of the input headers.
     * @return void 
     */
    public function getOutputHeaders(){}

    /**
     * Returns the the response code.
     * @return mixed  Returns the response code of the request.
     */
    public function getResponseCode(){}

    /**
     * Returns the request URI
     * @return mixed  Returns the request URI
     */
    public function getUri(){}

    /**
     * Removes an HTTP header from the headers of the request.     *
     * @param string $key  The header name.
     * @param string $type  type is one of EventHttpRequest::*_HEADER constants.
     * @return void  Removes an HTTP header from the headers of the request.
     */
    public function removeHeader($key, $type){}

    /**
     * Send an HTML error message to the client.     *
     * @param int $error  The HTTP error code.
     * @param string $reason  A brief explanation ofthe error. If NULL, the standard meaning of the error code will be used.
     * @return void  No value is returned.
     */
    public function sendError($error, $reason = NULL){}

    /**
     * Send an HTML reply to the client. The body of the reply consists of data in optional buf parameter.     *
     * @param int $code  The HTTP response code to send.
     * @param string $reason  A brief message to send with the response code.
     * @param EventBuffer $buf  The body of the response.
     * @return void  No value is returned.
     */
    public function sendReply($code, $reason, EventBuffer $buf){}

    /**
     * Send another data chunk as part of an ongoing chunked reply. After calling this method buf will be empty.     *
     * @param EventBuffer $buf  The data chunk to send as part of the reply.
     * @return void  No value is returned.
     */
    public function sendReplyChunk(EventBuffer $buf){}

    /**
     * Complete a chunked reply, freeing the request as appropriate.
     * @return void  No value is returned.
     */
    public function sendReplyEnd(){}

    /**
     * Initiate a reply that uses Transfer-Encoding chunked.     *
     * @param int $code  The HTTP response code to send.
     * @param string $reason  A brief message to send with the response code.
     * @return void  No value is returned.
     */
    public function sendReplyStart($code, $reason){}



}