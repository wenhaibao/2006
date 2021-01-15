var week = [
    '星期天',
    '星期一',
    '星期二',
    '星期三',
    '星期四',
    '星期五',
    '星期六'
]
setInterval(function(){
    var t = new Date()
    var timey = t.getFullYear()
    var timem = t.getMonth() + 1
    if(timem<10)
    {
        timem = "0" + timem
    }
    var timed = t.getDate()
    var timeH = t.getHours()
    var timeM = t.getMinutes()
    if(timeM<10)
    {
        timeM = "0" + timeM
    }
    var timeT = t.getSeconds()
    if(timeT<10)
    {
        timeT = "0" + timeT
    }
    var timeD = t.getDay()
    // console.log(timeT)
    var sssjjj = timey + '-' + timem + '-' + timed + '-' + timeH + '-' + timeM + '-' + timeT + '  ' + week[timeD]
    $('#daytime').html(sssjjj)
},1000)
$("button").on('click',function(){

})