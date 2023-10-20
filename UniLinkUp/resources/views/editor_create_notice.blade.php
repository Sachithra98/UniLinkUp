<!DOCTYPE html>
<html>
    <head>
        <title>Notice Form</title>
        <link rel="stylesheet" href="{{ asset('css/editor_notice.css') }}">
    </head>
    <body>

        <!-- header section starts -->
	    @include('header')
	    <!-- header section ends -->

        
    <div class="main">
    <div class="craete">
        <h2>Create New Notice</h2>
        <form id="create" method="post">
            <label>Notice ID : </label>
            <input type = "text"  name = "nid" id = "id">
            <br><br>
            <label>Notice Title : </label>
            <input type = "text" name="ntitle" id = "id">
            <br><br>
            <label>Description : </label>
            <br><br>
            <textarea name="textarea" rows="5" cols="40"></textarea>
            <br><br>
            <label>Approval Letter :<label>
            <br><br>
            <input type="file" id="myFile" name="filename" multiple required>
            <br><br>
            <label>Post media :<label>
            <br><br>
            <input type="file" id="myFile" name="filename" multiple required>
            <br><br>
            <label>Faculty : </label>
            <br><br>
            <select name="faculty" id="fac">
                <option value="Science">Science</option>
                <option value="Engineering">Engineering</option>
                <option value="Medical">Medical</option>
                <option value="Management">Management</option>
              </select>
              <br><br>
            <label>Societies : </label>
            <br><br>
            <select name="Societies" id="Soc">
                <option value="Physics">Physics</option>
                <option value="Catheolic">Catheolic</option>
                <option value="Buddhist">Buddhist</option>
                <option value="Leo">Leo</option>
            </select>
            <br><br>
            <input type="submit" value="Request for publish">
            <input type="reset" value="reset">
        </form>
    </div>
    </div>

        <!-- footer section starts -->
	    @include('footer')
	    <!-- footer section ends -->
    </body>
</html>