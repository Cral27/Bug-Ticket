
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bug Report</title>
        <style>
            form{
                outline: 1px solid red;
                width: 275px;
                height: 420px;
                padding: 2% 3%;
                margin: 4% auto;
                border-radius: 4%;
            }
            h1{
                text-align: center;
                margin-top: 0;
            }
            label{
                display: block;
                margin: 2% 0;
            }
            input{
                margin-left: 6%;
            }
            #first_name{
                margin-left: 6.7%;
            }
            #last_name{
                margin-left: 7.4%;
            }
            #email{
                margin-left: 19%;
            }
            #issue_title{
                margin-left: 8.8%;
            }

        </style>
    </head>
    <body>
        <form action="process.php" method='post'>
            <h1>Bug Report</h1>
            <label>Date Today:<input type="date" name='date'></label>    
            <label>First Name:<input type="input" name='first_name' id='first_name'></label>            
            <label>Last Name:<input type="input" name='last_name' id='last_name'></label>          
            <label>Email:<input type="input" name='email' id='email'></label>            
            <label>Issue Title:<input type="input" name='issue_title' id='issue_title'></label>           
            <label>Issue Details:</label>
            <textarea name="details" id="" cols="34" rows="10"></textarea>
        </form>
    </body>
</html>