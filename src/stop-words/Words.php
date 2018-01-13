<?php
namespace miikou\src\stopwords;

/**
 * Class Words
 * @package miikou\stopwords\src
 */
class Words
{
    protected $stop_words = array();

    /**
     * Words constructor.
     */
    public function __construct()
    {
        $words =explode("\r\n",file_get_contents('dict.txt'));
        $this->stop_words = $words;
    }

    /**
     * $a = new Words();
        $bb = '我今天开着最牛公安上班';
        $res = $a->mergeWords($bb);
        var_dump($res);
     *
     * @param $key  原始字符串
     * @param string $replace  替换为
     * @return string
     */
    public function mergeWords($key,$replace='*'){
        $badword1 =array_combine($this->stop_words,array_fill(0,count($this->stop_words),$replace));
        $str = strtr($key,$badword1);
        return $str;
    }
}



