<?php
                     include("connect.php");

                        $name = $_POST['name'];
                        $email_contact = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];
                        $ngaylienhe = date("Y-m-d H:i:s");
                        $trangthai = 0;
                        
                        
                            $sql_contact = "INSERT INTO `tbl_lienhe`(`malienhe`, `ten`, `email`, `tinnhan`, `tieude`, `ngaylienhe`, `trangthai`) 
							VALUES (NULL,'$name','$email_contact','$message','$subject','$ngaylienhe','$trangthai')";
                            if($conn->query($sql_contact))
                            {
                                echo "
                                <script type='text/javascript'>
                                    window.alert('Liên hệ thành công');
                                    window.location.href='contact.php';
                                </script>
                            ";
                        }else{
                            echo "
                                <script type='text/javascript'>
                                    window.alert('Bạn cần nhập đầy đủ thông tin ');
                                    window.location.href='contact.php';
                                </script>
                            ";
                        }

                    ?>
                        
                                
                   



                    ?>