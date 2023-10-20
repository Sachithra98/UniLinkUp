<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <!-- Add Bootstrap CSS and Font Awesome CSS links here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .profile-card {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px #aaa;
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
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="profile-card text-center">
                    <img src="{{asset('storage/images/site images/second.jpg')}}" alt="Profile Picture" class="profile-picture">
                    <h2>Name:</h2>
                    <p>
                        <i class="fas fa-envelope"></i> Email: 
                        <br>
                        <i class="fas fa-university"></i> Faculty: 
                    </p>
                    <p>Joined Society: Computer Science Club</p>
                    <span class="edit-icon" onclick="editProfile()"><i class="fas fa-edit"></i> Edit Profile</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Profile Modal -->
    <div class="modal fade" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="editProfileModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
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

    <script>
        function editProfile() {
            // Populate the modal fields with existing data
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
    <!-- Add Bootstrap JS and jQuery scripts here -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
