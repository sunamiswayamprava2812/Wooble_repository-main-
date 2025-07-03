<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <style>
        body{
            background-color: aliceblue;
          }
        .contact {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 1s;
            padding: 4rem 5rem;
            background-color: #e8e1e1;
            border-radius: 15px;
        }

        .contact .input-box input,
        textarea {
            width: 100%;
            height: 35px;
            padding: 20px;
            letter-spacing: 1px;
            outline: none;
            border: 1px solid rgba(0, 0, 0, 0.61);
            border-radius: 5px;
            margin: 0;
            margin-bottom: 10px;
            box-shadow: 0 1px rgba(0, 0, 0, 0.233);
            resize: none;
            box-sizing: border-box;
        }

        .contact .input-box textarea {
            height: 100%;
        }

        ::placeholder {
            color: rgba(0, 0, 0, 0.521);
            letter-spacing: 0;
            font-size: 15px;
        }

        .contact .submit-btn input {
            width: 100%;
            height: 35px;
            border: 1px solid rgb(3 22 40);
            background-color: transparent;
            color: rgb(35 35 36);
            font-size: 20px;
            font-family: serif;
            padding: 0 8px;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            transition: 0.3s ease-in-out;
        }

        .contact .submit-btn input:hover {
            box-shadow: 0 3px 3px rgba(0, 0, 0, 0.116);
        }

        h2 {
            color: rgb(4 29 53);
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>

<body>
<div class="contact">
    <h2>Contact Now</h2>
    <form action="mail.php" method="post">
        <div class="input-box">
            <input type="text" name="name" placeholder="Your name...">
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="Email Address...">
        </div>
        <div class="input-box">
            <textarea name="message" cols="25" rows="7" placeholder="Type your message..."></textarea>
        </div>
        <div class="submit-btn">
            <input type="submit" name="send" value="Send Message">
        </div>
    </form>
</div>
</body>

</html>