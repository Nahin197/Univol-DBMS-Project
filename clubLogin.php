<?php
session_start();

include('config/db_connect.php');

$email = $password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize user input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);
    $password = mysqli_real_escape_string($conn, $password);

    // Query for validation
    $query = "SELECT * FROM club WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        // Valid login, redirect to index page
         $user = $result->fetch_assoc();
       $_SESSION['user_id'] = $user['id'];
        header("Location: club_event_details.php");
        exit();
    } else {
        // Invalid login, display error message or redirect to login page
        $loginError = "Invalid email or Password. Please try again";
    }
}

?>

<!DOCTYPE html>
<html data-theme="cupcake">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.7/dist/full.min.css" rel="stylesheet" type="text/css" />
<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                clifford: '#da373d',
            }
        }
    }
}
</script>

<style>
body {
    /* background-image: url("logo/loginpage.jpg"); */
    background-color: #3498db;
    /* Replace with your desired solid color */

    /* Linear gradient on top of the solid color */
    background: linear-gradient(to right, #3498db, #2c3e50);
    /* Replace with your desired gradient colors */

    background-size: cover;
    /* Ensures the image covers the entire background */
    background-position: center;
    /* Centers the image */
    background-repeat: no-repeat;
}
</style>

<body>
    <div class="hero min-h-screen ">
        <div class="hero-content flex-col">

            <div class="card shrink-0 w-screen max-w-sm shadow-2xl bg-base-100">
                <form class="bg-white  px-8 pt-6 pb-8 mb-4 w-full rounded-t-xl" action="clubLogin.php" method="POST">
                    <h1 class="text-5xl font-bold text-black text-center mb-6">Login</h1>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                            Email:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="email" type="text" name="email" placeholder="Enter your email">
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password:
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" type="password" name="password" placeholder="Enter your password">
                    </div>

                    <div class="text-center">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary">
                    </div>

                    <?php if (!empty($loginError)) : ?>
                    <div class="text-center mt-4 text-red-500">
                        <?php echo $loginError; ?>
                    </div>
                    <?php endif; ?>

                    <div class="text-center mt-4">
                        <p>New to UniVol? <a href="clubSignup.php" class="link link-hover text-blue-500"><b>Sign
                                    up</b></a>
                        </p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="index.php" class="link link-hover text-blue-500 ">Back to Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>



</html>