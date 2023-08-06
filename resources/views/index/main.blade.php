<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="container-fluid vw-100 vh-100 d-flex justify-content-center align-items-center p-5" style="background-color: #E4E4E4">
        <div class="row h-75 m-collapse shadow-regular bg-white" style="width: 65%">
            <div class="col-6 d-flex flex-column h-100 justify-content-between pt-3 bg-primary-mu">
                <div class="logo-sm " style="background-image: url(/css/img/icon.svg); background-size: contain;" ></div>
                <span>
                    <h1 class="bold lh-1" style="font-size: 100px" >ADMIN</h1>
                    <h6 style="font-size: 40px">PAGE</h6>
                </span>
            </div>
            <div class="col-6 login-grid p-3 ">
                <div class="div">
                    <h5>Selamat Datang</h5>
                </div>
                <div class="box">
                </div>
                <form action="/login/store" method="post">
                @csrf
                <div class="box">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="w-100 h-75 ps-1" style="border: 3px solid #FF8A35" type="text" placeholder="Masukkan Email..." required>
                </div>  
                <div class="box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="w-100 h-75 ps-1" style="border: 3px solid #FF8A35" type="text" placeholder="Masukkan Password..." required>
                </div> 
                <div class="box">
                    <label for="code">Kode</label>
                    <input type="kode" id="code" name="kode" class="w-100 h-75 ps-1" style="border: 3px solid #FF8A35" type="text" placeholder="Masukkan Kode..." required>
                </div>
                <button class="bg-primary-mu border-0 bold fs-5 text-uppercase" type="submit" name="submit">MASUK
                </button>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>