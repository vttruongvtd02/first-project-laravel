<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="flex justify-center flex-col mx-20">
    <h1 class="text-purple-500 text-3xl text-center mb-8">User Management</h1>
    <table class="">
        <tr class="grid grid-cols-8 gap-2">
            <th class="">#</th>
            <th class="col-span-2">Họ Tên</th>
            <th class="col-span-2">Email</th>
            <th class="">SĐT</th>
            <th class="">Địa chỉ</th>
            <th class="">Hành Động</th>
        </tr>
        <tr>
            @foreach($accounts as $key => $account)
                <td class="grid grid-cols-8 gap-2 text-center my-6 pb-2 border-b">
                    <span class="">{{$key}}</span>
                    <div class="col-span-2">{{$account->lastname}} {{$account->firstname}}</div>
                    <div class="col-span-2">{{$account->email}}</div>
                    <div class="">{{$account->phone_number}}</div>
                    <div class="">{{$account->address}}</div>
                    <div class="flex justify-center">
                        <a href="users/{{$account->id}}/edit" class="border px-2 py-1 text-blue-600 mr-1">Sửa</a>
                        <form action="/users/{{$account->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border px-2 py-1 text-red-600 ml-1">Xóa</button>
                        </form>
                    </div>
                </td>
            @endforeach
        </tr>
    </table>
    <a href="users/create" class="bg-purple-500 p-4 w-[240px] text-white">Đăng ký thêm tài khoản mới</a>
</div>
</body>
</html>
