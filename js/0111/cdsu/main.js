var fromreg = document.forms[0]
fromreg.addEventListener('submit',function(e){
    //阻止表单默认提交行为
    e.preventDefault()
    //1实例化xhr
    var xhr = new XMLHttpRequest()
    //2监听readyState == 4
    xhr.onreadystatechange = function(){
        if(xhr.readyState ==4 && xhr.status ==200){
            var json_str = xhr.responseText
            console.log(json_str)
            var data = JSON.parse(json_str)
            if(data.errno==0){
                alert('OK')
            }else{
                alert('失败')
            }
        }
    }
    //3 open
    xhr.open("POST","reg.php")
    //4 send
    var inputs = fromreg.querySelectorAll("input")
    var form_param = ""
    for(var i=0;i<inputs.length;i++)
    {
        if(inputs[i].getAttribute("name")===null)
        {
            continue
        }
        form_param += inputs[i].getAttribute("name") + "=" + inputs[i].value + "&"
    }
    // 设置http 请求头
    xhr.setRequestHeader("content-type","application/x-www-form-urlencoded")
    xhr.send(form_param)
})