<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Class Activity</title>
    <style>
form {
    max-width: 400px;
    font-family: Arial, sans-serif;
    margin-left: 10px;
}


select {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 5px;
}

input[type="submit"] {
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


.container {
    padding: 16px;
}

.input-form{
    margin-bottom: 10px;
    padding: 10px;
    margin: 5px 0;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

select{
    display:block;
}

.country-div{
    display: flex;
}

label {
    display: block;
    margin: 0px;
}

label>span {
    float: left;
    width: 20%;
    text-align: right;
    padding-right: 10px;
    margin-top: 10px;
    color: #888;
}

/* Add this CSS to your existing style block */
.country-div {
    display: flex !important;
    align-items: center;
    margin-right: -95px;
}


    </style>
</head>
<body>
<form action="activity5-preview.php" method="GET">
    <label>
        <span>Name:</span>
        <input  class="input-form" type="text" name="name"/><br/>
    </label>
    <label>
        <span>Username:</span>
        <input class="input-form" type="text" name="username"/><br/>
    </label>
    <label>
        <span>Password:</span>
        <input class="input-form" type="password" name="password" /><br/>
    </label>
    <label>
        <span>Address:</span>
        <input class="input-form" type="text" name="address"/><br/>
    </label>
    <label class = "country-div">
        <span>Country:</span>
        <select class="input-form" id="country" name="country">
            <option value="default">(Please select a country)</option>
            <option value="turkiye">TURKIYE</option>
            <option value="germany">GERMANY</option>
            <option value="palestine">PALESTINE</option>
            <option value="norway">NORWAY</option>
        </select><br/>
    </label>
    
    <label>
        <span>ZIP Code:</span>
        <input class="input-form" type="number" name="zipCode"/><br/>
    </label>
    <label>
        <span>Email:</span>
        <input class="input-form" type="email" name="email"/><br/>
    </label>
    <label>
        <span>Sex:</span>
        <input class="input-form" type="radio" name="sex" value="Female" value="" checked>Female
        <input class="input-form" type="radio" name="sex" value="Male">Male
    </label>
    <br/>
    <label>
        <span>Language:</span>
        <input  class="input-form" type="checkbox" name="language[]" value="English">English
        <input  class="input-form" type="checkbox" name="language[]" value="French">French
        <input  class="input-form" type="checkbox" name="language[]" value="German">German 
    </label>
    <br/>
    <label>
        <span>About:</span>
        <textarea  name="about"></textarea><br/>
    </label>
    <br/>
    <input class="input-form" type="submit" value="Submit"><br/>
</form>

</body>
</html>