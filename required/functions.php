<?php

require_once 'db.php';

function createRsArray($rs)
{
    if(!$rs) return false;

    $rsArray = array();
    while($row = mysqli_fetch_assoc($rs)){
        $rsArray[] = $row;
    }
    return $rsArray;
}

function getAllCourses()
{
    global $db;
    $sql = "SELECT * FROM courses";
    $rs = mysqli_query($db, $sql);
    return createRsArray($rs);
}

function getAllTeams()
{
    global $db;
    $sql = "SELECT * FROM `team`";
    $rs = mysqli_query($db, $sql);
    return createRsArray($rs);
}

function getAllContacts()
{
    global $db;
    $sql = "SELECT * FROM `contacts`";
    $rs = mysqli_query($db, $sql);
    return createRsArray($rs);
}

function getAboutUs()
{
    global $db;
    $sql = "SELECT * FROM `about_us`";
    $rs = mysqli_query($db, $sql);
    return createRsArray($rs);
}

function getAllNews()
{
    global $db;
    $sql = "SELECT * FROM `news`";
    $rs = mysqli_query($db, $sql);
    return createRsArray($rs);
}