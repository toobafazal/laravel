<h1>ADD STUDENT</h1>
<form method="POST">
    @csrf
    <input type="text" name="stuName" id="" placeholder="Your name">
    <input type="number" name="stuClass" id="" placeholder="YourClass">
    <input type="submit" value="Insert" name="submit">
</form>