<?php

namespace TestApp;

use Mobile_Detect;

class Service
{
    protected $detect = null;

    public function __construct() 
    {
        $this->detect = new Mobile_Detect;
    }

    public function getOs() : string
    {
        $userAgent = $_SERVER['HTTP_USER_AGENT'];

        $oses = array (
            'iPhone'            => '(iPhone)',
            'Windows 3.11'      => 'Win16',
            'Windows 95'        => '(Windows 95)|(Win95)|(Windows_95)',
            'Windows 98'        => '(Windows 98)|(Win98)',
            'Windows 2000'      => '(Windows NT 5.0)|(Windows 2000)',
            'Windows XP'        => '(Windows NT 5.1)|(Windows XP)',
            'Windows 2003'      => '(Windows NT 5.2)',
            'Windows Vista'     => '(Windows NT 6.0)|(Windows Vista)',
            'Windows 7'         => '(Windows NT 6.1)|(Windows 7)',
            'Windows NT 4.0'    => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
            'Windows ME'        => 'Windows ME',
            'Open BSD'          => 'OpenBSD',
            'Sun OS'            => 'SunOS',
            'Linux'             => '(Linux)|(X11)',
            'Mac OS X'            => '(Safari)',
            'Mac OS'            => '(Mac_PowerPC)|(Macintosh)',
            'QNX'               => 'QNX',
            'BeOS'              => 'BeOS',
            'OS/2'              => 'OS/2',
            'Search Bot'        => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
        );
    
    
    foreach($oses as $os => $preg_pattern) {
        if ( preg_match('@' . $preg_pattern . '@', $userAgent) ) {
            return $os;
        }
    }
        
    return 'n/a';
    }

    public function getDevice() : string
    {
        return ($this->detect->isMobile() ? ($this->detect->isTablet() ? 'tablet' : 'phone') : 'computer');
    }
}