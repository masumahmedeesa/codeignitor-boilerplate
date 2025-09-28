<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?= asset_url('/assets/css/bootstrap.min.css') ?>">
    <style>
        body {
            background-image: url('<?= base_url('public/img/home_bg_3.jpg'); ?>');
            /* Background image */
            background-size: cover;
            /* Cover the entire page */
            background-position: center;
            /* Center the background image */
            height: 100vh;
            /* Full viewport height */
            margin: 0;
            /* Remove default margin */

            display: flex;
            /* Use flexbox to center the content */
            align-items: center;
            /* Center vertically */
            justify-content: center;
            /* Center horizontally */
        }

        .login-container {
            width: 450px;
            /* Set a greater width for the box */
            height: auto;
            /* Fixed height for the box */
            padding: 20px;
            /* Padding inside the box */


            border-radius: 10px;
            /* Rounded corners */
            box-shadow: 3px 4px 20px rgba(0, 0, 0, 0.3);
            /* Shadow effect */
            border: 0.5px solid #96A0B5;
            /* Box border color */
        }

        h2 {
            color: rgba(58, 125, 68, 1);
            /* Title color */
            margin-bottom: 20px;
            /* Space below the title */
            font-size: 18px;
            /* Title font size */
            font-weight: 800;
        }

        .form-control {
            margin-bottom: 15px;
            /* Spacing between fields */
            width: 100%;
            /* Full width of the container */
            height: 45px;
            background-color: rgba(247, 249, 251, 1);
            /* Background color for the input fields */

        }

        .form-control::placeholder {
            color: #96A0B5;
            /* Placeholder color */
            font-size: 12px;
            /* Placeholder text size */
            font-weight: 500;
        }

        .btn {
            background-color: #3A7D44;
            /* Button background color */
            color: #FFFFFF;
            /* Button text color */
            font-weight: 800;
            font-size: 15px;

        }

        .btn:hover {
            background-color: rgb(79, 149, 89);
            /* Darker shade on hover */
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2 class="text-center" style=" padding-top: 10px; ">ই-জয়েনিং এন্ড রিলিজ</h2>
        <?php //echo form_open(base_url('admin/AuthController/adminloginAuth'), ['method' => 'post']); 
        ?>

        <input type="text" class="form-control" id="userName" name="username" placeholder="ডোমেইন আইডি:" required>
        <input type="password" class="form-control" id="pwd" name="password" placeholder="পাসওয়ার্ড:">
        <button type="submit" class="btn btn-block">লগইন করুন</button>
        <?php //echo form_close(); 
        ?>
    </div>

    <script src="<?= asset_url('/assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= asset_url('/assets/js/bootstrap.bundle.min.js') ?>"></script>

</body>

</html>