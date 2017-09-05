var comments = [
        {
           img:'./images/portfolio/12.jpg', //图片 
           info:'非常棒哦', //文字 
           close:false, //显示关闭按钮 
           speed:13, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/3.jpg', //图片 
           info:'很喜欢这里的风景', //文字 
           close:false, //显示关闭按钮 
           speed:12, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/4.jpg', //图片 
           info:'想去一次', //文字 
           close:false, //显示关闭按钮 
           speed:11, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/5.jpg', //图片 
           info:'百看不厌', //文字 
           close:false, //显示关闭按钮 
           speed:11, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/6.jpg', //图片 
           info:'心情很放松', //文字 
           close:false, //显示关闭按钮 
           speed:10, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/7.jpg', //图片 
           info:'有幸去过一次', //文字 
           close:false, //显示关闭按钮 
           speed:14, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/8.jpg', //图片 
           info:'有没有人想一起去的', //文字 
           close:false, //显示关闭按钮 
           speed:13, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/9.jpg', //图片 
           info:'待在那里都不想回来了', //文字 
           close:false, //显示关闭按钮 
           speed:16, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         },
         {
           img:'./images/portfolio/10.jpg', //图片 
           info:'环境宜人', //文字 
           close:false, //显示关闭按钮 
           speed:12, //延迟,单位秒,默认8 
           old_ie_color:'#000000', //ie低版兼容色,不能与网页背景相同,默认黑色 
         }
    ];
    //每条弹幕发送间隔
    var looper_time=30*1000;
    //是否首次执行
    var run_once=false;
    do_barrager();
     
    function do_barrager(){
      if(run_once){
          //如果是首次执行,则设置一个定时器,并且把首次执行置为false
          looper=setInterval(do_barrager,looper_time);                
          run_once=false;
      }

      $.each(comments, function(index, data){ 
        // alert(data);
         $('body').barrager(data);
      }); 
    }