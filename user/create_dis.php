<?php 
include 'serve_c.php';
?>

<?php
    if ($_SESSION["user_level"]!="Administrator") {
        echo '<script type="text/javascript"> alert("Error 401, Unauthorized Access, please contact your Systems Administrator.") </script>';
        echo '<script type="text/javascript"> window.location.href="./dashboard.php"; </script>';
} else {
    include 'dbconnect.php';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $disaster_desc = $_POST["disaster_desc"]; 
        $dis_control_number = $_POST["dis_control_number"];  
        $disaster_type = $_POST["disaster_type"];
        $AreaofEffect = $_POST["AreaofEffect"];
        $encoded_by = $_POST["encoded_by"];
        $Sdate = date('M d Y', strtotime($_POST["Sdate"]));
        $Shour = $_POST["Shour"];
        $Sminute = $_POST["Sminute"];
        $Smeridiem = $_POST["Smeridiem"];
        $Edate = date('M d Y', strtotime($_POST["Edate"]));
        $Ehour = $_POST["Ehour"];
        $Eminute = $_POST["Eminute"];
        $Emeridiem = $_POST["Emeridiem"];

        $sql = "INSERT INTO `disasterinfo`(`disaster_desc`, `dis_control_number`, `disaster_type`, `AreaofEffect`, `encoded_by`, `date_log`, `Sdate`, `Shour`, `Sminute`, `Smeridiem`, `Edate`, `Ehour`, `Eminute`, `Emeridiem`) 
        VALUES ('$disaster_desc', '$dis_control_number', '$disaster_type', '$AreaofEffect', '$encoded_by', current_timestamp(), '$Sdate', '$Shour', '$Sminute', '$Smeridiem', '$Edate', '$Ehour', '$Eminute', '$Emeridiem')";

        $result = mysqli_query($conn, $sql);

        if($result)
        {
            echo '<script type="text/javascript"> alert("Done!") </script>';
        }
        else
        {
            echo '<script type="text/javascript"> alert("Information not updated") </script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GPI-BCP Request</title>
        <link rel="stylesheet" type="text/css" href="/form-test/assets/css/create_dis.php">
    </head>
    <body>
    <!-- Top Nav -->
    <?php include 'topnav.php'; ?>
        <div class="Form">
            <form class="disaster_form" action="create_dis.php" method="post">
                <h2 class="text-center">BCP - Emergency Distress Form</h2>
                <h3 class="text-center">Disasater Details</h3>

                <!-- Disaster Description-->
                <div class="form-group"> 
                    <label for="disaster_desc">Description</label> 
                    <input type="text" class="form-control" id="disaster_desc"
                    name="disaster_desc" required>
                </div>

                <!--Control_Number-->
                <div class="form-group">
                    <label for="dis_control_number">Control Number</label> 
                    <input type="text" class="form-control" id="dis_control_number"
                    name="dis_control_number" required>
                </div>

                <!--Time_Start-->        
                <label for="start-grid">Start</label>
                <div class="start-grid" id="start-grid">
        
                    <div class="form-group">    
                        <label for="Sdate">Date</label>
                        <input type="date" class="start-date" id="Sdate" name="Sdate" required>
                    </div>

                    <div class="form-group">    
                        <label for="Shour">Hour</label>
                        <select type="number" class="start-hour" id="Shour" name="Shour" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>

                    <div class="form-group">    
                    <label for="Sminute">Minute</label>
                        <select type="number" class="start-minute" id="Sminute" name="Sminute" required>
                            <option value="00">00</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                        </select>
                    </div>

                    <div class="form-group">    
                    <label for="Smeridiem">Meridiem</label>
                        <select type="text" class="start-meridiem" id="Smeridiem" name="Smeridiem" required>
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                </div>

                <!--Time_End-->
                <label for="timestart">End</label>
                <div class="end-grid">
                    <div class="form-group">    
                        <label for="Edate">Date</label>
                        <input type="date" class="end-date" id="Edate" name="Edate" required>
                    </div>

                    <div class="form-group">    
                        <label for="Ehour">Hour</label>
                        <select type="number" class="end-hour" id="Ehour" name="Ehour" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option></select>
                    </div>

                    <div class="form-group">    
                        <label for="Eminute">Hour</label>
                        <select type="number" class="end-minute" id="Eminute" name="Eminute" required>
                            <option value="00">00</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                            <option value="45">45</option>
                            <option value="46">46</option>
                            <option value="47">47</option>
                            <option value="48">48</option>
                            <option value="49">49</option>
                            <option value="50">50</option>
                            <option value="51">51</option>
                            <option value="52">52</option>
                            <option value="53">53</option>
                            <option value="54">54</option>
                            <option value="55">55</option>
                            <option value="56">56</option>
                            <option value="57">57</option>
                            <option value="58">58</option>
                            <option value="59">59</option>
                        </select>
                    </div>

                    <div class="form-group">    
                        <label for="Emeridiem">Meridiem</label>
                        <select type="text" class="end-meridiem" id="Emeridiem" name="Emeridiem" required>
                            <option value="AM">AM</option>
                            <option value="PM">PM</option>
                        </select>
                    </div>
                </div>
                
                <!--Disaster Type-->
                <div class="form-group">
                    <label for="disaster_type">Disaster Type</label> 
                    <input type="text" class="form-control" id="disaster_type"
                    name="disaster_type" required>
                </div>
                
                <!--Affected Areas-->
                <div class="form-group">
                    <label for="AreaofEffect">Affected Area</label> 
                    <input type="text" class="form-control" id="AreaofEffect"
                    name="AreaofEffect" required>    
                </div>

                <!--Encoded by-->
                <div class="form-group"> 
                    <label for="encoded_by">Encoded by</label>
                    <input type="text" class="form-control" id="encoded_by"
                    name="encoded_by" value="<?php echo ($_SESSION["username"]); ?>" readonly required>    
                </div>

                <small id="emailHelp" class="form-text text-muted">Make sure to answer all the fields properly</small>      
                <div class="submit">
                    <input type="submit" class="btn-primary" value="Submit" id="button">
                </div>
            </form>
        </div>
    </body>
</html>