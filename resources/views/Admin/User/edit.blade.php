<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="mt-6 ">
    <div class="flex justify-center">
        <h2 class="mb-4 text-3xl text-purple-500">Edit an User</h2>
    </div>
    <div class="flex justify-center">
        <form action="/users/{{$user->id}}" method="post">
            @csrf
            @method('PUT')
            Last Name<br>
            <input
                type="text"
                name="lastname"
                placeholder="Vd: Tran Van"
                value="{{$user->lastname}}"
                class="input-form"
            ><br>
            First Name:<br>
            <input
                type="text"
                name="firstname"
                placeholder="Vd: Truong"
                value="{{$user->firstname}}"
                class="input-form"
            ><br>
            Phone Number: <br>
            <input
                type="number"
                name="phonenumber"
                placeholder="Enter your phone number"
                value="{{$user->phone_number}}"
                class="input-form"
            ><br>
            Address:<br>
            <input
                type="text"
                name="address"
                placeholder="Enter your Address"
                value="{{$user->address}}"
                class="input-form"
            ><br>
            Email:<br>
            <input
                type="email"
                name="email"
                placeholder="Enter your email"
                value="{{$user->email}}"
                class="input-form"
            ><br>
            <button
                type="submit"
                class="px-4 py-2 bg-purple-600 text-white mt-4 opacity-80 hover:cursor-pointer hover:opacity-100"
            >Update User</button>
        </form>
    </div>
</div>
</body>
</html>
