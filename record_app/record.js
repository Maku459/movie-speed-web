$(function () {
    'use strict';
  
    var thanks = false; // お礼メッセージを出す場合はtrue、出さない場合はfalse
    var folderpath = 'time_stretch/';
    // record_appフォルダが入っているパスを、ドメイン名以下から記入してください。
    // 下記の例に従ってください。
    // var folderpath = '/'; --- http://example.com/record_app/の場合
    // var folderpath = '/site/'; --- http://example.com/site/record_app/の場合
    // var folderpath = 'site/folder/' --- http://example.com/site/folder/record_app/の場合
  
    ////// ここから下のエリアには変更を加えないでください ///////
    var pathname = location.href;
  
    var ajaxPath = `${location.protocol}//${location.host}/${folderpath}record_app/_ajax.php`;

    $('#check').on('click',function(){
      var datalist = JSON.parse(localStorage.getItem("datalist"));
      $.post(ajaxPath, {
        datalist: datalist,
        function() {
          console.log(datalist);
        }
      }).fail(function () {
        alert('record.jsのfolderpathの値を確認して下さい。');
      }).done(function () {
        
      });
    });


  });
  