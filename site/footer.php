<?php include_once "include/init.php"?>
<?php
//`id`, `site_name`, `site_url`, `site_description`, `site_email`, `site_tages`, `site_homepanel`, `fb`, `fw`, `rss`, `yt`, `username`, `date`
if($_POST)
{
    if(isset($_POST['submit']) && $_POST['submit'] == 'Send Message')
    {
        include_once "include/function.php";
            $to = $data_info['site_email'];;
            $from =$_POST['email'] ; 
            $message = $_POST['message'];
            $message2 = "Thanx For Contact Us <br>".$_POST['message'];
            $subject = 'Email From:'.$from;
            $subject2 = 'Email To:'.$data_info['site_name'];
            $send = mail($to,$subject,$message);
            $send2 = mail($from,$subject2,$message2);
            
            if($send == TRUE && $send2 == TRUE)
            {
                echo "<script >alert('send sucessful')</script>";
            }
        }
    }
?>
<div id="footer">
    	<div id="send">
        	<form method="post" action=''>
            	<input type="text" placeholder="Write your name here !"  name='name' required />
                <input type="email" placeholder="Write your email here !"  name='email' required  style='width: 247px;
    height: 30px;
    background: #f0f0f0;
    border: 0;
    border-radius: 5px;
    margin-bottom: 10px;
    padding: 5px;'/>
                
              <textarea placeholder="Write your message here !" name='message'></textarea>
                
                <input type="submit" value="Send Message" />
            </form>
        </div>
        <div id="contacts">
   	    	<img src="<?php echo SITE ;?>images/logo.png" width="285" height="118" />
            <div>
                Contact Information<br />
                Phone<br />
                +2 01016936293 <br />
                <br /><br />
                Address<br />
                Egypt, Cairo.<br />
                <br /><br />
                Email<br />
                <a href="mailto:admin@awebarts.com">admin@awebarts.com</a><br />
                <a href="mailto:ali_fergani2003@yahoo.com">ali_fergani2003@yahoo.com</a><br />
        	</div>
        </div>
    </div>
</div>
<script src="./app/js/jquery-3.2.1.min.js"></script>
    <script src="./app/js/popper.min.js"></script>
    <script src="./app/js/bootstrap.js"></script>
    <script src="./app/js/holder.min.js"></script>
</body>
</html>