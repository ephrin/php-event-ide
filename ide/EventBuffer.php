<?php
//this file was generated automatically by script. generator handling php.net documentation files

/**
 * Class EventBuffer
 * 
 * @property-read int $length  The number of bytes stored in an event buffer.
 * @property-read int $contiguous_space  The number of bytes stored contiguously at the front of the buffer. The bytes in a buffer may be stored in multiple separate chunks of memory; the property returns the number of bytes currently stored in the first chunk.
 */
class EventBuffer{
    /** @const integer */
    const EOL_ANY = 0;
    /** @const integer */
    const EOL_CRLF = 1;
    /** @const integer */
    const EOL_CRLF_STRICT = 2;
    /** @const integer */
    const EOL_LF = 3;
    /** @const integer */
    const PTR_SET = 0;
    /** @const integer */
    const PTR_ADD = 1;
    /** @var int */
    public $length;
    /** @var int */
    public $contiguous_space;


    /**
     * Append data to the end of an event buffer.     *
     * @param string $data  String to be appended to the end of the buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function add($data){}

    /**
     * Move all data from the buffer provided in buf parameter to the end of current EventBuffer. This is a destructive add. The data from one buffer moves into the other buffer. However, no unnecessary memory copies occur.     *
     * @param EventBuffer $buf  The source EventBuffer object.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function addBuffer(EventBuffer $buf){}

    /**
     * Moves the specified number of bytes from a source buffer to the end of the current buffer. If there are fewer number of bytes, it moves all the bytes available from the source buffer.     *
     * @param EventBuffer $buf  Source buffer.
     * @param int $len 
     * @return mixed  Returns the number of bytes read.
     */
    public function appendFrom(EventBuffer $buf, $len){}

    /**
     * Constructs EventBuffer object
     * @return mixed  Returns EventBuffer object.
     */
    public function __construct(){}

    /**
     * Behaves just like EventBuffer::read() , but does not drain any data from the buffer. I.e. it copies the first max_bytes bytes from the front of the buffer into data. If there are fewer than max_bytes bytes available, the function copies all the bytes there are.     *
     * @param string $data  Output string.
     * @param int $max_bytes  The number of bytes to copy.
     * @return mixed  Returns the number of bytes copied, or -1 on failure.
     */
    public function copyout(&$data, $max_bytes){}

    /**
     * Behaves as EventBuffer::read() , except that it does not copy the data: it just removes it from the front of the buffer.     *
     * @param int $len  The number of bytes to remove from the buffer.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function drain($len){}

    /**
     * Enable locking on an EventBuffer so that it can safely be used by multiple threads at the same time. When locking is enabled, the lock will be held when callbacks are invoked. This could result in deadlock if you aren't careful. Plan accordingly!
     * @return void  No value is returned.
     */
    public function enableLocking(){}

    /**
     * Alters the last chunk of memory in the buffer, or adds a new chunk, such that the buffer is now large enough to contain len bytes without any further allocations.     *
     * @param int $len  The number of bytes to reserve for the buffer
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function expand($len){}

    /**
     * Prevent calls that modify an event buffer from succeeding     *
     * @param bool $at_front  Whether to disable changes to the front or end of the buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function freeze($at_front){}

    /**
     * Acquires a lock on buffer. Can be used in pair with EventBuffer::unlock() to make a set of operations atomic, i.e. thread-safe. Note, it is not needed to lock buffers for individual operations. When locking is enabled(see EventBuffer::enableLocking() ), individual operations on event buffers are already atomic.
     * @return void  Returns TRUE on success. Otherwise FALSE.
     */
    public function lock(){}

    /**
     * Prepend data to the front of the buffer.     *
     * @param string $data  String to be prepended to the front of the buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function prepend($data){}

    /**
     * Behaves as EventBuffer::addBuffer() , except that it moves data to the front of the buffer.     *
     * @param EventBuffer $buf  Source buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function prependBuffer(EventBuffer $buf){}

    /**
     * "Linearizes" the first size bytes of the buffer, copying or moving them as needed to ensure that they are all contiguous and occupying the same chunk of memory. If size is negative, the function linearizes the entire buffer.     *
     * @param string $size  The number of bytes required to be contiguous within the buffer.
     * @return void  If size is greater than the number of bytes in the buffer, the function returns NULL. Otherwise, EventBuffer::pullup() returns string.
     */
    public function pullup($size){}

    /**
     * Read the first max_bytes from the buffer and drain the bytes read. If more max_bytes are requested than are available in the buffer, it only extracts as many bytes as available.     *
     * @param int $max_bytes  Maxmimum number of bytes to read from the buffer.
     * @return mixed  Returns string read, or FALSE on failure.
     */
    public function read($max_bytes){}

    /**
     * Extracts a line from the front of the buffer and returns it in a newly allocated string. If there is not a whole line to read, the function returns NULL. The line terminator is not included in the copied string.     *
     * @param string $eol_style  One of EventBuffer:EOL_* constants.
     * @return void  On success returns the line read from the buffer, otherwise NULL.
     */
    public function readLine($eol_style){}

    /**
     * Scans the buffer for an occurrence of the string what. It returns numeric position of the string, or FALSE if the string was not found.     *
     * @param string $what  String to search.
     * @param int $start  Start search position.
     * @param int $end  End search position.
     * @return mixed  Returns numeric position of the first occurance of the string in the buffer, or FALSE if string is not found.
     */
    public function search($what, $start = -1, $end = -1){}

    /**
     * Scans the buffer for an occurrence of an end of line specified by eol_style parameter. It returns numeric position of the string, or FALSE if the string was not found.     *
     * @param int $start  Start search position.
     * @param int $eol_style  One of EventBuffer:EOL_* constants.
     * @return mixed  Returns numeric position of the first occurance of end-of-line symbol in the buffer, or FALSE if not found.
     */
    public function searchEol($start = -1, $eol_style = 
     EventBuffer::EOL_ANY
    ){}

    /**
     * Substracts up to length bytes of the buffer data beginning at start position.     *
     * @param int $start  The start position of data to be substracted.
     * @param int $length  Maximum number of bytes to substract.
     * @return mixed  Returns the data substracted as a string on success, or FALSE on failure.
     */
    public function substr($start, $length){}

    /**
     * Re-enable calls that modify an event buffer.     *
     * @param bool $at_front  Whether to enable events at the front or at the end of the buffer.
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function unfreeze($at_front){}

    /**
     * Releases lock acquired by EventBuffer::lock() .
     * @return mixed  Returns TRUE on success. Otherwise FALSE.
     */
    public function unlock(){}

    /**
     * Write contents of the buffer to a file descriptor. The buffer will be drained after the bytes have been successfully written.     *
     * @param mixed $fd  Socket resource, stream or numeric file descriptor associated normally associated with a socket.
     * @param int $howmuch  The maximum number of bytes to write.
     * @return void  Returns the number of bytes written, or FALSE on error.
     */
    public function write($fd, $howmuch){}



}