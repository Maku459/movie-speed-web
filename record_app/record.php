<?php

///////////////////////////////////////////////////
// 個人サイト向けいいねボタンプログラム Ver1.1.1
// 製作者    ：ガタガタ
// サイト    ：https://do.gt-gt.org/
// ライセンス：MITライセンス
// 全文      ：https://ja.osdn.net/projects/opensource/wiki/licenses%2FMIT_license
// 公開日    ：2020.08.21
// 最終更新日：2020.09.15
//
// このプログラムはどなたでも無償で利用・複製・変更・
// 再配布および複製物を販売することができます。
// ただし、上記著作権表示ならびに同意意志を、
// このファイルから削除しないでください。
///////////////////////////////////////////////////

ini_set('display_errors',1);
$include = get_included_files();

if (array_shift($include) === __FILE__) {
    die('このファイルへの直接のアクセスは禁止されています。');
}

class record {

  private $csv;
  private $time;

  	// コンストラクタ宣言
  	public function __construct() {

      $this->csv = 'data.csv';

      date_default_timezone_set('Asia/Tokyo');
      $this->time = date("Y/m/d-H:i:s");
      var_dump($this);
  	}

    public function recordCount($datalist) {
      $fp = fopen($this->csv, 'a');
      //配列は文字列にできないので別に書き込む
      $linea = implode(',' , $datalist);
      $lineb = $this->time;
      fwrite($fp, $linea . "\n");
      fwrite($fp, $lineb . "\n");
      fwrite($fp, "----------" . "\n");
      fclose($fp);
      print('record.php alive!');
    }

} // end class record

 ?>
