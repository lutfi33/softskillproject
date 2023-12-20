@extends('layouts/main')

@section('konten')
    <div class="w-50 center rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action="proses_login.php" method="POST">
            <div class="mb-3">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="mb-3">
            <label for="loginType">Login As:</label>
            <select id="loginType" name="loginType" required>
                <option value="user">User</option>
                <option value="fasil">Fasil</option>
                <option value="admin">Admin</option>
            </select>
            </div>
            
            <div class="mb-3">
            <input type="submit" value="Login">
            </div>
        </form>

        </div>   
@endsection