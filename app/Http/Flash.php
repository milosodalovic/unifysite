<?php

namespace App\Http;

class Flash {

    /**
     * Show message of certain type
     *
     * @param $title
     * @param $message
     * @param $type
     * @param $timer
     * @param $key
     */
    public function show($title, $message, $type, $timer, $key = 'flash_notification')
    {
        session()->flash($key,[
            'title' => $title,
            'message' => $message,
            'type' => $type,
            'timer' => $timer,
        ]);

        if($timer>0 && $key!='flash_notification_overlay'){
            session()->flash($key.'.timer',$timer);
        }
    }

    /**
     * @param $title
     * @param $message
     * @param int $timer
     */
    public function info($title, $message, $timer = 0)
    {
        $this->show($title, $message, 'info', $timer);
    }

    /**
     * @param $title
     * @param $message
     * @param int $timer
     */
    public function success($title, $message, $timer = 0)
    {
        $this->show($title, $message, 'success', $timer);
    }

    /**
     * @param $title
     * @param $message
     * @param int $timer
     */
    public function error($title, $message, $timer = 0)
    {
        $this->show($title, $message, 'error', $timer);
    }

    /**
     * @param $title
     * @param $message
     * @param int $timer
     */
    public function warning($title, $message, $timer = 0)
    {
        $this->show($title, $message, 'warning', $timer);
    }

    public function overlay($title, $message)
    {
        $this->show($title, $message, 'info', 0, 'flash_notification_overlay');
    }

    /**
     * @param $title
     * @param $message
     * @param int $timer
     */
    public function aside($title, $message, $timer = 0)
    {
        $this->show($title, $message, 'aside', $timer);
    }

}