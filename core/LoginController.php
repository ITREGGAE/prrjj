<?php
include('./LoginModel.php');
                if (isset($_POST['submit']))
                {

                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    if(login($email, $password))
                    {
                        // header("Location: ../home.php");
                        echo "login";
                    } else {
                        echo "<div class='message'>
                        <p>Wrong Username or Password</p>
                        </div> <br>";
                        echo "<a href='index.php'><button class='btn'>Go Back</button></a>";
                    }
                    if(isset($_SESSION['valid'])){
                      header("Location: ../home.php");
                    }
                  }