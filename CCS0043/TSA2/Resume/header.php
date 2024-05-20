<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Resume</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            border: 1px solid black;
            width: 800px;
            margin: auto;
        }
        .sidebar {
            width: 200px;
            border-right: 1px solid black;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .menu li {
            border-top: 1px solid black;
            text-align: center;
            padding: 10px;
        }
        .menu li a {
            text-decoration: none;
            color: black;
            display: block;
        }
        .menu li a:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="picture.jpg" alt="Profile Image" style="width: 100%; height: auto;">
            <ul class="menu">
                <li><a href="index.php?page=personal_information">Personal Information</a></li>
                <li><a href="index.php?page=career_objective">Career Objective</a></li>
                <li><a href="index.php?page=educational_attainment">Educational Attainment</a></li>
                <li><a href="index.php?page=skills">Skills</a></li>
                <li><a href="index.php?page=affiliation">Affiliation</a></li>
                <li><a href="index.php?page=work_experience">Work Experience</a></li>
            </ul>
        </div>
        <div class="content">
