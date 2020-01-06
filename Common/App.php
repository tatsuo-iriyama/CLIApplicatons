<?php
/**
 * アプリケーションのベースとなるクラス
 *
 * 全てのアプリケーションはこのクラスを継承する
 */
class App
{
    /**
     * 入力値を受け取るメソッド
     *
     * @return string
     */
    protected function getInput()
    {
        return trim(fgets(STDIN));
    }
}

