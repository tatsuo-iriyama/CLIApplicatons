<?php
require_once 'App.php';

/**
 * アプリケーション本体
 *
 * アプリケーションに必要なロジックを記述する
 */
class SampleApp extends App
{
    /**
     * アプリケーションの実行メソッド
     *
     * 入力値を受け取りメッセージを出力する
     */
    public function execute()
    {
        echo 'How is the weather? : ';
        $weather = $this->getInput();
        if (mb_strlen($weather) < 1) {
            echo 'Please enter.' . "\n";
        }

        // 大文字入力を考慮して、全て小文字に変換する
        $weather = strtolower($weather);
        if (preg_match('/sunny/', $weather)) {
            echo 'Have a nice day.' . "\n";
        } elseif (preg_match('/rainy/', $weather)) {
            echo 'unlucky day.' . "\n";
        } elseif (preg_match('/cloudy/', $weather)) {
            echo 'Ok.' . "\n";
        } else {
            echo 'What?' . "\n";
        }
    }
}
