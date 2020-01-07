<?php

include '../Common/App.php';

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
echo <<< EOT
--------------------------------------------------------

Hi, I will your favorite music about ask some questions.

--------------------------------------------------------

Q1. What is your favorite music genre?

1. J-POP
2. K-POP
3. Pop
4. R&B
5. Other

Please select number from the following: 
EOT;
        $selectNumber = $this->getInput();
        if (mb_strlen($selectNumber) < 1 || !is_numeric($selectNumber)) {
            echo "\n" . '"Please select number..."' . "\n";
            exit;
        }
        echo 'Ok. next >>>' . "\n";

echo <<< EOT

Q2. Who is your favorite artist?

Please tel me artist name: 
EOT;
        $artistName = $this->getInput();
        if (mb_strlen($artistName) < 1) {
            echo 'Please enter.' . "\n";
        }
        echo 'Ok. next >>>' . "\n";

echo <<< EOT

Q3. What is the artist's favorite song?

Please tel me song name: 
EOT;

        $songName = $this->getInput();
        if (mb_strlen($songName) < 1) {
            echo 'Please enter.' . "\n";
        }
        echo 'Ok.' . "\n";

        $musicGenreList = [
            1 => 'J-POP',
            2 => 'K-POP',
            3 => 'Pop',
            4 => 'R&B',
            5 => 'Other'
        ];

echo <<< EOT

That's all.

Q1. {$musicGenreList[$selectNumber]}
Q2. $artistName
Q3. $songName

Thank you.

EOT;
    }
}