<?php
                 session_start();
                    echo '<script>console.log("MAIN LOG in index")
                    </script>';
                    if(isset($_SESSION['username'])){
                        $username = $_SESSION['username'];
                        
                    echo      '   
                             <script>console.log("IF LOG in index")
                            
                             </script>
                             <a href="logout.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGOUT</a>
                             
                             <a href="#"  style="margin-left:700px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome : <span style="color: #4caf50">'.$username.'</span></a>
                             
                             '; 
                            }
                            else{
                                
                                echo ' 
                                <a href="login_page.php" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN</a>
                                <a href="register.php"  style="margin-left:750px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTER</a>
                            <script>console.log(" ELSE LOG in index")
                            </script>
                        ';
                    }
                   
                   ?>