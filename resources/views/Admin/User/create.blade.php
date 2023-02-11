<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new Account</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="mt-6 ">
            <div class="flex justify-center">
                <h2 class="mb-4 text-3xl text-purple-500">Create new Account</h2>
            </div>
            <div class="flex justify-center">
                <form action="/users" method="post">
                    @csrf
                    Last Name<br>
                    <input
                        type="text"
                        name="lastname"
                        placeholder="Vd: Tran Van"
                        class="input-form"
                    ><br>
                    First Name:<br>
                    <input
                        type="text"
                        name="firstname"
                        placeholder="Vd: Truong"
                        class="input-form"
                    ><br>
                    Phone Number: <br>
                    <input
                        type="number"
                        name="phonenumber"
                        placeholder="Enter your phone number"
                        class="input-form"
                    ><br>
                    Address:<br>
                    <input
                        type="text"
                        name="address"
                        placeholder="Enter your Address"
                        class="input-form"
                    ><br>
                    Email:<br>
                    <input
                        type="email"
                        name="email"
                        placeholder="Enter your email"
                        class="input-form"
                    ><br>
                    Password: <br>
                    <input
                        type="password"
                        name="password"
                        placeholder="Enter your password"
                        class="input-form"
                    ><br>
                    Confirm Password: <br>
                    <input
                        type="password"
                        name="confirmpassword"
                        placeholder="Confirm password"
                        class="input-form"
                    ><br>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-purple-600 text-white mt-4 opacity-80 hover:cursor-pointer hover:opacity-100"
                    >Sign up</button>
                </form>
            </div>
    </div>
</body>
</html>
