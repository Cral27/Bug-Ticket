
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="process.php">
            <h1>Bug Report</h1>
            <label for="date">Date Today:</label>
            <input type="datetime" name='date' id='date'>
            <label for="first">First Name:</label>
            <input type="input" name='first_name' id='first'>
            <label for="last">Last Name:</label>
            <input type="input" name='last_name' id='last'>
            <label for="email">Email:</label>
            <input type="input" name='email' id='email'>
            <label for="issue_title">Issue Title:</label>
            <input type="input" name='issue_title' id='issue_title'>
            <label for='details'>Issue Details:</label>
            <textarea name="details" id="" cols="30" rows="10"></textarea>
        </form>
    </body>
</html>