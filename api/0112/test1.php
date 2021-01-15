<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script>
    var xhr = new XMLHttpRequest()
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200)
        {
            var aaa = xhr.responseText
            console.log(aaa)
        }
    }
    // xhr.open('get',"test2.php")
    xhr.setRequestHeader(header("uid:1234"))
    xhr.send()
</script>
</html>