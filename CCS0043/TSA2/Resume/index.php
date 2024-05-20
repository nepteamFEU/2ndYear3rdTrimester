<?php
require('header.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'personal_information';
switch ($page) {
    case 'career_objective':
        include('career_objective.php');
        break;
    case 'educational_attainment':
        include('educational_attainment.php');
        break;
    case 'skills':
        include('skills.php');
        break;
    case 'affiliation':
        include('affiliation.php');
        break;
    case 'work_experience':
        include('work_experience.php');
        break;
    case 'personal_information':
    default:
        include('personal_information.php');
        break;
}

require('footer.php');
?>
