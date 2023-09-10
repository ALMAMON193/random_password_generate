<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randpm password generate</title>
    <style>
    <?php include 'style.css'?>h6#password {
        word-break: break-all;
        /* Allow long words to break and wrap */
        white-space: pre-wrap;
        /* Preserve whitespace and wrap lines */
        overflow: auto;
        /* Add scrollbars if needed */
        max-height: 150px;
        /* Set a maximum height for the password display */

        padding: 10px;
        /* Add some padding for better appearance */
    }
    </style>
    </style>
</head>

<body>
    <div class="container">
        <h2>Random Password generate</h2>
        <form method="POST" action="">
            <input type="number" name="length" class="form-control" placeholder="Enter the length" required>

            <button type="submit">Generate</button>
        </form>
        <br>

        <h6 id="password">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $caracture  = $_POST['length'];
                $available_chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZabcdefABC1234567890+*/-.,>?@#$%^&_(){}|";
                $password = " ";
                for ($i = 0; $i < $caracture; $i++) {
                    $password .= $available_chars[rand(0, strlen($available_chars) - 1)];
                }
                echo $password;
            }
            ?>
        </h6>

    </div>

</body>

</html>