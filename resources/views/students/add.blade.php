<h1>ADD STUDENT</h1>
<form action="/student/add" method="POST">
    @csrf
    <input type="text" name="stuNane" id="" placeholder="Your name">
    <input type="number" name="stuClass" id="" placeholder="YourClass">
    <input type="submit" value="Insert" name="insert">
</form>