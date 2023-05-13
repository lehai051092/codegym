<?php

class Format
{
    /**
     * @param $date
     * @return string
     */
    public function formatDate($date)
    {
        return date('F j, Y, g:i a', strtotime($date));
    }

    /**
     * @param $text
     * @param int $limit
     * @return string
     */
    public function textShorten($text, int $limit = 400)
    {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strpos($text, ' '));

        return $text . '.....';
    }

    /**
     * @param $data
     * @return string
     */
    public function validation($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);

        return htmlspecialchars($data);
    }

    /**
     * @return string
     */
    public function title()
    {
        $path =  $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');

        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }

        return ucfirst($title);
    }
}
