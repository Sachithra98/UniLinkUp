<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile and Denied Request Form</title>
    <!-- Add Bootstrap CSS and Font Awesome CSS links here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Your CSS styles here */
        .profile-card {
            border: 1px solid #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #aaa;
            height: 625px;
            background-color: #fff;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto;
            display: block;
        }
        .edit-icon {
            color: #28a745; /* Change the color as needed */
            font-size: 24px; /* Adjust the font size as needed */
            cursor: pointer;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .form-container {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 20px;
    }

        .form-title {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group textarea {
            width:80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-actions {
            text-align: center;
        }

        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-send {
            background-color: #007bff;
            color: #fff;
        }

        .btn-cancel {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="profile-card text-center">
                    <img src="{{asset('storage/images/site images/second.png')}}" alt="Profile Picture" class="profile-picture">
                    <h2>Name:M.G.P.B.Fernando</h2>
                    <p>
                        <i class="fas fa-envelope"></i> Email: sdgsdgsds@gamil.com
                        <br>
                        <i class="fas fa-university"></i> Faculty: Sceince Faculty
                    </p>
                    <p>Joined Society: Computer Science Club</p>
                    <span class="edit-icon" onclick="editProfile()"><i class="fas fa-edit"></i> Edit Profile</span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container form-container">
                    <h2 class="form-title">Denied Request</h2>
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="postID">Post ID:</label>
                            <input type="text" id="postID" name="postID" required>
                        </div>

                        <div class="form-group">
                            <label for="reasons">Reasons for Denied:</label>
                            <textarea id="reasons" name="reasons" rows="4" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="correctiveAction">Corrective Action to be Done:</label>
                            <textarea id="correctiveAction" name="correctiveAction" rows="4" required></textarea>
                        </div>

                        <div class="form-actions">
                            <button class="btn btn-send" type="submit">Send</button>
                            <button class="btn btn-cancel" type="button">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Your modal code here -->
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="editName">Name</label>
                            <input type="text" class="form-control" id="editName" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="editEmail">Email</label>
                            <input type="email" class="form-control" id="editEmail" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="editFaculty">Faculty</label>
                            <input type="text" class="form-control" id="editFaculty" placeholder="Enter your faculty">
                        </div>
                        <div class="form-group">
                            <label for="editSociety">Joined Society</label>
                            <input type="text" class="form-control" id="editSociety" placeholder="Enter the society you joined">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveProfile()">Save Changes</button>
                </div>
            </div>



        </div>
    </div>

    <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function editProfile() {
            // Your editProfile function code here



            const name = document.querySelector('#editName');
            const email = document.querySelector('#editEmail');
            const faculty = document.querySelector('#editFaculty');
            const society = document.querySelector('#editSociety');

            // Replace these values with actual data from the profile
            name.value = "John Doe";
            email.value = "johndoe@example.com";
            faculty.value = "Faculty of Science";
            society.value = "Computer Science Club";

            // Show the edit profile modal
            $('#editProfileModal').modal('show');
        }

        function saveProfile() {
            // Retrieve data from the modal fields
            const name = document.querySelector('#editName').value;
            const email = document.querySelector('#editEmail').value;
            const faculty = document.querySelector('#editFaculty').value;
            const society = document.querySelector('#editSociety').value;

            // Update the profile with the new data
            // You should implement logic to save this data on the server

            // Close the modal
            $('#editProfileModal').modal('hide');

            // Update the displayed data on the profile
            document.querySelector('h2').textContent = `Name: ${name}`;
            document.querySelector('.profile-card p:nth-child(2)').innerHTML = `<i class="fas fa-envelope"></i> Email: ${email}<br><i class="fas fa-university"></i> Faculty: ${faculty}`;
            document.querySelector('p:last-child').textContent = `Joined Society: ${society}`;
        }
        


    </script>
</body>
</html>
