@extends('templates.navbar')

@section('style')
<style>
    body {
        font-family: Arial, sans-serif;
        margin-top: 4rem;
        padding-top: 5rem;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 500px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .profile-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .profile-image {
        width: 150px;
        height: 150px;
        background-color: #ccc;
        border-radius: 50%;
        margin: 0 auto 20px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
    }
    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: none;
    }
    .profile-image input {
        display: none;
    }
    .profile-image .placeholder {
        font-size: 50px;
        color: #fff;
        position: absolute;
    }
    .profile-info {
        list-style-type: none;
        padding: 0;
    }
    .profile-info ul {
        list-style-type: none; 
        padding: 0;
    }
    .profile-info li {
        margin-bottom: 10px;
    }
    .profile-info label {
        font-weight: bold;
    }
    .edit-icon {
        margin-left: 5px;
        cursor: pointer;
    }
    .profile-info li {
        margin-bottom: 20px;
    }
    .profile-info label {
        display: block;
        font-weight: bold;
    }
    .profile-info input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 5px;
    }
    .input-group input {
        width: calc(100% - 30px); /* Memberikan lebar kepada input, dikurangi lebar ikon edit */
        padding-right: 30px; /* Padding di sebelah kanan input untuk ikon */
    }

    @media (max-width: 768px) {
        .container {
            margin: 20px auto;
            padding: 15px;
        }
        .profile-image {
            width: 100px;
            height: 100px;
        }
    }

    .save-button {
        display: block;
        width: 100%;
        padding: 15px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background-color: #205b48;
        border: none;
        border-radius: 5px;
        text-align: center;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .save-button:active {
        background-color: #86A789;
    }
</style>
@endsection

@section('container')
    <!-- Profile Page Content -->
    <div class="container">
        <div class="profile-header">
            <div class="profile-image" onclick="document.getElementById('profileImageInput').click();">
                <img id="profileImage" src="../image/default-profile.png" alt="Profile Image">
                <span class="placeholder">+</span>
                <input type="file" id="profileImageInput" accept="image/*" onchange="previewImage(event)"
                    style="display: none;">
            </div>
        </div>
        <form class="profile-info" id="profileForm">
            <ul>
                <li class="form-group">
                    <label for="username" style="font-size: 18px;">Username</label>
                    <div class="input-group">
                        <input type="text" id="username" placeholder="Enter your username">
                        <i class="edit-icon" style="font-size: 20px; vertical-align: middle;">✎</i>
                    </div>
                </li>
                <li class="form-group">
                    <label for="fullname" style="font-size: 18px;">Full Name</label>
                    <div class="input-group">
                        <input type="text" id="fullname" placeholder="Enter your full name">
                        <i class="edit-icon" style="font-size: 20px; vertical-align: middle;">✎</i>
                    </div>
                </li>
                <li class="form-group">
                    <label for="telephone" style="font-size: 18px;">Telephone</label>
                    <div class="input-group">
                        <input type="tel" id="telephone" placeholder="Enter your telephone number">
                        <i class="edit-icon" style="font-size: 20px; vertical-align: middle;">✎</i>
                    </div>
                </li>
                <li class="form-group">
                    <label for="nik" style="font-size: 18px;">NIK</label>
                    <div class="input-group">
                        <input type="text" id="nik" placeholder="Enter your NIK">
                        <i class="edit-icon" style="font-size: 20px; vertical-align: middle;">✎</i>
                    </div>
                </li>
                <li class="form-group">
                    <label for="email" style="font-size: 18px;">Email</label>
                    <div class="input-group">
                        <input type="email" id="email" placeholder="Enter your email">
                        <i class="edit-icon" style="font-size: 20px; vertical-align: middle;">✎</i>
                    </div>
                </li>
            </ul>
        </form>
        <button class="save-button" onclick="saveProfile()">Save</button>
    </div>
    <!-- Profile Page Content End -->
    <!-- custom js file link  -->
    <script src="../js/script.js"></script>
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profileImage');
                output.src = reader.result;
                output.style.display = 'block'; // Display the image
                document.querySelector('.profile-image .placeholder').style.display =
                    'none'; // Hide the placeholder "+"
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function saveProfile() {
            const profileData = {
                username: document.getElementById('username').value,
                fullname: document.getElementById('fullname').value,
                telephone: document.getElementById('telephone').value,
                nik: document.getElementById('nik').value,
                email: document.getElementById('email').value
            };
            localStorage.setItem('profileData', JSON.stringify(profileData));
            alert('Profile saved successfully!');
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            const savedProfileData = localStorage.getItem('profileData');
            if (savedProfileData) {
                const profileData = JSON.parse(savedProfileData);
                document.getElementById('username').value = profileData.username;
                document.getElementById('fullname').value = profileData.fullname;
                document.getElementById('telephone').value = profileData.telephone;
                document.getElementById('nik').value = profileData.nik;
                document.getElementById('email').value = profileData.email;
            }

            if (savedProfileImage) {
                document.getElementById('profileImage').src = savedProfileImage;
            }
        });
    </script>
@endsection
