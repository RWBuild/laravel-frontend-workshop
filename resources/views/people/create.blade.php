
<!DOCTYPE html>
<html>
<body>

<h2>Add person</h2>
<form method="POST" action="/people">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="first_name"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="last_name"><br>
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="dob">Dob:</label><br>
    <input type="date" id="dob" name="dob"><br>
    <button type="submit">SUBMIT</button>
  </form>
</body>
</html>

