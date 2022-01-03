<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset-pass</title>
    <style> .btn {
 
 
  background-color:#FE980F;
  color: black;
  font-size: 16px;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

 .btn:hover {
  background-color:#F0F0E9;
  color:black;
}
        </style>
</head>
<body>
    <div>
    <p  style="text-align:center;font-size: 20px">Vui lòng nhấn submit để thay đổi mật khẩu!</p>
    <p  style="text-align:center;font-size: 20px">(Hết hạn trong vòng 5 phút)</p>
    <form style="text-align:center " action="{{URL::to('/update-mk')}}" method="get">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" value="{{ $data['token'] }}" name="token" />
        <input type="hidden" value="{{ $data['email'] }}" name="email" />
        <button  type="submit" class="btn">Submit</button>
    </form>
    </div>
</body>
</html>






